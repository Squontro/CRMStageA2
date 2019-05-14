<?= $this->Form->create() ; ?>
<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <div class="pull-right">
                           <?php echo $this->Html->link('<i class="icofont icofont-plus"></i>' . __('Add Experience', true),
                                        array("controller" => "experiences", "action" => "add"),
                                        array(
                                            "class" => "btn btn-primary",
                                            "escape" => false,
                                            "title" => __("Add Compagnie")
                                        )); ?>
                           
                           
                        </div>    
                            </div>
                            <div class="card-block">
<div class="table-responsive"> 
<div id="ExperienceGrid"></div>
</div>
</div>
</div>
</div>
</div>
<?= $this->Form->end() ?>
<script>
$(function() {
    $.ajax({  //Load All Employees
    type: "GET",
    url: "<?= $this->Url->build(['controller'=>'employees','action'=>'indexJson'])?>" ,
    contentType: "application/json; charset=utf-8",
    datatype: "json"
})
    .done(function(employees) {
       employees.unshift({ id: 0, name: "" });
    //Loading the grid for with all delivery challans.
  $("#ExperienceGrid").jsGrid({
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
                        url: "<?= $this->Url->build(['controller'=>'experiences','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                var vexperience = (filter.experience  || "").toLowerCase();
                                return    (!vexperience || item.experience.toLowerCase().indexOf(vexperience) >= 0)   ; 
                                return result ;
                            });
                            d.resolve(result);
                        });
                        return d.promise();
                    },
          // Iserting Servcie
               /* insertItem: function (item) {
                     var d = $.Deferred();
                    $.ajax({
                    type: "POST",
                    data: item,
                    beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                    url: "<?= $this->Url->build(['controller'=>'experiences','action'=>'addJson'])?>" ,               
                    }).done(function (response) {   
                    console.log( "done: " + JSON.stringify(response) ); 
                    d.resolve(response);
                    }).fail(function( msg ) {
                    d.reject();
                    });
                    },
                    */
                    // Updatig Servcie
                updateItem: function (item) {
                    var d = $.Deferred();
                    $.ajax({
                        type: "PUT",
                        data: item  ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'experiences','action'=>'editJson'])?>" ,             
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
                        data: JSON.stringify(item) ,
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
                        url: "<?= $this->Url->build(['controller'=>'compagnes','action'=>'deleteJson'])?>" ,           
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
            
            { name: "experience", type: "text", title: "Experience", width: 200 , align: "left"  , validate :"required"  },
            { name: "date_exp_start", type: "text", title: "Start date", width: 40 , align: "left"    },
            { name: "date_exp_end", type: "text", title: "End date", width: 40 , align: "center"   },
            { type: "control", width: 50}
        ]
  }) ;
});
});
</script>





 









   
  









   

    


   
     


