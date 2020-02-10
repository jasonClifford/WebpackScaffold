/// CRETE PAGE JS ///  



jQuery(document).ready(function($){  // always remember to define $ to be used later

    $('#js_CreatePage').on('submit', function(e){
        e.preventDefault();

        $('#Project_modal').removeClass('JS_Project_modal_OPN');// close moddle window

        ajaxCreatePage();   // REF FUNCTION BELOW
      

    });


     function ajaxCreatePage(){
   
        var ProjectName = document.querySelector('#ProjectName'),
            ProjectDiscript = document.querySelector('#ProjectDiscription'),
            Com = $("#communication").is(":checked"),
            Tim = $("#time_line").is(":checked"),
            Loc = $("#locations").is(":checked"),
            Bug = $("#budgeting").is(":checked"),
            ajaxURL = CreatePageNC.ajax_url2,
            TypeOption = $( '#js-PageType').val(),
            nonceValue = CreatePageNC.ajax_nonce;  
            alert(Tim);        

         var request = $.post(
            ajaxURL,    //this points to the url ajax-admin.php as a var
           {
                action: 'CreatePage',
                security: nonceValue,
                ProjectName: ProjectName.value,
                ProjectDiscript: ProjectDiscript.value,
                TypeOption: TypeOption,

          },
             
     );


    };

    
    //////  STOPS UNWATNTED PAGE CREATION IF "ENTER" KEY IS HIT   ////////////////////////
    $('#js_CreatePage').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
          e.preventDefault();
          return false;
        }
      });

      ////////////// Get Pages to dispay /////////////////

      


});// END JQUERY

