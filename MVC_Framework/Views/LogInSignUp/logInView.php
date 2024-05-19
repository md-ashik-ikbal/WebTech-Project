<?php
    require_once('../../HeaderFooter/header.php');
    require_once('../NavBar/navBarView.php');

    if (isset($_SESSION['adminId']))
    {
        header('location: ../Dashboard/adminDashboardView.php');
    }

    else if (isset($_SESSION['customerId']))
    {
        header('location: ../Dashboard/customerDashboardView.php');
    }
?>
<script>
    document.querySelector('#title').innerHTML = "Log In";
    const signUpViewCssLink = document.createElement('link');
    signUpViewCssLink.setAttribute('rel', 'stylesheet');
    signUpViewCssLink.setAttribute('href', '../Css/logInView.css');
    document.head.appendChild(signUpViewCssLink);
</script>

<div id="backgroundDiv">
    <div id="logInFormDiv">
        <form action="../../Controller/logInController.php" method="POST">
            <div id="logInHeaderDiv">
                <h1>Log In</h1>
            </div>
            <?php
                if (isset($_SESSION['logInWarningMessage'])){
            ?>
                <div id="warningDiv">
                    <h3 id="logInWarningMessage">
                        <?php
                            echo $_SESSION['logInWarningMessage'];
                            unset($_SESSION['logInWarningMessage']);
                        ?>
                    </h3>
                </div>
            <?php
                }
            ?>
            <div id="logInEmailDiv">
                <input type="text" name="logInEmail" id="logInEmail" value="" required>
                <label for="logInEmail" id="logInEmailLabel">Email</label><br>
            </div>
            <div id="logInPasswordDiv">
                <input type="password" name="logInPassword" id="logInPassword" value="" required>
                <label for="logInPassword" id="logInPasswordLabel">Password</label><br>
            </div>
            <div id="rememberMeDiv">
                <label for="rememberMe">Remember Me</label>
                <input id="rememberMe" type="checkbox" id="rememberMe">
                <span id="clearFields">Clear Fields</span>
            </div>
            <div id="logInSubmitDiv">
                <input type="submit" name="logInSubmit" id="logInSubmit" value="Log In">
            </div>
            <div id="line1"></div>
            <div id="logInForgotPasswordDiv">
                <a href=""><p>Forgot Password?</p></a>
            </div>
            <div id="createAccountDiv">
                <p>Not A Member.</p>
                <button type="button" id="createAccountButton">Create Account</button>
            </div>
        </form>
    </div>

    <div id="createAccountFormDiv">
        <form action="../../Controller/signUpController.php" method="POST">
            <div id="signUpHeaderDiv">
                <button type="button" id="signUpBackButton"> ╳ </button>
                <h1>Create Account</h1>
                <p><i>It's Simple</i></p>
            </div>
            <div id="signUpFirstNameDiv">
                <label for="firstName" id="firstNameLabel">First Name</label><br>
                <input type="text" name="firstName" id="firstName" required>
            </div>
            <div id="signUpLastNameDiv">
                <label for="lastName" id="lastNameLabel">Last Name</label><br>
                <input type="text" name="lastName" id="lastName" required>
            </div>
            <div id="signUpPhoneNumberDiv">
                <label for="phoneNumber" id="phoneNumberLabel">Phone Number</label><br>
                <input type="text" name="phoneNumber" id="phoneNumber" required>
            </div>
            <div id="signUpEmailDiv">
                <label for="email" id="emailLabel">Email</label><br>
                <input type="text" name="email" id="email" required>
            </div>
            <div id="signUpPasswordDiv">
                <label for="password" id="passwordLabel">Password</label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <div id="signUpConfirmPasswordDiv">
                <label for="confirmPassword" id="confirmPasswordLabel">Confirm Password</label><br>
                <input type="password" name="confirmPassword" id="confirmPassword" required>
            </div>
            <div id="signUpTermsAndConditionDIv">
                <p>By Creating Account Your Are Agreeing To Our <a href="../TermsAndConditions/termsAndConditions.php">Terms & Conditions.</a></p>
            </div>
            <div id="signUpSubmitDiv">
                <input type="submit" name="submit" id="submit" value="Create Account">
            </div>
        </form>
    </div>
</div>

<script>
    const logInViewJavaScriptLink = document.createElement('script');
    logInViewJavaScriptLink.setAttribute('src', '../JavaScript/logInView.js');
    document.body.appendChild(logInViewJavaScriptLink);
</script>

<?php
    require_once('../../HeaderFooter/footer.php');
?>