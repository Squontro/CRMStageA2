<?= $this->Form->create() ; ?>
<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-block">
<div class="table-responsive"> 
<div id="TownsGrid"></div>
</div>
</div>
</div>
</div>
</div>
<?= $this->Form->end() ?>
<script>
$(function() {   
   $.ajax({  //Load All Dairas
    type: "GET",
    url: "<?= $this->Url->build(['controller'=>'Dairas','action'=>'indexJson'])?>" ,
    contentType: "application/json; charset=utf-8",
    datatype: "json"
})
   .done(function(dairas) {
       dairas.unshift({ id: 0, name: "" });
    //Loading the grid for with all delivery challans.
  $("#TownsGrid").jsGrid({
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
                        url: "<?= $this->Url->build(['controller'=>'Towns','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                var vname = (filter.name  || "").toLowerCase();
                                var vcode = (filter.code  || "").toLowerCase();
                                var vdaira=(filter.daira_id ||""); 
                                return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0)
                                        &&  (!vcode || item.code.toLowerCase().indexOf(vcode) >= 0)  
                                       && (!vdaira || item.daira_id === filter.daira_id) ;

                                return result ;
                            });
                            d.resolve(result);
                        });
                        return d.promise();
                    },
          // Iserting Daira
                insertItem: function (item) {
                     var d = $.Deferred();
                    $.ajax({
                    type: "POST",
                    data: item ,
                    beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                    url: "<?= $this->Url->build(['controller'=>'Towns','action'=>'addJson'])?>" ,               
                    }).done(function (response) {   
                    console.log( "done: " + JSON.stringify(response) ); 
                    d.resolve(response);
                    }).fail(function( msg ) {
                    d.reject();
                    });
                    },
                    // Updatig Daira
                updateItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "PUT",
                        data: item ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'Towns','action'=>'editJson'])?>" ,             
                        }).done(function (response) {  
                        console.log( "done: " + JSON.stringify(response) ); 
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        },
                   // Deleting daira
                deleteItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "DELETE",
                        data: item ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'Towns','action'=>'deleteJson'])?>" ,           
                        }).done(function (response) {  
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        }
            },
fields: [
        { name: "id", type: "text" , css: "hide", width: 0},                
        { name: "daira_id", type: "select", title: "Daira", width: 80 , align: "left" , items : dairas , valueField: "id", textField: "name"  ,
                validate: { message: "Daira should be specified", validator: function(value) { return value > 0; } }} ,  
        { name: "code", type: "text", title: "Code", width: 40 , align: "left"  , validate :"required"  },
        { name: "name", type: "text", title: "Name", width: 120 , align: "left"  , validate :"required"  }, 
        { type: "control", width: 50}
        ]
  }) ;
});
});
</script>



 









   
  









   

    


   
     


