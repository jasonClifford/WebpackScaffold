jQuery(document).ready(function($){  // always remember to define $ to be used later



///  Open Modal  ///
        $('.PosterImg').click(function(e){
            $('.JS_Poster_Modal').addClass('JS_Poster_Modal_OPN');
            AJAX_Id.bind($(this))(); //bind the "this" selector to a given function
            //display_images_from_media_library();              
          
        });

        

///  Open Modal  ///
///  Bind the Open Click to "THIS" and Populate a hidden input feild  ///
        function AJAX_Id(){          /// Get the Id and pass to a Div for AJAX later use
           var IDstr = $(this).find('p').text();
           //alert(IDstr);
          // $('#JS_HideID').empty().append(IDstr); 
          var id = document.getElementById('ID');
          id.value = IDstr; //writes the ID back into a form element
        };

       
  
      $('#PosterSBMT').click(function(e){
              e.preventDefault();
             // $('body').css('cursor', 'progress');
            
              var fileInput = document.getElementById('file');
              var file = fileInput.files[0];

              var MedLibSelect = document.getElementById('Pics');
              //alert(fileInput.value);

                ////////// EVAL FILE SIZE LESS 2MB
                if (file === undefined) {  // IF FILE IS NOTHING THEN RETURN TO START
                  alert('Pick a file Please');
                  return false;

                } else if(file.size > 0) {  // IF FILE IS GREATER THAN 0 CHECK TO SEE IF GREATER THAN 2MB
                    
                    $.each(file, function (index, value) {
                      if(file.size > 2000000 ){
                        alert('File Size too large' );
                        setTimeout(location.reload.bind(location), 10); 
                        wp_die(); // kills the ajax if larger than 2MB
                        //setTimeout(location.reload.bind(location), 10); 

                      };///////// EVAL FILE SIZE LESS 2MB. IF LESS - COMPLETE FUNCTION

                    // alert(file.size);

                      /// SHOWS FILE SIZE
                      $('#fp').html($('#fp').html() + '<br />' +
                          '<b>' + Math.round((file.size / 1024)) + '</b> KB');
                          
                      });
                
                            $this = $(this);
                           // file_ID = document.querySelector('#JS_HideID'),/// GET ID AGAIN FROM HIDDEN FORM INPUT
                            file_data = file;
                            form_data = new FormData();
                            form_data.append('ID', $("#ID").val());// GETS THE POST ID THAT IS HIDDEN
                            form_data.append('file', file_data);
                            form_data.append('action', 'file_upload');
                      
                            $.ajax({
                                url: aw.ajaxurl,
                                type: 'POST',
                                contentType: false,
                                processData: false,
                                data: form_data,
                                success: function (response) {
                                    //alert('File uploaded successfully.');
                                    $('.JS_Poster_Modal').removeClass('JS_Poster_Modal_OPN');// ///  Close Modal  ///
                                    setTimeout(location.reload.bind(location), 10);  
                                    }
                              });


                    }

              

        
      });// END BUTTON CLICK






      $('#Pics img').click(function(){
          $('#Pics img').removeClass('imgSelected');
          $(this).toggleClass('imgSelected');
          var PostID = $("#ID").val()
          var PosterIdStr =  $(this).parent().find('p').text();
         // alert(PostID);
       // return false;

      });
        

     

  
        
///  Close Modal -> Cancel BTN  ///
        $('.PosterCLS').click(function(){
           
            $('.JS_Poster_Modal').removeClass('JS_Poster_Modal_OPN');
        });

///  Close Modal  ///

});// END JQUERY
