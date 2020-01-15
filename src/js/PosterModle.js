jQuery(document).ready(function($){  // always remember to define $ to be used later
///  Open Modal  ///
        $('.PosterImg').click(function(e){
            $('.JS_Poster_Modal').addClass('JS_Poster_Modal_OPN');
            AJAX_Id.bind($(this))(); //bind the "this" selector to a given function
       
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

       
         $('#js_PosterUpload').on('change', '#file', function(e) {

          if (this.files.length > 0) {
                  $.each(this.files, function (index, value) {
                    if(value.size > 2000000 ){
                      alert('File Size too large' );
                      setTimeout(location.reload.bind(location), 10); 
                      wp_die(); // kills the ajax if larger than 2MB
                      //setTimeout(location.reload.bind(location), 10); 

                    };

                    //alert(value.size );

                    $('#fp').html($('#fp').html() + '<br />' +
                        '<b>' + Math.round((value.size / 1024)) + '</b> KB');
                        
                });
                e.preventDefault();
                $this = $(this);
                file_ID = document.querySelector('#JS_HideID'),
                file_data = $(this).prop('files')[0];
                form_data = new FormData();
                form_data.append('ID', $("#ID").val());
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
                } //END IF 

       
            });
        

     

  
        
///  Close Modal -> Cancel BTN  ///
        $('.PosterCLS').click(function(){
           
            $('.JS_Poster_Modal').removeClass('JS_Poster_Modal_OPN');
        });

///  Close Modal  ///

});// END JQUERY
