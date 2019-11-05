/////////// MODAL SECTION /////////////

    ///  Open/Close Modal  ///
function ModalOpen(){
    var ModBTN = document.getElementById("js-ProjectBtn").addEventListener("click",Open_Modal);

    function Open_Modal(){    //This opens the Modal up 
        var OpenUpModal = document.getElementById("Project_modal");
        OpenUpModal.classList.add("JS_Project_modal_OPN");
       // OpenUpModal.style.display= "flex";
       console.log(OpenUpModal);
    };
};  ModalOpen();

    
function ModalClose(){
    var ModBTN = document.getElementById("Close_Btn").addEventListener("click",Close_Modal);

    function Close_Modal(){    //This opens the Modal up 
        var CloseDownModal = document.getElementById("Project_modal");
        CloseDownModal.classList.remove("JS_Project_modal_OPN");
    };
};  ModalClose();
    ///  Open/Close Modal  ///