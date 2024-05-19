<?php
  session_start();
  require_once('../Models/adminDashboardModel.php');
  class AdminDashboardController
  {
    public function addAdminButtonClick()
    {
      if (isset($_GET['addAdminButton']))
      {
        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        $phoneNumber = $_GET['phoneNumber'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        $AdminDashboardModel = new AdminDashboardModel();

        $result = $AdminDashboardModel -> addAdmin($firstName, $lastName, $phoneNumber, $email, $password);

        if ($result)
        {
          $_SESSION['adminDeleteErrorMessage'] = "Admin Added";
          header('location: ../Views/Admin/adminListsView.php');
        }

        else
        {
          $_SESSION['adminDeleteErrorMessage'] = "Wrong Information";
          header('location: ../Views/Admin/adminListsView.php');
        }
      }
    }

    public function viewAllAdminButtonClick()
    {
      if (isset($_POST['viewAllAdminButton']))
      {
        header('location: ../Views/Admin/adminListsView.php');
      }
    }

    public function removeAdminButtonClick()
    {
      if (isset($_GET['adminId']))
      {
        $adminDashboardModel = new AdminDashboardModel();
        $admins = $adminDashboardModel -> getAllAdmins();

        $adminId = $_GET['adminId'];

        if (mysqli_num_rows($admins) == 1)
        {
          $_SESSION['adminDeleteErrorMessage'] = "Last Admin Cannot Be Deleted";
          header('location: ../Views/Admin/adminListsView.php');
        }

        else if ($adminId == $_SESSION['id'])
        {
          $_SESSION['adminDeleteErrorMessage'] = "Loged In Admin Cannot Be Deleted";
          header('location: ../Views/Admin/adminListsView.php');
        }

        else
        {
          $adminDashboardModel -> deleteAdmin($adminId);
          $_SESSION['adminDeleteErrorMessage'] = $adminId.' Has Been Deleted';
          header('location: ../Views/Admin/adminListsView.php');
        }
      }
    }

    function viewAllCustomerButtonClick()
    {
      if (isset($_POST['viewAllCustomerButton']))
      {
        header('location: ../Views/Customer/customerListsView.php');
      }
    }
  }

  $AdminDashboardController = new AdminDashboardController();
  $AdminDashboardController -> viewAllAdminButtonClick();
  $AdminDashboardController -> removeAdminButtonClick();
  $AdminDashboardController -> addAdminButtonClick();
  $AdminDashboardController -> viewAllCustomerButtonClick();
?>
