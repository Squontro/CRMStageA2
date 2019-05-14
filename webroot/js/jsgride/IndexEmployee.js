$(function() {

  $("#grid").jsGrid({
    width: "100%",
    height: "620px",
    filtering: true,
    editing: true,
    sorting: true,
    paging: true,
    inserting: true,
    autoload: true,
    pageSize: 12,

  controller: {
                loadData: function (filter) {
                        $.ajax({
                        type: "GET",
                        url: "<?= $host.$basepath ?>/services/",
                        data: filter
                    });
                },
                insertItem: function (item) {             
                    $.ajax({
                        type: "POST",
                        url: "/services",
                        data: item
                    });
                },
                updateItem: function (item) {
                    $.ajax({
                        type: "PUT",
                        url: "/services",
                        data: item
                    });
                },
                deleteItem: function (item) {
                    $.ajax({
                        type: "DELETE",
                        url: "/services",
                        data: item
                    });
                }
            },
    fields: [
      { name: "title_service", type: "text", title: "Service", width: 150 },   
      { type: "control" }
    ]
  })  
})

