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

    //  Dynamic inner html updating //

 


    $('#ProjectName').keyup(function(){
        var origin   =  $(location).attr('pathname');
        
       $('#urlAppend').text($(location).attr('pathname') + $('#ProjectName').val().replace(/[^a-z0-9\s]/gi, '').replace(/\s+/g, '-').toLowerCase());
       
    });

    /////////////////////////////////

    /////////////////// CLICK INTO FOR SUBMIT BUTTON //////////////////////////
    $('#sub-js-CreatePageBTN').click(function(){
        $("#js-CreatePageBTN").click()
    });


});// END JQUERY
