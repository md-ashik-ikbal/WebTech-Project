<?php
    require_once('dbConnectModel.php');
    session_start();
    class ProfileUpdateModel
    {
        function AdminProfileUpdate($adminProfileUpdateProfilePic, $adminProfileUpdateFirstName, $adminProfileUpdateLastName, $adminProfileUpdatePhoneNumber, $adminProfileUpdateEmail, $adminProfileUpdatePassword)
        {
            $dbConnection = DbConnection();
            $adminId = $_SESSION['adminId'];
            $adminUpdateQuery = "UPDATE admin SET adminProfile='$adminProfileUpdateProfilePic', firstName='$adminProfileUpdateFirstName', lastName='$adminProfileUpdateLastName', phoneNumber='$adminProfileUpdatePhoneNumber', email='$adminProfileUpdateEmail', password='$adminProfileUpdatePassword' WHERE id='$adminId'";
            mysqli_query($dbConnection, $adminUpdateQuery);
            $_SESSION['firstName'] = $adminProfileUpdateFirstName;
            $_SESSION['lastName'] = $adminProfileUpdateLastName;
            return true;
        }

        function CustomerProfileUpdate($customerProfileUpdateProfilePic, $customerProfileUpdateFirstName, $customerProfileUpdateLastName, $customerProfileUpdatePhoneNumber, $customerProfileUpdateEmail, $customerProfileUpdatePassword)
        {
            $dbConnection = DbConnection();
            $customerId = $_SESSION['customerId'];
            $adminUpdateQuery = "UPDATE customers SET customerProfile='$customerProfileUpdateProfilePic', firstName='$customerProfileUpdateFirstName', lastName='$customerProfileUpdateLastName', phoneNumber='$customerProfileUpdatePhoneNumber', email='$customerProfileUpdateEmail', password='$customerProfileUpdatePassword' WHERE id='$customerId'";
            mysqli_query($dbConnection, $adminUpdateQuery);
            $_SESSION['firstName'] = $customerProfileUpdateFirstName;
            $_SESSION['lastName'] = $customerProfileUpdateLastName;
            return true;
        }

        function ProfilePicView()
        {
            $dbConnection = DbConnection();

            if (isset($_SESSION['adminId']))
            {
                $adminId = $_SESSION['adminId'];
                $query = "SELECT adminProfile FROM admin WHERE id='$adminId'";
                $result = mysqli_query($dbConnection, $query);
                foreach ($result as $row)
                {
                    $pic = $row["adminProfile"];
                }
                return $pic;
            }

            else if (isset($_SESSION["customerId"]))
            {
                $customerId = $_SESSION['customerId'];
                $query = "SELECT customerProfile FROM customers WHERE id='$customerId'";
                $result = mysqli_query($dbConnection, $query);
                foreach ($result as $row)
                {
                    $pic = $row["customerProfile"];
                }
                return $pic;
            }
        }
    }
?>