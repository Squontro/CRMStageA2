<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-header">                  
        <div class="pull-right">
          <?php echo $this->Html->link('<i class="icofont icofont-plus"></i>' . __('Add', true),
                                       array("controller" => "employees", "action" => "add"),
                                       array(
                                         "class" => "btn btn-primary",
                                         "escape" => false,
                                         "title" => __("Add Employee")

                                       )); ?>
          <?php echo $this->Html->link('<i class="icofont icofont-plus"></i>' . __('Export', true),
                                       array("controller" => "employees", "action" => "export"),
                                       array(
                                         "class" => "btn btn-primary",
                                         "escape" => false,
                                         "title" => __("Export Excel")

                                       )); ?>
          <?php echo $this->Html->link('<i class="icofont icofont-plus"></i>' . __('Import', true),
                                       array("controller" => "employees", "action" => "import"),
                                       array(
                                         "class" => "btn btn-primary",
                                         "escape" => false,
                                         "title" => __("Import")

                                       )); ?>        
          <button type="button" class="btn btn-primary"><i class="icofont icofont-printer ">     </i><?php echo  __('Print') ; ?> </button>
        </div>    
      </div>                                                                                             
      <div class="table-responsive"> 
        <div id="EmployeeGrid"></div>
      </div>
    </div>
  </div>
</div>

