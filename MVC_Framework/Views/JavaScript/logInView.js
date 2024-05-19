var logInFormDiv = document.querySelector('#logInFormDiv');
var createAccountButton = document.querySelector('#createAccountButton');
var createAccountFormDiv = document.querySelector('#createAccountFormDiv');
var signUpBackButton = document.querySelector('#signUpBackButton');
var logInEmail = document.querySelector('#logInEmail');
var logInEmailLabel = document.querySelector('#logInEmailLabel');
var logInPassword = document.querySelector('#logInPassword');
var logInPasswordLabel = document.querySelector('#logInPasswordLabel');
var rememberMe = document.querySelector('#rememberMe');
var clearFields = document.querySelector('#clearFields');
var logInSubmit = document.querySelector('#logInSubmit');

var firstName = document.querySelector('#firstName');
var firstNameLabel = document.querySelector('#firstNameLabel');
var lastName = document.querySelector('#lastName');
var lastNameLabel = document.querySelector('#lastNameLabel');
var phoneNumber = document.querySelector('#phoneNumber');
var phoneNumberLabel = document.querySelector('#phoneNumberLabel');
var email = document.querySelector('#email');
var emailLabel = document.querySelector('#emailLabel');
var password = document.querySelector('#password');
var passwordLabel = document.querySelector('#passwordLabel');
var confirmPassword = document.querySelector('#confirmPassword');
var confirmPasswordLabel = document.querySelector('#confirmPasswordLabel');
var submit = document.querySelector('#submit');

clearFields.addEventListener('click', clearFieldsHandle);
logInSubmit.addEventListener('click', logInSubmitHandle);
createAccountButton.addEventListener('click', createAccountButtonHandle);
signUpBackButton.addEventListener('click', signUpBackButtonHandle);
logInEmail.addEventListener('keyup', logInEmailHandle);
logInPassword.addEventListener('keyup', logInPasswordHandle);
firstName.addEventListener('keyup', firstNameHandle);
lastName.addEventListener('keyup', lastNameHandle);
phoneNumber.addEventListener('keyup', phoneNumberHandle);
email.addEventListener('keyup', emailHandle);
var password = document.querySelector('#password');
password.addEventListener('keyup', passwordHandle);
confirmPassword.addEventListener('keyup', confirmPasswordHandle);
submit.addEventListener('click', submitHandle);
window.addEventListener('load', windowLoadHandle);

function clearFieldsHandle()
{
    logInEmail.value = "";
    logInPassword.value = "";
}

function logInSubmitHandle()
{
    if (rememberMe.checked == true)
    {
        localStorage.setItem(`email`, `${logInEmail.value}`);
        localStorage.setItem(`password`, `${logInPassword.value}`);
    }

    else
    {
        // alert("Not Checked");
    }
}

function createAccountButtonHandle()
{
    if (createAccountFormDiv.style.height === '70vh')
    {
        createAccountFormDiv.style.height = '0vh'
        logInFormDiv.style.height = '70vh';
    }

    else
    {
        createAccountFormDiv.style.height = '70vh'
        logInFormDiv.style.height = '0';
    }
}

function signUpBackButtonHandle()
{
    if (createAccountFormDiv.style.height === '70vh')
    {
        createAccountFormDiv.style.height = '0vh'
        logInFormDiv.style.height = '70vh';
    }
}

function logInEmailHandle()
{
    if (logInEmail.value.length <= 3)
    {
        logInEmailLabel.innerHTML = "Email has to be grather than 3";
        logInEmailLabel.style.color = 'red';
    }

    else
    {
        logInEmailLabel.innerHTML = "Email";
        logInEmailLabel.style.color = 'blue';
    }
}

function logInPasswordHandle()
{
    if (logInPassword.value.length <= 3)
    {
        logInPasswordLabel.innerHTML = "Password has to be grather than 3";
        logInPasswordLabel.style.color = 'red';
    }

    else
    {
        logInPasswordLabel.innerHTML = "Password";
        logInPasswordLabel.style.color = 'blue';
    }
}

function firstNameHandle()
{
    if (firstName.value.length >= 1)
    {
        firstNameLabel.style.color = "blue";
        firstNameLabel.innerHTML = "First Name";
    }

    else
    {
        firstNameLabel.style.color = "red";
        firstNameLabel.innerHTML = "First Name Couldn't Be Empty"
    }
}

function lastNameHandle()
{
    if (lastName.value.length >= 1)
    {
        lastNameLabel.style.color = "blue";
        lastNameLabel.innerHTML = "Last Name";
    }

    else
    {
        lastNameLabel.style.color = "red";
        lastNameLabel.innerHTML = "Last Name Couldn't Be Empty"
    }
}

function phoneNumberHandle()
{
    if (phoneNumber.value.length >= 1)
    {
        phoneNumberLabel.style.color = "blue";
        phoneNumberLabel.innerHTML = "Phone Number";
    }

    else
    {
        phoneNumberLabel.style.color = "red";
        phoneNumberLabel.innerHTML = "Phone Number Couldn't Be Empty"
    }
}

function emailHandle()
{
    if (email.value.length >= 1)
    {
        emailLabel.style.color = "blue";
        emailLabel.innerHTML = "Email";
    }

    else
    {
        emailLabel.style.color = "red";
        emailLabel.innerHTML = "Email Couldn't Be Empty"
    }
}

function passwordHandle()
{
    if (password.value.length >= 1)
    {
        passwordLabel.style.color = "blue";
        passwordLabel.innerHTML = "Password";
    }

    else
    {
        passwordLabel.style.color = "red";
        passwordLabel.innerHTML = "password Couldn't Be Empty"
    }
}

function confirmPasswordHandle()
{
    if (confirmPassword.value != password.value)
    {
        confirmPasswordLabel.style.color = "red";
        confirmPasswordLabel.innerHTML = "Password Didn't Match";
    }

    else
    {
        confirmPasswordLabel.style.color = "blue";
        confirmPasswordLabel.innerHTML = "Confirm Password";
    }
}

function submitHandle()
{
    sessionStorage.setItem(`email`, `${email.value}`);
    sessionStorage.setItem(`password`, `${password.value}`);
    logInEmail.value = sessionStorage.getItem(`email`);
    logInPassword.value = sessionStorage.getItem(`password`);
}

function windowLoadHandle()
{
    if (localStorage.length != 0)
    {
        logInEmail.value = localStorage.getItem(`email`);
        logInPassword.value = localStorage.getItem(`password`);
    }

    else
    {
        logInEmail.value = sessionStorage.getItem(`email`);
        logInPassword.value = sessionStorage.getItem(`password`);
    }
}