<?php

    require_once('../Models/signUpModel.php');

    if (isset($_POST['submit']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $cr = CustomerRegistration($firstName, $lastName, $phoneNumber, $email, $password, $confirmPassword);

        if ($cr)
        {
            header('location: ../Views/LogInSignUp/logInView.php');
        }

        else
        {
            header('location: ../Views/LogInSignUp/logInView.php');
        }
    }

?>