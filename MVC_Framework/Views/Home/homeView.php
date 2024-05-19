<?php
    require_once('../../HeaderFooter/header.php');
    require_once('../NavBar/navBarView.php');
?>

<script>
    title.innerHTML = "Home";
    const homeViewCssLink = document.createElement('link');
    homeViewCssLink.setAttribute('rel', 'stylesheet');
    homeViewCssLink.setAttribute('href', '../Css/homeView.css');
    document.head.appendChild(homeViewCssLink);
</script>

<div class="slider">
    <div class="slide">
        <input type="radio" name="any" id="radio1" checked>
        <input type="radio" name="any" id="radio2">
        <input type="radio" name="any" id="radio3">
        <input type="radio" name="any" id="radio4">
        <input type="radio" name="any" id="radio5">
        <div class="image1div">
            <img class="image1" src="../image/image1.jpg" alt="">
            <div class="image1text">
                <h1>Product 1</h1>
                <p>Product Description</p>
            </div>
        </div>
        <div class="image2div">
            <img class="image2" src="../image/image2.jpg" alt="">
            <div class="image2text">
                <h1>Product 2</h1>
                <p>Product Description</p>
            </div>
        </div>
        <div class="image3div">
            <img class="image3" src="../image/image3.jpg" alt="">
            <div class="image2text">
                <h1>Product 3</h1>
                <p>Product Description</p>
            </div>
        </div>
        <div class="image4div">
            <img class="image4" src="../image/image4.jpg" alt="">
            <div class="image2text">
                <h1>Product 4</h1>
                <p>Product Description</p>
            </div>
        </div>
        <div class="image5div">
            <img class="image5" src="../image/image5.jpg" alt="">
            <div class="image2text">
                <h1>Product 5</h1>
                <p>Product Description</p>
            </div>
        </div>
        <div class="labeldiv">
        <label class="label1" for="radio1"></label>
        <label class="label2" for="radio2"></label>
        <label class="label3" for="radio3"></label>
        <label class="label4" for="radio4"></label>
        <label class="label5" for="radio5"></label>
        </div>
    </div>
</div>

<script>
    const homeViewJavaScriptLink = document.createElement('script');
    homeViewJavaScriptLink.setAttribute('src', '../JavaScript/homeView.js');
    document.body.appendChild(homeViewJavaScriptLink);
</script>


<?php
    require_once('../../HeaderFooter/footer.php');
?>