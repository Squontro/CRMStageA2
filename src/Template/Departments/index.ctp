<?= $this->Form->create() ; ?>
<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-block">
<div class="table-responsive"> 
<div id="DeaprtmentGrid"></div>
</div>
</div>
</div>
</div>
</div>
<?= $this->Form->end() ?>
<script>
$(function() {
   $.ajax({  //Load All Cmpagnes existant
    type: "GET",
    url: "<?= $this->Url->build(['controller'=>'Compagnes','action'=>'indexJson'])?>" ,
    contentType: "application/json; charset=utf-8",
    datatype: "json"
})
   .done(function(compagnes) {
       compagnes.unshift({ id: 0, name: "" });
    //Loading the grid for with all delivery challans.
  $("#DeaprtmentGrid").jsGrid({
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
    confirmDeleting: true,
    deleteConfirm: "Are you sure ?",
  controller: {
                loadData: function (filter) {
                    var d = $.Deferred();
                        $.ajax({
                        type: "GET",
                        url: "<?= $this->Url->build(['controller'=>'Departments','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                  var vname = (filter.name  || "").toLowerCase();
                                  var vcompagne=(filter.compagne_id ||""); 
                                return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0) 
                                          && (!vcompagne || item.compagne_id === filter.compagne_id) ;

                                return result ;
                            });
                            d.resolve(result);
                        });
                        return d.promise();
                    },
          // Iserting Servcie
                insertItem: function (item) {
                     var d = $.Deferred();
                    $.ajax({
                    type: "POST",
                    data: item  ,
                    beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                    url: "<?= $this->Url->build(['controller'=>'departments','action'=>'addJson'])?>" ,               
                    }).done(function (response) {   
                    console.log( "done: " + JSON.stringify(response) ); 
                    d.resolve(response);
                    }).fail(function( msg ) {
                    d.reject();
                    });
                    },
                    // Updatig Servcie
                updateItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "PUT",
                        data: item  ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'departments','action'=>'editJson'])?>" ,             
                        }).done(function (response) {  
                        console.log( "done: " + JSON.stringify(response) ); 
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        },
                   // Deleting Servcie
                deleteItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "DELETE",
                        data: item  ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'departments','action'=>'deleteJson'])?>" ,           
                        }).done(function (response) {  
                        console.log( "done: " + JSON.stringify(response) ); 
                        d.resolve(response);
                        }).fail(function( msg ) {
                        d.reject();
                        });
                        }
            },
fields: [
            { name: "id", type: "text" , css: "hide", width: 0},
            { name: "compagne_id", type: "select", title: "Compagnie", width: 100 , align: "left" , items:compagnes, valueField: "id", textField: "name"  ,
                validate: { message: "Compagnie should be specified", validator: function(value) { return value > 0; } }
             } , 
            { name: "name", type: "text", title: "Name", width: 100 , align: "left"  , validate :"required"  }, 
            { type: "control", width: 50}
        ]
  }) ;
});
});

</script>



 









   
  









   

    


   
     


