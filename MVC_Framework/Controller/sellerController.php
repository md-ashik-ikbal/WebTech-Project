<?php
    if (isset($_POST["upload"]))
    {
        $productImage = $_POST["productImage"];
        $productName = $_POST["productName"];
        $productsDesc = $_POST["productDesc"];
        $productPrice = $_POST["productPrice"];

        if (strlen($productName) >= 4 && $productPrice >= 1)
        {
            
        }

        header("location: ../Views/Seller/sellerHomeView.php");
    }
?>