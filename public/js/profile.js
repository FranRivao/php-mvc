import { disable_button, enable_button, validateField, validateSubmit, changeInputType } from './functions.js'

// Delete Form

const d_field = {
    'id': 'delete_checkbox',
    'valid': false
};

const d_checkbox = $("#" + d_field.id),
    d_button = $("#delete_button"),
    d_form = $("#delete_form");

d_checkbox.change(() => {
    d_checkbox[0].checked ? enable_button(d_button) : disable_button(d_button);
});

d_button.click((e) => validateSubmit(d_field, d_button, e));

d_form.submit((e) => validateSubmit(d_field, d_button, e));

// End Delete Form

// Edit Form

const e_field = {
    'id': 'edit_checkbox',
    'valid': false
};

const e_checkbox = $("#" + e_field.id),
    e_btn = $("#edit_button"),
    e_form = $("#edit_form");

e_checkbox.change(() => {
    if(e_checkbox[0].checked){
        enable_button(e_btn);
        e_field.valid = true;
    }
    else{
        disable_button(e_btn);
        e_field.valid = false;
    }
});

e_btn.click((e) => validateSubmit(e_field, e_btn, e, false));

e_form.submit((e) => validateSubmit(e_field, e_btn, e, false));

// End Edit Form

// Password Form

const p_submit_btn = $("#password_button"),
    p_form = $("#password_form");

const p_fields = [
    {
        'id': 'new_password',
        'value': '',
        'valid': false,
        'regExp': /^[a-zA-z0-9\-_*&^%$#@!]{8,64}$/
    },
    {
        'id': 'actual_password',
        'value': '',
        'valid': false,
        'regExp': /^[a-zA-z0-9\-_*&^%$#@!]{8,64}$/
    },
    {
        'id': 'password_checkbox',
        'valid': false
    }
];

const p_checkbox = $("#" + p_fields[2].id),
    new_password_eye_btn = $("#" + p_fields[0].id + "_button"),
    new_password_eye = $("#" + p_fields[0].id + "_eye"),
    actual_password_eye_btn = $("#" + p_fields[1].id + "_button"),
    actual_password_eye = $("#" + p_fields[1].id + "_eye");

p_checkbox.change(() => {
    if(p_checkbox[0].checked){
        enable_button(p_submit_btn);
        p_fields[2].valid = true;
    }
    else{
        disable_button(p_submit_btn);
        p_fields[2].valid = false;
    }
});

p_fields.forEach(f => {
    $("#" + f.id).keyup((e) => {
        if(f.id != p_fields[2].id){
            f.value = e.target.value;
            f.valid = validateField(f);
        }
    });
});

new_password_eye_btn.click(() => changeInputType(p_fields[0], new_password_eye));

actual_password_eye_btn.click(() => changeInputType(p_fields[1], actual_password_eye));

p_submit_btn.click((e) => validateSubmit(p_fields, p_submit_btn, e))

p_form.submit((e) => validateSubmit(p_fields, p_submit_btn, e));

// End Password Form