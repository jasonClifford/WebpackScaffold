/////////// MODAL SECTION /////////////
jQuery(document).ready(function($){  // always remember to define $ to be used later


    ///  Open/Close Modal  ///
            $('#js-ProjectBtn').click(function(){
                $('#Project_modal').addClass('JS_Project_modal_OPN');
            });

            $('#Close_Btn').click(function(){
                $('#Project_modal').removeClass('JS_Project_modal_OPN');
            });

    ///  Open/Close Modal  ///

    //  Dynamicly fix typed words to look like resulting URL from Page creation //

    $('#ProjectName').keyup(function(){
        var path   =  $(location).attr('pathname');
        var origin   =  window.location.origin;
       $('#urlAppend').text(window.location.origin + $(location).attr('pathname') + $('#ProjectName').val().replace(/[^a-z0-9\s]/gi, '').replace(/\s+/g, '-').toLowerCase());
       
    });

    /////////////////////////////////

    /////////////////// CLICK INTO FOR SUBMIT BUTTON //////////////////////////
    $('#sub-js-CreatePageBTN').click(function(){
        $("#js-CreatePageBTN").click()

      
        
       
       // Millisecond delay to reset curent window
        var yourUhere   =  window.location.href;
        var delay = 1000; 
        setTimeout(function(){ window.location = yourUhere; }, delay);
        
        
    });


});// END JQUERY
