<?php
    require_once('../../HeaderFooter/header.php');
    require_once('../NavBar/navBarView.php');
    
    if (empty($_SESSION['customerId']))
    {
        header('location: ../LogInSignUp/logInView.php');
    }
?>

<script>
    title.innerHTML = "DASHBOARD | CUSTOMER";
    const customerDashboardViewCssLink = document.createElement('link');
    customerDashboardViewCssLink.setAttribute('rel', 'stylesheet');
    customerDashboardViewCssLink.setAttribute('href', '../Css/customerDashboardView.css');
    document.head.appendChild(customerDashboardViewCssLink);
</script>

<div id="mainDiv">
    <h1>Welcome Customer</h1>
</div>

<?php
    require_once('../../HeaderFooter/footer.php');
?>