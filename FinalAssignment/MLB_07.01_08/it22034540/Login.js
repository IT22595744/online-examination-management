//validate for inputs

var email = document.forms['form1']['email'];
var password = document.forms['form1']['password'];


var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');

email.addEventListener('textInput', email_verify);
password.addEventListener('textInput', password_verify);

function validate(){
  if(email.value.length < 4){
    email.style.border = "1px solid red";
    email_error.style.display = "block";
    email.focus();
    return false;
  }
  if(password.value.length < 8){
    password.style.border = "1px solid red";
    password_error.style.display = "block";
    password.focus();
    return false;
  }
}

function email_verify(){
  if(email.value.length > 4){
    email.style.border="1px solid silver";
    email_error.style.display = "none";
    return true;
  }
}
function password_verify(){
  if(password.value.length >= 8){
    password.style.border="1px solid silver";
    password_error.style.display = "none";
    return true;
  }
}