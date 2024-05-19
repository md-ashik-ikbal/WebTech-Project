<?php
    require_once('dbConnectModel.php');
    function CustomerRegistration($firstName, $lastName, $phoneNumber, $email, $password, $confirmPassword)
    {
        $dbConnection = DbConnection();
        $subStringQuery = "SELECT MAX(SUBSTRING(id, 4, 1)) AS maxItem FROM customers";
        $subStringQueryResult = mysqli_fetch_assoc(mysqli_query($dbConnection, $subStringQuery));
        $maxItemInt = $subStringQueryResult['maxItem'] + 1;
        $customerId = 'CID'. $maxItemInt;

        if (strlen($firstName) >= 1 and strlen($lastName) >= 1 and strlen($phoneNumber) >= 1 and strlen($email) >= 1 and strlen($password) >= 1 and $password == $confirmPassword)
        {
            $insertQuery = "INSERT INTO CUSTOMERS (id, firstName, lastName, phoneNumber, email, password) VALUES ('$customerId', '$firstName', '$lastName', '$phoneNumber', '$email', '$password')";
            $insertQueryResult = mysqli_query($dbConnection, $insertQuery);
            return true;
        }

        else
        {
            return false;
        }
    }
?>