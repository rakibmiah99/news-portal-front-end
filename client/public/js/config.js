function LoadingButton(selectBtn){
    selectBtn.addClass("d-none");
    selectBtn.next().removeClass('d-none');
}

function RemoveLoadingButton(selectBtn){
    selectBtn.removeClass("d-none");
    selectBtn.next().addClass("d-none");
}

function LoadingModal(selector){
    selector.removeClass("d-none");
    selector.next().addClass('d-none');
}
function RemoveLoadingModal(selector){
    selector.addClass("d-none");
    selector.next().removeClass("d-none");
}


// Function Error Toast Message
function ErrorToast(msg) {
    toastr.options.positionClass = 'toast-bottom-center';
    toastr.error(msg);
}

// Function Success Toast Messsage
function SuccessToast(msg) {
    toastr.options.positionClass = 'toast-bottom-center';
    toastr.success(msg);
}

function editor(editorSelector){
    editorSelector.summernote({
        placeholder: '',
        tabsize: 2,
        height: 350,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['height', ['height']]
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ]
    });
}

function validateEmail(email){
    let pattern =   /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    return pattern.test(email);
}

function validateName(name){
    if(name.length < 3){
        return false;
    }else{
        let pattern = /^[a-z ,.'-]+$/i;
        return pattern.test(name);
    }
}

function validateRequire(input,inputName){
    if(input.val().length < 1){
        input.trigger('focus');
        ErrorToast(inputName + " is required.");
        return false;
    }else{
       return true;
    }
}


function convertDate(givenDate){
    let date = new Date(givenDate);
    let year = date.getFullYear();
    let month = String(date.getMonth() + 1).padStart(2, '0');
    let day = String(date.getDate()).padStart(2, '0');
    return  joinedDate = [year, month, day].join('-');
}
