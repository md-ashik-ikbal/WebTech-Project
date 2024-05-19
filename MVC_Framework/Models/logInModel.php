<?php
    session_start();
    require_once('dbConnectModel.php');
    function LogInCheck($email, $password)
    {
        $dbConnection = DbConnection();
        
        $checkAdminQuery = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $checkAdminQueryExecute = mysqli_query($dbConnection, $checkAdminQuery);
        $totalAdmin = mysqli_num_rows($checkAdminQueryExecute);

        $checkCustomerQuery = "SELECT * FROM customers WHERE email='$email' AND password='$password'";
        $checkCustomerQueryExecute = mysqli_query($dbConnection, $checkCustomerQuery);
        $totalCustomer = mysqli_num_rows($checkCustomerQueryExecute);

        if ($totalAdmin == 1)
        {
            $checkAdminQueryResult = mysqli_fetch_assoc($checkAdminQueryExecute);
            $adminId = $checkAdminQueryResult['id'];
            $firstName = $checkAdminQueryResult['firstName'];
            $lastName = $checkAdminQueryResult['lastName'];
            $_SESSION["adminId"] = $adminId;
            $_SESSION["firstName"] = $firstName;
            $_SESSION['lastName'] = $lastName;
            return "admin";
        }

        if ($totalCustomer == 1)
        {
            $checkCustomerQueryResult = mysqli_fetch_assoc($checkCustomerQueryExecute);
            $customerId = $checkCustomerQueryResult['id'];
            $firstName = $checkCustomerQueryResult['firstName'];
            $lastName = $checkCustomerQueryResult['lastName'];
            $_SESSION["customerId"] = $customerId;
            $_SESSION["firstName"] = $firstName;
            $_SESSION['lastName'] = $lastName;
            return "customer";
        }


        else
        {
            return "notFound";
        }
    }

    function logedInData()
    {
        if (!empty($_SESSION["adminId"]))
        {
            $id = $_SESSION["adminId"];
            $dbConnection = DbConnection();
            
            $Query = "SELECT * FROM ADMIN WHERE id='$id'";
            $Execute = mysqli_query($dbConnection, $Query);
            return $Execute;
        }

        else if (!empty($_SESSION["customerId"]))
        {
            $id = $_SESSION["customerId"];
            $dbConnection = DbConnection();
            
            $Query = "SELECT * FROM customers WHERE id='$id'";
            $Execute = mysqli_query($dbConnection, $Query);
            return $Execute;
        }
    }
?>