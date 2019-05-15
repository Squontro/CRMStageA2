<?= $this->Form->create() ; ?>
<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-block">
        <div class="table-responsive"> 
          <div id="UsersGrid"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->Form->end() ?>
<script>
  $("#UsersGrid").jsGrid({
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
          url: "<?= $this->Url->build(['controller'=>'Users','action'=>'indexJson'])?>" ,
          contentType: "application/json; charset=utf-8",
          datatype: "json"
        }).done(function(result) {                     
          result = $.grep(result, function(item) {
            //Filtre =""                        
            var vname = (filter.name  || "").toLowerCase();
            var vacode = (filter.code  || "").toLowerCase(); 
            return    (!vname || item.name.toLowerCase().indexOf(vname) >= 0)  
            && (!vacode || item.code.toLowerCase().indexOf(vadress) >= 0) ; 
            return result ;
          });
          d.resolve(result);
        });
        return d.promise();
      },
      // Iserting Wilaya
      insertItem: function (item) {
        var d = $.Deferred();
        $.ajax({
          type: "POST",
          data: item  ,
          beforeSend: function(xhr) {
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
          url: "<?= $this->Url->build(['controller'=>'Users','action'=>'addJson'])?>" ,               
        }).done(function (response) {   
          console.log( "done: " + JSON.stringify(response) ); 
          d.resolve(response);
        }).fail(function( msg ) {
          d.reject();
        });
      },
      // Updatig wilaya
      updateItem: function (item) {
        var d = $.Deferred();
        $.ajax({
          type: "PUT",
          data: item  ,
          beforeSend: function(xhr) {
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
          url: "<?= $this->Url->build(['controller'=>'Users','action'=>'editJson'])?>" ,             
        }).done(function (response) {  
          console.log( "done: " + JSON.stringify(response) ); 
          d.resolve(response);
        }).fail(function( msg ) {
          d.reject();
        });
      },
      // Deleting Wilaya
      deleteItem: function (item) {
        var d = $.Deferred();
        $.ajax({
          type: "DELETE",
          data: item ,
          beforeSend: function(xhr) {
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());},
          url: "<?= $this->Url->build(['controller'=>'Users','action'=>'deleteJson'])?>" ,           
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
      { name: "last_name", type: "text", title: "Last_name", width: 40 , align: "left"  , validate : "required"  },
      { name: "first_name", type: "text", title: "First_name", width: 40 , align: "left"  , validate : "required"  },
      { name: "username", type: "text", title: "Username", width: 40 , align: "left"  , validate : "required"  },
      { name: "email", type: "text", title: "Email", width: 120 , align: "left"  , validate : "required"  }, 
      { name: "profile", type: "select", title: "profile", width: 80 , align: "left" , items : profiles , valueField: "id", textField: "name",
       validate: { message: "Profile should be specified", validator: function(value) { return value > 0; }}}, 
      {type: "control", width: 50}
    ]
  }) ;
  });
</script>
