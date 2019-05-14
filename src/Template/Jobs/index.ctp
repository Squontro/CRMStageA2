<?= $this->Form->create() ; ?>
<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-block">
<div class="table-responsive"> 
<div id="JobsGrid"></div>
</div>
</div>
</div>
</div>
</div>
<?= $this->Form->end() ?>
<script>
$(function() {   
   $.ajax({  //Load All Jobs Types
    type: "GET",
    url: "<?= $this->Url->build(['controller'=>'JobTypes','action'=>'indexJson'])?>" ,
    contentType: "application/json; charset=utf-8",
    datatype: "json"
})
   .done(function(jobstypes) {
       jobstypes.unshift({ id: 0, name: "" });
    //Loading the grid for with all delivery challans.
  $("#JobsGrid").jsGrid({
    width: "100%",
    height: "680px",
    filtering: true, 
    sorting: true,
    paging: true,
    editing: true,
    inserting: true,
    autoload: true,
    pageSize: 12,
    pageButtonCount: 5,
  controller: {
                loadData: function (filter) {
                    var d = $.Deferred();
                        $.ajax({
                        type: "GET",
                        url: "<?= $this->Url->build(['controller'=>'Jobs','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                var vname = (filter.name  || "").toLowerCase();
                                var vmaxsalar = (filter.max_salar  || "").toLowerCase();
                                var vminsalar = (filter.min_salar  || "").toLowerCase();
                                var vtypejob=(filter.job_type_id_id ||""); 
                                return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0)
                                        && (!vmaxsalar || item.min_salar.toLowerCase().indexOf(vmaxsalar) >= 0)
                                        && (!vminsalar || item.max_salar.toLowerCase().indexOf(vminsalar) >= 0)
                                       && (!vtypejob || item.job_type_id === filter.job_type_id) ;
                                return result ;
                            });
                            d.resolve(result);
                        });
                        return d.promise();
                        },
          // Iserting Job
                insertItem: function (item) {
                     var d = $.Deferred();
                    $.ajax({
                    type: "POST",
                    data: item ,
                    beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                    url: "<?= $this->Url->build(['controller'=>'Jobs','action'=>'addJson'])?>" ,               
                    }).done(function (response) {   
                    console.log( "done: " + JSON.stringify(response) ); 
                    d.resolve(response);
                    }).fail(function( msg ) {
                    d.reject();
                    });
                    },
                    // Updatig Job
                updateItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "PUT",
                        data: item ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'Jobs','action'=>'editJson'])?>" ,             
                        }).done(function (response) {  
                        console.log( "done: " + JSON.stringify(response) ); 
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        },
                   // Deleting Job
                deleteItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "DELETE",
                        data: item ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'Jobs','action'=>'deleteJson'])?>" ,           
                        }).done(function (response) {  
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        }
                        },
fields: [
            { name: "id", type: "text" , css: "hide", width: 0},
            { name: "job_type_id", type: "select", title: "Job Type", width: 100 , align: "left" , items: jobstypes , valueField: "id", textField: "name"  , validate: { message: "Job Type should be specified", validator: function(value) { return value > 0; } } } , 
            { name: "name", type: "text", title: "Name", width: 100 , align: "left"  , validate :"required"  }, 
            { name: "max_salar", type: "text", title: "Max salar", width: 100 , align: "left"   },
            { name: "min_salar", type: "text", title: "Min salar", width: 100 , align: "left"    }, 
            { type: "control", width: 50}
        ]
  }) ;
});
});
</script>



 









   
  









   

    


   
     


