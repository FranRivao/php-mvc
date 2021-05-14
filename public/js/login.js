import { changeInputType, fieldsAreSet } from './functions.js';

const button = $("#login_button"),
    form = $("#login_form"),
    password_button = $("#password_button"),
    password_eye = $("#password_eye");

const fields = [
    {
        'id': 'username',
        'value': '',
        'valid': false
    },
    {
        'id': 'password',
        'value': '',
        'valid': false
    }
]

fieldsAreSet(fields, button);

password_button.click(() => changeInputType(fields[1], password_eye));

button.click((e) => validateSubmit(fields, button, e));

form.submit((e) => validateSubmit(fields, button, e));