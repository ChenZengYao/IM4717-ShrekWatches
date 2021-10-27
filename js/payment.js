function validateForm(event){
  if(validateName() == false){
    event.preventDefault();
  }else if(validateEmail() == false){
    event.preventDefault();
  }else if(validateTel() == false){
    event.preventDefault();
  }else if(validateCardNumber() == false){
    event.preventDefault();
  }else if(validateCardExpiry() == false){
    event.preventDefault();
  }else if(validateCardCSV() == false){
    event.preventDefault();
  }
}

function validateName(){
  var name = document.getElementById("name") .value;
  var nameRegex = /^([\a-zA-Z ]+)$/;
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

function validateCardNumber(){
  var card_number = document.getElementById("card_number") .value;
  var card_numberRegex = /^[0-9]{16}$/;
  if (card_numberRegex.test(card_number)) {
    return true;
  } else {
    alert('Please enter a valid card number (16digits)');
    document.getElementById("card_number").value = "";
    return false;
  }
}

function validateCardExpiry(){
  var card_expiry = document.getElementById("card_expiry") .value;
  var card_expiryRegex = /^[0-9]{4}$/;
  if (card_expiryRegex.test(card_expiry)) {
    return true;
  } else {
    alert('Please enter a valid card expiry date in MMYY format (e.g. 0121)');
    document.getElementById("card_expiry").value = "";
    return false;
  }
}

function validateCardCVV(){
  var card_cvv = document.getElementById("card_cvv") .value;
  var card_cvvRegex = /^[0-9]{3}$/;
  if (card_cvvRegex.test(card_cvv)) {
    return true;
  } else {
    alert('Please enter a valid card cvv (3digits)');
    document.getElementById("card_cvv").value = "";
    return false;
  }
}