<script>
  $(function() {
    $.ajax({  //Load All Services existantes
      type: "GET",
      url: "<?= $this->Url->build(['controller'=>'Services','action'=>'indexJson'])?>" ,
      contentType: "application/json; charset=utf-8",
      datatype: "json"
    })
      .done(function(services) {
      services.unshift({ id: 0, name: "" });

      $.ajax({  //Load All Jobs
        type: "GET",
        url: "<?= $this->Url->build(['controller'=>'Jobs','action'=>'indexJson'])?>" ,
        contentType: "application/json; charset=utf-8",
        datatype: "json"
      })
        .done(function(jobs) {
        jobs.unshift({ id: 0, name: "" });
        //Loading the grid for with all delivery challans.
        var selectedItems = [];    
        $("#EmployeeGrid").jsGrid({
          width: "100%",
          height: "880px",
          filtering: true, 
          sorting: true,
          paging: true,
          editing: false,
          inserting: false,
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
                url: "<?= $this->Url->build(['controller'=>'employees','action'=>'indexJson'])?>" ,
                contentType: "application/json; charset=utf-8",
                datatype: "json"
              }).done(function(result) {                     
                result = $.grep(result, function(item) {                        
                  //Filtre =""                                    
                  var vmtricule = (filter.matricule  || "").toLowerCase();
                  var vfirstname = (filter.first_name || "").toLowerCase();
                  var vlastename = (filter.laste_name || "").toLowerCase();            
                  var vphone=(filter.phone_numbre || "").toLowerCase(); 
                  var vemail=(filter.email || "").toLowerCase();
                  var vsex=(filter.sex ||"").toLowerCase();
                  var vjob=(filter.job_id ||"");  
                  var vservice=(filter.service_id ||"");                        
                  return (!vmtricule || item.matricule.toLowerCase().indexOf(vmtricule) >= 0)               
                  && (!vfirstname || item.first_name.toLowerCase().indexOf(vfirstname) >= 0)
                  && (!vlastename || item.laste_name.toLowerCase().indexOf(vlastename) >= 0)
                  && (!vphone || item.phone_numbre.toLowerCase().indexOf(vphone) >= 0)
                  && (!vemail || item.email.toLowerCase().indexOf(vemail) >= 0)
                  && (!vsex || item.sex === filter.sex)
                  && (!vjob || item.job_id === filter.job_id) 
                  && (!vservice || item.service_id === filter.service_id) ;

                  return result ;

                });
                d.resolve(result);
              });

              return d.promise();
            }    
          },
          fields: [
            {       
              itemTemplate: function(_, item) {
                return $("<input>").attr("type", "checkbox")
                  .prop("checked", $.inArray(item, selectedItems) > -1)
                  .on("change", function () {
                  $(this).is(":checked") ? selectItem(item) : unselectItem(item);
                });
              },                     
              align: "center",
              width: 30
            },
            { name: "id", type: "text" , css: "hide", width: 0},
            { name: "matricule", type: "text", title: "Code", width: 40 , align: "center" },  
            { name: "first_name", type: "text", title: "First Name", width: 60 , align: "left" }, 
            { name: "laste_name", type: "text", title: "Last Name", width: 60 , align: "left"  },
            { name: "sex", type: "select", width: 30 , align: "center" ,  items: [{ Name: "", Id: '' },{ Name: "Male", Id: 'M' },{ Name: "Female", Id: 'F' }],
             valueField: "Id" , textField: "Name" , title: "Gender"}, 
            { name: "job_id", type: "select", title: "Job", width: 100 , align: "left" , items:jobs, valueField: "id", textField: "name" },
            { name: "service_id", type: "select", title: "Service", width: 100 , align: "left" , items:services, valueField: "id", textField: "name" },
            { name: "phone_numbre", type:"text", title: "Phone", width: 60 , align: "center"},
            { type: "control", width: 30 , editButton :false , deleteButton : false , align: "center" ,   
             itemTemplate: function(value, item) {
               var $icon = $("<i>").attr("class" , "fa fa-cog").attr("aria-hidden","true");
               var $iconadd = $("<i>").attr("class" , "icofont icofont-eye-alt").append("View"); 
               var $iconedit= $("<i>").attr("class" , "icofont icofont-edit m-r-5").append("Edit"); 
               var $icondelete= $("<i>").attr("class" , "icofont icofont-ui-delete m-r-5").append("Delete"); 
               var $iconprint= $("<i>").attr("class"  , "icofont icofont-print m-r-5").append("Print"); 
               var $actionadd= $("<a>")
               .attr("class", "btn")
               .attr("title", "view")
               .attr("href" ,"<?= $this->Url->build(['controller'=>'employees','action'=>'view'])?>"+"/"+item.id)
               .append($iconadd) ;
               var $actionedit= $("<a>") 
               .attr("class", "btn")
               .attr("title", "Edit")
               .attr("href" ,"<?= $this->Url->build(['controller'=>'employees','action'=>'edit'])?>"+"/"+item.id) 
               .append($iconedit);
               var $actiondelete= $("<a>") 
               .attr("class", "btn")
               .attr("title", "Delete")
               .attr("href" ,"<?= $this->Url->build(['controller'=>'employees','action'=>'delete'])?>"+"/"+item.id)  
               .append($icondelete);
               var $actionprint= $("<a>") 
               .attr("class", "btn")
               .attr("title", "Print")
               .attr("href" ,"<?= $this->Url->build(['controller'=>'employees','action'=>'print'])?>"+"/"+item.id)
               .append($iconprint);
               var $liadd= $("<li>")
               .append($actionadd) ;
               var $liedit= $("<li>") 
               .append($actionedit) ;
               var $lidelete= $("<li>") 
               .append($actiondelete) ;
               var $liprint= $("<li>")
               .append($actionprint)  ;
               //Create Buttonn
               var $customEditButton = $("<button>")
               .attr("class" , "btn btn-primary dropdown-toggle")
               .attr("type" , "button")
               .attr("data-toggle", "dropdown")
               .attr("aria-haspopup","true")
               .attr("aria-expanded","false")
               .attr("title" , "Actions")
               .append($icon);
               //Create menu
               var $menu =$("<ul>")
               .attr("class" , "dropdown-menu dropdown-menu-right b-none contact-menu")
               .append($liadd)
               .append($liedit)
               .append($lidelete)
               .append($liprint) ;
               return $("<div>")
                 .append($customEditButton)
                 .append($menu) ;
             }
            }
          ]
        }) ;
      });
    });
  });
</script>

































