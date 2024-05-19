<?php

    session_start();

    if (isset($_POST['logOutButton']))
    {
        if (!empty($_SESSION['adminId']) or !empty($_SESSION['customerId']))
        {
            unset($_SESSION['adminId']);
            unset($_SESSION['customerId']);
            unset($_SESSION['firstName']);
            unset($_SESSION['lastName']);
            session_destroy();
            header('location: ../Views/LogInSignUp/logInView.php');
        }
    }

    if (isset($_POST['profileEditButton']))
    {
        header('location: ../Views/ProfileUpdate/profileUpdateView.php');

        // if (!empty($_SESSION['adminId']))
        // {
        //     header('location: ../Views/ProfileUpdate/profileUpdateView.php');
        // }

        // else if (!empty($_SESSION['customerId']))
        // {
        //     header('location: ../Views/ProfileUpdate/profileUpdateView.php');
        // }
    }

?>