<?= $this->Form->create() ; ?>
<div class="row">
  <div class="col-sm-12">
    <!-- Basic Inputs Validation start -->
    <div class="card">
      <div class="card-block">
        <div class="table-responsive"> 
          <div id="jsgrid"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->Form->end() ?>

<script>

  $.ajax({
    type: "GET",
    url: "<?= $this->url->build(['controller'=>'Countries','action'=>'indexJson']) ?>"
  }).done(function(countries) { 

    countries.unshift({ id: "0", name: "" });

    $('#jsgrid').jsGrid({
      width: "100%",
      height: "600px",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete data?",

      controller: {
        loadData: function(filter){
          return $.ajax({
            type: "GET",
            url:  "<?= $this->url->build(['controller'=>'Wilayas','action'=>'indexJson']) ?>",
            data: filter
          });
        },
      },

      fields: [
        {
          name: "Id",
          type: "hidden",
          css: 'hide'
        },
        {
          name: "<?= __('name')?>", 
          type: "text", 
          width: 150, 
          validate: "required"
        },
        {
          name: "<?= __('country_id')?>", 
          type: "select", 
          items: countries,
          valueField: "id", 
          textField: "name", 
          validate: "required"
        },
        { type: "control" }
      ]

    });
  });

</script>



































