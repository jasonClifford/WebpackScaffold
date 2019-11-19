/// CRETE PAGE JS ///  



jQuery(document).ready(function($){  // always remember to define $ to be used later

    $('#js_CreatePage').on('submit', function(e){
        e.preventDefault();

        ajaxRequest();   // REF FUNCTION BELOW
    });


     function ajaxRequest(){
        var ProjectName = document.querySelector('#ProjectName'),
            ProjectDiscript = document.querySelector('#ProjectDiscription'),
            ajaxURL = postdata.ajax_url,
            nonceValue = postdata.ajax_nonce;
        
        //console.log(ajaxURL);
        //console.log(ProjectDiscript.value);
       // console.log(ProjectName.value);


      
        

         var request = $.post(
            ajaxURL,    //this points to the url ajax-admin.php as a var
           {
                action: 'my_ajax_hook',
                security: nonceValue,
                ProjectName: ProjectName.value,
                ProjectDiscript: ProjectDiscript.value,

          },
             function( status ){
              console.log(status); //result if data recieved from js file
            },
     );

         request.done(function(response){
           console.log('The server responded:');
              console.log(response);


       });


    };



});// END JQUERY

