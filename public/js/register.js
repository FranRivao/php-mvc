import { validateField, validateConfirmPassword, validateSubmit, changeInputType } from "./functions.js";

const btn = $("#register_button"),
    form = $("#register_form"),
    password_btn = $("#password_button"),
    password_eye = $("#password_eye"),
    password_repeat_btn = $("#password_repeat_button"),
    password_repeat_eye = $("#password_repeat_eye");

const fields = [
    {
        'id': 'name',
        'value': '',
        'valid': false,
        'regExp': /^[a-zA-z ]{1,30}$/
    },
    {
        'id': 'surname',
        'value': '',
        'valid': false,
        'regExp': /^[a-zA-z ]{1,30}$/
    },
    {
        'id': 'username',
        'value': '',
        'valid': false,
        'regExp': /^[a-zA-z0-9\-\_]{4,16}$/
    },
    {
        'id': 'email',
        'value': '',
        'valid': false,
        'regExp': /^[a-zA-Z0-9\._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+$/
    },
    {
        'id': 'password',
        'value': '',
        'valid': false,
        'regExp': /^[a-zA-z0-9\-_*&^%$#@!]{8,64}$/
    },
    {
        'id': 'password_repeat',
        'value': '',
        'valid': false
    }
];

fields.forEach(f => {
    $("#" + f.id)
    .keyup((e) => {
        f.value = e.target.value;

        if(f.id == fields[5].id){
            f.valid = validateConfirmPassword(fields[4], f);
        }
        else if(f.id == fields[4].id){
            f.valid = validateField(f);
            fields[5].valid = validateConfirmPassword(f, fields[5]);
        }
        else{
            f.valid = validateField(f);
        }

        validateSubmit(fields, btn, e);
    });
});
   
password_btn.click(() => changeInputType(fields[4], password_eye));
   
password_repeat_btn.click(() => changeInputType(fields[5], password_repeat_eye));

btn.click((e) => validateSubmit(fields, btn, e));

form.submit((e) => validateSubmit(fields, btn, e));