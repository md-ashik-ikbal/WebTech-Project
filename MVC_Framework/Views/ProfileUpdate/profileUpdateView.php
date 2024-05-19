<?php
    require_once('../../HeaderFooter/header.php');
    // session_write_close();
    require_once('../NavBar/navBarView.php');
    session_write_close();
    require_once('../../Models/logInModel.php');
    session_write_close();
    require_once('../../Models/profileUpdateModel.php');

    if (empty($_SESSION['adminId']) and empty($_SESSION['customerId']))
    {
      header('location: ../LogInSignUp/logInView.php');
    }

    $logedInData = mysqli_fetch_assoc(logedInData());
    // print_r($logedInData);
?>

<script>
    document.querySelector('#title').innerHTML = "EDIT PROFILE";
    const adminProfileUpdateViewCssLink = document.createElement('link');
    adminProfileUpdateViewCssLink.setAttribute('rel', 'stylesheet');
    adminProfileUpdateViewCssLink.setAttribute('href', '../Css/adminProfileUpdateView.css');
    document.head.appendChild(adminProfileUpdateViewCssLink);
</script>

<div id="adminAllInfoDiv">
    <form action="../../Controller/profileUpdateController.php" method="POST" enctype="multipart/form-data">
        <h1>Your Info</h1>

        <label for="adminProfileUpdateProfilePic" id="adminProfileUpdateProfilePicLabel">Profile Picture </label>
        <input type="file" accept="img/png" id="adminProfileUpdateProfilePic" name="adminProfileUpdateProfilePic">

        <label for="adminProfileUpdateId">Id: </label>
        <input type="text" id="adminProfileUpdateId" name="adminProfileUpdateId" value="<?= $logedInData['id']; ?>" disabled>
        
        <label for="adminProfileUpdateFirstName">First Name </label>
        <input type="text" id="adminProfileUpdateFirstName" name="adminProfileUpdateFirstName" value="<?= $logedInData['firstName']; ?>" required>

        <label for="adminProfileUpdateLastName">Last Name </label>
        <input type="text" id="adminProfileUpdateLastName" name="adminProfileUpdateLastName" value="<?= $logedInData['lastName']; ?>" required>

        <label for="adminProfileUpdatePhoneNumber">Phone Number </label>
        <input type="text" id="adminProfileUpdatePhoneNumber" name="adminProfileUpdatePhoneNumber" value="<?= $logedInData['phoneNumber']; ?>" required>

        <label for="adminProfileUpdateEmail">Email </label>
        <input type="text" id="adminProfileUpdateEmail" name="adminProfileUpdateEmail" value="<?= $logedInData['email']; ?>" required>

        <label for="adminProfileUpdatePassword">Password </label>
        <input type="text" id="adminProfileUpdatePassword" name="adminProfileUpdatePassword" value="<?= $logedInData['password']; ?>" required>

        <input type="submit" id="adminProfileUpdateButton" name="adminProfileUpdateButton" value="Update">
    </form>
</div>

<?php
    require_once('../../HeaderFooter/footer.php');
?>