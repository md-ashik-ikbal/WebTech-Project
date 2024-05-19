<?php
    require_once('../../HeaderFooter/header.php');
    require_once('../../Models/profileUpdateModel.php');
    session_write_close();
    session_start();

    $ProfileUpdateModel = new ProfileUpdateModel();
    $ProfilePicView = $ProfileUpdateModel -> ProfilePicView();
?>

<script>
    title.innerHTML = "NAVBAR";
    const navBarCssLink = document.createElement('link');
    navBarCssLink.setAttribute('rel', 'stylesheet');
    navBarCssLink.setAttribute('href', '../Css/navBar.css');
    document.head.appendChild(navBarCssLink);
</script>

<div id="navBarDiv">
    <div id="navbarTextDiv">
        <a href="../Home/homeView.php"><h1>G Store</h1></a>
    </div>

    <div id="navbarSearchDiv">
        <input type="search" placeholder="What are you looking for?" id="searchBar">
        <button type="button">
            <img src="../image/Icon/searchIcon.png" alt="Not Found">
        </button>
    </div>

    <div id="navBarActionsDiv">
        <div id="logInSignUpDiv">
            <button id="logInSignUpDivButton" type="button">
                <?php
                    if (!empty($_SESSION['adminId']) or !empty($_SESSION['customerId']))
                    {
                ?>
                    <img src="../image/<?php echo (!empty($ProfilePicView)) ? ($ProfilePicView) : ('Icon/loginIcon.png'); ?>" alt="NF">
                <?php
                    }

                    else{
                ?>
                    <img src="../image/Icon/loginIcon.png" alt="nf">
                <?php
                    }
                ?>
                </h3>
            </button>
        </div>
    </div>
</div>

<div id="showHideDiv">
    <div id="profileDiv">

        <a href="../LogInSignUp/logInView.php">
            <button type="submit">
                <?php
                    if (!empty($_SESSION['adminId']) or !empty($_SESSION['customerId']))
                    {
                ?>
                    <img src="../image/<?php echo (!empty($ProfilePicView)) ? ($ProfilePicView) : ('Icon/loginIcon.png'); ?>" alt="NF">
                    
                    <h3>
                        <?= $_SESSION['firstName']. " ". $_SESSION['lastName']; ?>
                    </h3>
                    
                <?php
                    }
                    
                    else
                    {
                ?>
                    <h3>Log In To View Your Details</h3>
                    <img src="../image/Icon/loginIcon.png" alt="nf">
                <?php
                    }
                ?>
            </button>
        </a>
    </div>

    <div id="profileDiv">
        <form action="../../Controller/navBarController.php" method="POST">
            <div>
                <?php if (!empty($_SESSION['adminId']) or !empty($_SESSION['customerId'])){ ?>
                    <input  id="profileEditButton" type="submit" name="profileEditButton" value="Edit Profile">
                    <input id="logOutButton" type="submit" name="logOutButton" value="Log Out">
                <?php } ?>
            </div>
        </form>
    </div>
</div>

<script>
    const navBarJavaScriptLink = document.createElement('script');
    navBarJavaScriptLink.setAttribute('src', '../JavaScript/navBar.js');
    document.body.appendChild(navBarJavaScriptLink);
</script>

<?php
    require_once('../../HeaderFooter/footer.php');
?>