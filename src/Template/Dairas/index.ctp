<?= $this->Form->create() ; ?>
<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-block">
<div class="table-responsive"> 
<div id="DairasGrid"></div>
</div>
</div>
</div>
</div>
</div>
<?= $this->Form->end() ?>
<script>
$(function() {   
   $.ajax({  //Load All Wilayaass
    type: "GET",
    url: "<?= $this->Url->build(['controller'=>'Wilayas','action'=>'indexJson'])?>" ,
    contentType: "application/json; charset=utf-8",
    datatype: "json"
})
   .done(function(wilayas) {
       wilayas.unshift({ id: 0, name: "" });
    //Loading the grid for with all delivery challans.
  $("#DairasGrid").jsGrid({
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
                        url: "<?= $this->Url->build(['controller'=>'Dairas','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                var vname = (filter.name  || "").toLowerCase();
                                var vwilaya=(filter.wilaya_id ||""); 
                                return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0) 
                                       && (!vwilaya || item.wilaya_id === filter.wilaya_id) ;

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
                    url: "<?= $this->Url->build(['controller'=>'Dairas','action'=>'addJson'])?>" ,               
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
                        url: "<?= $this->Url->build(['controller'=>'Dairas','action'=>'editJson'])?>" ,             
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
                        url: "<?= $this->Url->build(['controller'=>'Dairas','action'=>'deleteJson'])?>" ,           
                        }).done(function (response) {  
                        //console.log( "done: " + JSON.stringify(response) ); 
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        }
            },
fields: [
        { name: "id", type: "text" , css: "hide", width: 0},                
        { name: "wilaya_id", type: "select", title: "Wilaya", width: 80 , align: "left" , items:wilayas , valueField: "id", textField: "name"  ,
                validate: { message: "Wilaya should be specified", validator: function(value) { return value > 0; } }} ,  
        { name: "code", type: "text", title: "Code", width: 60 , align: "left"  , validate :"required"  },
        { name: "name", type: "text", title: "Name", width: 100 , align: "left"  , validate :"required"  }, 
        { type: "control", width: 50}
        ]
  }) ;
});
});

</script>



 









   
  









   

    


   
     


