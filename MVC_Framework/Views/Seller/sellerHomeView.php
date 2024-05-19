<?php
    require_once('../../HeaderFooter/header.php');
?>
<div>
    <!-- ../../Controller/sellerController.php -->
    <form action="" method="POST">
        <div>
            <label for="productImage" id="productImageLabel" ></label>
            <input type="file" name="productImage" id="productImage">
        </div>
        <div>
            <label for="productName" id="productNameLabel" > Name :  </label><br>
            <input type="text" name="productName" id="productName" >
        </div>
        <div>
            <label for="productDesc" id="productDescLabel" > Description :  </label><br>
            <input type="text" name="productDesc" id="productDesc" >
        </div>
        <div>
            <label for="productPrice" id="productPriceLabel">Price : </label><br>
            <input type="text" name="productPrice" id="productPrice" >
        </div>
        <div>
            <input type="submit" name="upload" id="upload" value="Upload">
            <input type="submit" id="clearField" value="Clear All value">
        </div>
    </form>
</div>

<script>
    const signUpViewJavaScriptLink = document.createElement('script');
    signUpViewJavaScriptLink.setAttribute('src', '../JavaScript/sellerHomeView.js');
    document.body.appendChild(signUpViewJavaScriptLink);
</script>

<?php
    require_once('../../HeaderFooter/footer.php');
?>