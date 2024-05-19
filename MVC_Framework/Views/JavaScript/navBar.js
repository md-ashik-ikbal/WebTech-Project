let logInSignUpDivButton = document.querySelector('#logInSignUpDivButton');
let showHideDiv = document.querySelector('#showHideDiv');

logInSignUpDivButton.addEventListener('click', logInSignUpDivButtonHandle);

function logInSignUpDivButtonHandle()
{
    var isShown = false

    if (showHideDiv.style.height === '300px')
    {
        showHideDiv.style.height = '0px'
    }

    else
    {
        showHideDiv.style.height = '300px'
    }
}