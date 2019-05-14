<?= $this->Form->create() ; ?>
<div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-block">
<div class="table-responsive"> 
<div id="CompagneGrid"></div>
</div>
</div>
</div>
</div>
</div>
<?= $this->Form->end() ?>
<script>
$(function() {
    //Loading the grid for with all delivery challans.
  $("#CompagneGrid").jsGrid({
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
                        url: "<?= $this->Url->build(['controller'=>'compagnes','action'=>'indexJson'])?>" ,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json"
                    }).done(function(result) {                     
                    result = $.grep(result, function(item) {
                                //Filtre =""                        
                                var vname = (filter.name  || "").toLowerCase();
                                var vadress = (filter.adress_comp  || "").toLowerCase(); 
                                var vemail = (filter.email_comp  || "").toLowerCase();
                                var vphone = (filter.phone_number  || "").toLowerCase();
                                var vfax = (filter.fax_comp  || "").toLowerCase();
                                var vsite = (filter.site_web  || "").toLowerCase();
                                var vface = (filter.facebook  || "").toLowerCase();

                                return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0)  
                                         && (!vadress || item.adress_comp.toLowerCase().indexOf(vadress) >= 0)
                                         && (!vemail || item.email_comp.toLowerCase().indexOf(vemail) >= 0)
                                         && (!vphone || item.phone_number.toLowerCase().indexOf(vphone) >= 0)      
                                         && (!vfax || item.fax_comp.toLowerCase().indexOf(vfax) >= 0) 
                                         && (!vsite || item.site_web.toLowerCase().indexOf(vsite) >= 0) 
                                         && (!vface || item.facebook.toLowerCase().indexOf(vface) >= 0)  ; 
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
                    url: "<?= $this->Url->build(['controller'=>'compagnes','action'=>'addJson'])?>" ,               
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
                        url: "<?= $this->Url->build(['controller'=>'compagnes','action'=>'editJson'])?>" ,             
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
            { name: "name", type: "text", title: "Name", width:80 , align: "left"  , validate :"required"  }, 
            { name: "adress_comp", type: "text", title: "Address", width: 120 , align: "left"  , validate :"required"  },
            { name: "email_comp", type: "text", title: "Email", width: 120 , align: "left"    },
            { name: "phone_number", type: "text", title: "Phone", width: 40 , align: "center"   },
            { name: "fax_comp", type: "text", title: "Fax", width: 40 , align: "center"    },
            { name: "site_web", type: "text", title: "Website", width: 80 , align: "center"    },
            { name: "facebook", type: "text", title: "Facebook", width: 80 , align: "center"    },
            { type: "control", width: 50}
        ]
  }) ;
});
</script>





 









   
  









   

    


   
     


