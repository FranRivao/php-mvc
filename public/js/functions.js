// Input Validation

export function validateField(obj){
    if(obj.regExp.test(obj.value)){ 
        setInputStyle(obj, 'valid');
        return true;
    }
    else{
        setInputStyle(obj, 'invalid');
        return false;
    }
}


export function validateConfirmPassword(password, password_repeat) {
    if(password.value == password_repeat.value && password.value != ""){
        setInputStyle(password_repeat, 'valid');
        return true;
    }
    else{
        setInputStyle(password_repeat, 'invalid');
        return false;
    }
}


export function validateSubmit(fields, btn, e, isArray = true){
    if(isArray){
        let a = 0;
        
        fields.forEach(f => {
            if(a == 0){
                if(f.valid == false || f.valid == 'false'){
                    e.preventDefault();
                    disable_button(btn);
                    a = 1;
                }
                else{
                    enable_button(btn);
                }
            }
        });
    }
    else{
        if(fields.valid == false || fields.valid == 'false'){
            e.preventDefault();
            disable_button(btn);
        }
        else{
            enable_button(btn);
        }
    }
}


export function fieldsAreSet(fields, btn){
    fields.forEach(f => {
        $("#" + f.id)
        .keyup((e) => {
            f.value = e.target.value;
            f.valid = f.value != '' ? true : false;
            validateSubmit(fields, btn, e);
        });
    });
}


// End Input Validation

// Input Styles And Error Msg

export function disable_button(btn){
    btn.removeClass('disabled');
    btn.addClass('disabled');
}


export function enable_button(btn){
    btn.removeClass('disabled');
}


export function showMsg(obj){ 
    $('#errormsg_' + obj.id).removeClass("d-none");
}


export function hideMsg(obj){ 
    $('#errormsg_' + obj.id).addClass("d-none");
}


export function input_valid(obj){ 
    $("#" + obj.id).removeClass("is-invalid").addClass("is-valid");
}


export function input_invalid(obj){
    $("#" + obj.id).removeClass("is-valid").addClass("is-invalid");
}


export function setInputStyle(obj, style){
    if(style == 'valid'){
        input_valid(obj);
        hideMsg(obj);
    }
    else if(style == 'invalid'){
        input_invalid(obj);
        showMsg(obj);
    }
    else{
        console.warn("ESTILO NO EXISTENTE");
    }
}

export function changeInputType(obj, eye){
    let input = $("#" + obj.id)[0];
    if(input.type == "password"){
        input.type = "text";
        eye.removeClass("fa-eye-slash").addClass("fa-eye");
    }
    else{
        input.type = "password";
        eye.removeClass("fa-eye").addClass("fa-eye-slash");
    }
}

// End Input Styles And Error Msg

// Sweet Alerts

export function alert(m, i, t){
    Swal.fire({
        position: 'center',
        html: '<p><b>' + m + '</b></p',
        icon: i,
        showConfirmButton: true,
        timer: t,
        timerProgressBar: true,
        stopKeydownPropagation: false
    });
}