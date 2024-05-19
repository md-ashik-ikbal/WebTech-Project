<?php
    require_once('../Models/ProfileUpdateModel.php');
    class ProfileUpdateController
    {
        function ProfileUpdateButtonHandle()
        {
            if (isset($_POST['adminProfileUpdateButton']))
            {
                if (!empty($_SESSION['adminId']))
                {
                    // $adminProfileUpdateProfilePic = $_POST['adminProfileUpdateProfilePic'];
                    $adminProfileUpdateProfilePic = $_FILES['adminProfileUpdateProfilePic']['name'];
                    // $adminProfileUpdateId = $_POST['adminProfileUpdateId'];
                    $adminProfileUpdateFirstName = $_POST['adminProfileUpdateFirstName'];
                    $adminProfileUpdateLastName = $_POST['adminProfileUpdateLastName'];
                    $adminProfileUpdatePhoneNumber = $_POST['adminProfileUpdatePhoneNumber'];
                    $adminProfileUpdateEmail = $_POST['adminProfileUpdateEmail'];
                    $adminProfileUpdatePassword = $_POST['adminProfileUpdatePassword'];

                    // echo $adminProfileUpdateProfilePic;

                    $AdminProfileUpdateModel = new ProfileUpdateModel();
                    $AdminProfileUpdateModel -> AdminProfileUpdate($adminProfileUpdateProfilePic, $adminProfileUpdateFirstName, $adminProfileUpdateLastName, $adminProfileUpdatePhoneNumber, $adminProfileUpdateEmail, $adminProfileUpdatePassword);
                    header('location: ../Views/ProfileUpdate/profileupdateView.php');
                }

                else if (!empty($_SESSION['customerId']))
                {
                    $customerProfileUpdateProfilePic = $_FILES['adminProfileUpdateProfilePic']['name'];
                    // $adminProfileUpdateId = $_POST['adminProfileUpdateId'];
                    $customerProfileUpdateFirstName = $_POST['adminProfileUpdateFirstName'];
                    $customerProfileUpdateLastName = $_POST['adminProfileUpdateLastName'];
                    $customerProfileUpdatePhoneNumber = $_POST['adminProfileUpdatePhoneNumber'];
                    $customerProfileUpdateEmail = $_POST['adminProfileUpdateEmail'];
                    $customerProfileUpdatePassword = $_POST['adminProfileUpdatePassword'];

                    // echo $adminProfileUpdateProfilePic;

                    $customerProfileUpdateModel = new ProfileUpdateModel();
                    $customerProfileUpdateModel -> CustomerProfileUpdate($customerProfileUpdateProfilePic, $customerProfileUpdateFirstName, $customerProfileUpdateLastName, $customerProfileUpdatePhoneNumber, $customerProfileUpdateEmail, $customerProfileUpdatePassword);
                    header('location: ../Views/ProfileUpdate/profileupdateView.php');
                }

            }
        }
    }

    $profileUpdateController = new ProfileUpdateController();

    $profileUpdateController -> ProfileUpdateButtonHandle();
?>