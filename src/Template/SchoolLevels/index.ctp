<?= $this->Form->create() ; ?>
<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-block">
<div class="table-responsive"> 
<div id="SlevelGrid"></div>
</div>
</div>
</div>
</div>
</div>
<?= $this->Form->end() ?>
<script>
$(function() {   
   $.ajax({  //Load All Departmets
    type: "GET",
    url: "<?= $this->Url->build(['controller'=>'LevelStudes','action'=>'indexJson'])?>" ,
    contentType: "application/json; charset=utf-8",
    datatype: "json"
})
   .done(function(levelstudes) {
       levelstudes.unshift({ id: 0, name: "" });
    //Loading the grid for with all delivery challans.
  $("#SlevelGrid").jsGrid({
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
                        url: "<?= $this->Url->build(['controller'=>'SchoolLevels','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                var vname = (filter.name  || "").toLowerCase();
                                var vlevel=(filter.level_stude_id ||""); 
                                return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0) 
                                       && (!vlevel || item.level_stude_id === filter.level_stude_id) ;

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
                    data: item ,
                    beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                    url: "<?= $this->Url->build(['controller'=>'SchoolLevels','action'=>'addJson'])?>" ,               
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
                        data: item ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'SchoolLevels','action'=>'editJson'])?>" ,             
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
                        data: item ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'SchoolLevels','action'=>'deleteJson'])?>" ,           
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
            { name: "level_stude_id", type: "select", title: "Level study", width: 100 , align: "left" , items:levelstudes , valueField: "id", textField: "name"  , validate: { message: "Level study should be specified", validator: function(value) { return value > 0; } } } , 
            { name: "name", type: "text", title: "Name", width: 100 , align: "left"  , validate :"required"  }, 
            { name: "abr_slevel", type: "text", title: "Abbreviation", width: 100 , align: "left"  , validate :"required"  }, 
            { type: "control", width: 50}
        ]
  }) ;
});
});

</script>



 









   
  









   

    


   
     


