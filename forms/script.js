var nameError = document.getElementById('name-error');
var emailError = document.getElementById('email-error');
var phoneError = document.getElementById('phone-error');
var addressError = document.getElementById('address-error');
// var pincodeError = document.getElementById('pincode-error');
var passwordError = document.getElementById('password-error');
var confirmpwdError = document.getElementById('confirmpwd-error');

function validateName(){
    var name = document.getElementById('contact-name').value;
    if(!name.match(/^[a-zA-Z]+ [a-zA-Z]+$/)){
        nameError.innerHTML = 'Write full name';
        return false;
    }
    nameError.innerHTML=" ";
    return true;
}

function validatePhone(){
    var phone = document.getElementById('contact-phone').value;
    if(!phone.match(/^[6789][0-9]{9}$/)){
        phoneError.innerHTML = '10 digits starting with 6 7 8 or 9';
        return false;
    }
    phoneError.innerHTML=" ";
    return true;
}

function validateEmail(){
    var email = document.getElementById('contact-email').value;
    if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
       emailError.innerHTML = 'Enter valid email';
        return false;
    }
    emailError.innerHTML=" ";
    return true;
}

function validateAddress(){
    var address = document.getElementById('contact-address').value;
    if(!address.match(/^[a-zA-Z0-9\s\,\''\-]*$/)){
       addressError.innerHTML = 'Enter valid address';
        return false;
    }
    function hasBlankSpaces(str){
        return  str.match(/^\s+$/) !== null;
    }
    if(hasBlankSpaces(address)){
        addressError.innerHTML = 'The field has blank spaces';
        return false;
    }
    addressError.innerHTML=" ";
    return true;
}

// function validatePincode(){
//     var pincode = document.getElementById('contact-pincode').value;
//     if(!pincode.match( /^(\d{4}|\d{6})$/)){
//        pincodeError.innerHTML = 'Enter valid pincode';
//         return false;
//     }
//     pincodeError.innerHTML=" ";
//     return true;
// }

function validatePassword(){
    var password = document.getElementById('contact-password').value;
    if(!password.match(/[a-z]/g)){
        passwordError.innerHTML = 'Include min 1 small letter';
        return false;
    }
    if(!password.match(/[A-Z]/g)){
        passwordError.innerHTML = 'Include min 1 capital letter';
        return false;
    }
    if(!password.match(/[0-9]/g)){
        passwordError.innerHTML = 'Include 1 digit';
        return false;
    }
    if(!password.match(/[^a-zA-Z\d]/g)){
        passwordError.innerHTML = 'Include 1 special character';
        return false;
    }
    if(password.length < 8){
        passwordError.innerHTML = 'Minimum 8 characters';
        return false;
    }
    passwordError.innerHTML=" ";
    return true;
}

function validateConfirmpwd(){
    var cpassword = document.getElementById('contact-confirmpwd').value;
    var password = document.getElementById('contact-password').value;
    if(password != cpassword){
        confirmpwdError.innerHTML = 'Password did not match';
        return false;
    }
    confirmpwdError.innerHTML=" ";
    return true;
}