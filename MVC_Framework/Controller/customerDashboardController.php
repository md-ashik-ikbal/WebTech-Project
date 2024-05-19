<?php
    session_start();
    require_once('../Models/adminDashboardModel.php');

    function customerViewProfile()
    {
        if (isset($_GET['cidsp']))
        {
            $customerId = $_GET['cdisp'];
            // $adminDashboardModel = new AdminDashboardModel();
            // $adminDashboardModel -> deleteCustomer($customerId);
            // $_SESSION['customerDeleteErrorMessage'] = $customerId.' Has Been Deleted';
            header('location: ../Views/ProfileView/profileView.php');
        }
    }
    function removeCustomerButtonClick()
    {
        if (isset($_GET['customerId']))
        {
            $customerId = $_GET['customerId'];
            $adminDashboardModel = new AdminDashboardModel();
            $adminDashboardModel -> deleteCustomer($customerId);
            $_SESSION['customerDeleteErrorMessage'] = $customerId.' Has Been Deleted';
            header('location: ../Views/Customer/customerListsView.php');
        }
    }

    function addcustomerButtonClick()
    {
        if (isset($_GET['addCustomerButton']))
        {
            $customerId = $_GET['id'];
            $firstName = $_GET['firstName'];
            $lastName = $_GET['lastName'];
            $phoneNumber = $_GET['phoneNumber'];
            $email = $_GET['email'];
            $password = $_GET['password'];

            $AdminDashboardModel = new AdminDashboardModel();

            $result = $AdminDashboardModel -> addCustomer($firstName, $lastName, $phoneNumber, $email, $password);

            if ($result)
            {                
                $_SESSION['customerDeleteErrorMessage'] = "Customer Added";
                header('location: ../Views/Customer/customerListsView.php');
            }

            else
            {
                $_SESSION['customerDeleteErrorMessage'] = "Wrong Information";
                header('location: ../Views/Customer/customerListsView.php');
            }
        }
    }

    customerViewProfile();
    addcustomerButtonClick();
    removeCustomerButtonClick();
?>