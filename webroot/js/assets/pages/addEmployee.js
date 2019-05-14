
  
$(document).ready(function() {
    //prepare the dialog
    $( "#dialogModalService" ).dialog({
        autoOpen: false,
            height: 400,
            width: 600,
            dialogClass: 'modal-content',
            show: {
                effect: "blind",
                duration: 400
            },
            hide: {
                effect: "blind",
                duration: 500
            },
            closeText: "hide",
            modal: true
            });
    //respond to click event on anything with 'overlay' class
    $(document).on('click','.overlayService',function(e){
        e.preventDefault();
        $('#contentWrapService').load($(this).attr("href"), function ()
                {
                    $('#dialogModalService').dialog( "option", "closeText", "x" );
                    $('#dialogModalService').dialog('option', 'title', 'Add service');  //make dialog title that of link
                    $('#dialogModalService').dialog('open');  //open the dialog
        
        });      
         return false;
        });

    });

