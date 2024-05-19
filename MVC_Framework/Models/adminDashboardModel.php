<?php
    require_once('dbConnectModel.php');

    class AdminDashboardModel
    {

        public function getAdminId()
        {
            $dbConnection = DbConnection();
            $subStringQuery = "SELECT MAX(CONVERT(SUBSTRING(id, 6), DECIMAL)) AS maxItem FROM admin;";
            $subStringQueryResult = mysqli_fetch_assoc(mysqli_query($dbConnection, $subStringQuery));
            $maxItemInt = $subStringQueryResult['maxItem'] + 1;
            return ('Admin'. $maxItemInt);
        }

        public function getCustomerId()
        {
            $dbConnection = DbConnection();
            $subStringQuery = "SELECT MAX(CONVERT(SUBSTRING(id, 4), DECIMAL)) AS maxItem FROM customers;";
            $subStringQueryResult = mysqli_fetch_assoc(mysqli_query($dbConnection, $subStringQuery));
            $maxItemInt = $subStringQueryResult['maxItem'] + 1;
            return ('CID'. $maxItemInt);
        }

        public function addAdmin($firstName, $lastName, $phoneNumber, $email, $password)
        {
            $dbConnection = DbConnection();

            if (strlen($firstName) >= 1 and strlen($lastName) >= 1 and strlen($phoneNumber) >= 1 and strlen($email) >= 4 and strlen($password) >= 4)
            {
                $adminId = $this -> getAdminId();
                $insertQuery = "INSERT INTO admin (id, firstName, lastName, phoneNumber, email, password) VALUES ('$adminId', '$firstName', '$lastName', '$phoneNumber', '$email', '$password')";
                $insertQueryResult = mysqli_query($dbConnection, $insertQuery);
                return true;
            }
    
            else
            {
                return false;
            }

        }

        public function addCustomer($firstName, $lastName, $phoneNumber, $email, $password)
        {
            $dbConnection = DbConnection();

            if (strlen($firstName) >= 1 and strlen($lastName) >= 1 and strlen($phoneNumber) >= 1 and strlen($email) >= 4 and strlen($password) >= 4)
            {
                $customerId = $this -> getCustomerId();
                $insertQuery = "INSERT INTO customers (id, firstName, lastName, phoneNumber, email, password) VALUES ('$customerId', '$firstName', '$lastName', '$phoneNumber', '$email', '$password')";
                $insertQueryResult = mysqli_query($dbConnection, $insertQuery);
                return true;
            }
    
            else
            {
                return false;
            }
        }

        public function deleteAdmin($adminId)
        {
            $dbConnection = DbConnection();
            $deleteQuery = "DELETE FROM admin WHERE id = '$adminId';";
            mysqli_query($dbConnection, $deleteQuery);
            return true;
        }

        public function deleteCustomer($customerId)
        {
            $dbConnection = DbConnection();
            $deleteQuery = "DELETE FROM customers WHERE id = '$customerId';";
            mysqli_query($dbConnection, $deleteQuery);
            return true;
        }

        public function getAllAdmins()
        {
            $dbConnection = DbConnection();

            $viewAllAdminQuery = "SELECT * FROM admin";
            $execute = mysqli_query($dbConnection, $viewAllAdminQuery);

            return $execute;
        }

        public function getAllCustomers()
        {
            $dbConnection = DbConnection();

            $viewAllCustomersQuery = "SELECT * FROM customers";
            $execute = mysqli_query($dbConnection, $viewAllCustomersQuery);

            return $execute;
        }
    }

    $adm = new AdminDashboardModel();
    $adm ->getCustomerId();
?>