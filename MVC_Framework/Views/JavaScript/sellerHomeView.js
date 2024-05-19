var productImage = document.querySelector('#productImage');
var productName = document.querySelector('#productName');
var productDesc = document.querySelector('#productDesc');
var productPrice = document.querySelector('#productPrice');
var productImageLabel = document.querySelector('#productImageLabel');
var productNameLabel = document.querySelector('#productNameLabel');
var productDescLabel = document.querySelector('#productDescLabel');
var productPriceLabel = document.querySelector('#productPriceLabel');
var upload = document.querySelector('#upload');
var clearField = document.querySelector("#clearField");

productName.addEventListener('keyup', productNameKeyUp);
productDesc.addEventListener('keyup', productDescKeyUp);
productPrice.addEventListener('keyup', productPriceKeyUp);
upload.addEventListener('click', uploadClickHandle);
clearField.addEventListener('click', clearFieldHandle);

window.addEventListener('load', windowLoad);

function productNameKeyUp()
{
    sessionStorage.setItem('productName', `${productName.value}`);

    if (productName.value.length < 4)
    {
        productNameLabel.innerHTML = "Name has be greter than 4";
    }

    else
    {
        productNameLabel.innerHTML = "Name : ";
    }
}

function productDescKeyUp()
{
    sessionStorage.setItem('productDesc', `${productDesc.value}`);

    if (productDesc.value.length < 10)
    {
        productDescLabel.innerHTML = "Description shoul be at least 10 words";
    }

    else
    {
        productDescLabel.innerHTML = "Description : ";
    }
}

function productPriceKeyUp()
{
    sessionStorage.setItem('productPrice', `${productPrice.value}`);

    if (productPrice.value == 0)
    {
        productPriceLabel.innerHTML = "Price cannot be empty";
    }

    else
    {
        productPriceLabel.innerHTML = "Price : ";
    }
}

function uploadClickHandle()
{
    if (productName.value.length < 4)
    {
        productName.foucs();
    }
}

function clearFieldHandle()
{
    sessionStorage.clear();
}

function windowLoad()
{
    if (sessionStorage.length != 0)
    {
        productName.value = sessionStorage.getItem('productName');
        productDesc.value = sessionStorage.getItem('productDesc');
        productPrice.value = sessionStorage.getItem('productPrice');
    }
}