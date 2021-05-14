import { validateField, validateSubmit } from './functions.js';

// Create Form

const c_btn = $("#create_button"),
    c_form = $("#create_form");

const c_fields = [
    {
        'id': 'create_name',
        'value': '',
        'regExp': /^[a-zA-z0-9\-_()\,\.\/: ]{1,21}$/,
        'valid': false
    },
    {
        'id': 'create_description',
        'value': '',
        'regExp': /^[a-zA-z0-9]+[a-zA-z0-9\-_\.\,\/*&^%$#@!:()\n\r ]{1,400}$/,
        'valid': false
    }
]

c_fields.forEach(f => {
    $("#" + f.id)
    .keyup((e) => {
        f.value = e.target.value;
        f.valid = validateField(f);
        validateSubmit(c_fields, c_btn, e);
    });
});

c_btn.click((e) => validateSubmit(c_fields, c_btn, e));

c_form.submit((e) => validateSubmit(c_fields, c_btn, e));

// End Create Form