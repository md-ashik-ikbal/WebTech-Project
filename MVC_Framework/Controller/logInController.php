<?php
    require_once('../Models/logInModel.php');

    if (isset($_POST['logInSubmit']))
    {
        $logInEmail = $_POST['logInEmail'];
        $logInPassword = $_POST['logInPassword'];

        $logInCheck = LogInCheck($logInEmail, $logInPassword);

        if ($logInCheck == "admin")
        {
            header('location: ../Views/Dashboard/adminDashboardView.php');
        }

        else if ($logInCheck == "customer")
        {
            header('location: ../Views/Dashboard/customerDashboardView.php');
        }

        else
        {
            $_SESSION['logInWarningMessage'] = "User Not Found";
            header('location: ../Views/LogInSignUp/loginView.php');
        }
    }
?>