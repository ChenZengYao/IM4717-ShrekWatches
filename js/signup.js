/*
The name field contains alphabet characters and character spaces.
The email field contains a user name part follows by “@” and a domain name part.
The user name contains word characters including hyphen (“-”) and period (“.”).
The domain name contains two to four address extensions.
Each extension is string of word characters and separated from the others by a period (“.”).
The last extension must have two to three characters.
*/

//Form script
function validateForm(event){
  if(validateName() == false){
    event.preventDefault();
  }else if(validateEmail() == false){
    event.preventDefault();
  }else if(validateTel() == false){
    event.preventDefault();
  }
}

function validateName(){
  var name = document.getElementById("name") .value;
  var nameRegex = /^([A-za-z\s]+)$/;
  if (!nameRegex.test(name)) {
    alert('Please enter a valid name');
    document.getElementById("name").value = "";
    return false;
  }
}

function validateEmail(){
  var email = document.getElementById("email").value;
  var emailexp = /^[\w\.-]+@([\w]+\.){1,3}([a-z]){2,3}$/;
  if(emailexp.test(email)) {
    return true;
  } else {
    alert('Not a valid email format.');
    document.getElementById("email").value = "";
    return false
  }
}

function validateTel(){
  var tel = document.getElementById("tel") .value;
  var telRegex = /^[0-9]{8}$/;
  if (telRegex.test(tel)) {
    return true;
  } else {
    alert('Please enter a valid tel number (8digits)');
    document.getElementById("tel").value = "";
    return false;
  }
}
