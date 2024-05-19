<?php
    require_once('../../HeaderFooter/header.php');
    require_once('../NavBar/navBarView.php');
    require_once('../../Models/adminDashboardModel.php');

    $AdminDashboardModel = new AdminDashboardModel();
    $admins = $AdminDashboardModel -> getAllAdmins();
    $customers = $AdminDashboardModel -> getAllCustomers();

    if (empty($_SESSION['adminId']))
    {
        header('location: ../LogInSignUp/logInView.php');
    }
?>

<script>
    title.innerHTML = "DASHBOARD | ADMIN";
    const adminDashboardViewCssLink = document.createElement('link');
    adminDashboardViewCssLink.setAttribute('rel', 'stylesheet');
    adminDashboardViewCssLink.setAttribute('href', '../Css/adminDashboardView.css');
    document.head.appendChild(adminDashboardViewCssLink);
</script>

<div class="mainDiv">
    <div id="welcomeDiv">
        <h1><?php echo $_SESSION['firstName']. " ". $_SESSION['lastName']; ?></h1>
    </div>
    <div id="adminDasboardViewDiv">
        <form action="../../Controller/adminDashboardController.php" method="POST">
            <div id="adminListDiv">
                <div id="adminTableDiv">
                    <table>
                        <tbody>
                            <th colspan="3">Admin List</th>
                            <tr>
                                <td>Id</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                            </tr>
                            <?php foreach ($admins as $admin){ ?>
                                <tr>
                                    <td><?php echo $admin['id']; ?></td>
                                    <td><?php echo $admin['firstName']; ?></td>
                                    <td><?php echo $admin['lastName']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <input id="viewAllAdminButton" type="submit" name="viewAllAdminButton" value="View All Admins">
            </div>

            <!-- <div id="viewAllAdminButtonDiv">
            </div> -->

        </form>
    </div>

    <div id="customerDashboardViewDiv">
        <form action="../../Controller/adminDashboardController.php" method="POST">
            <div id="customerListDiv">
                <div id="customerTableDiv">
                    <table>
                        <tbody>
                            <th colspan="3">Customers List</th>
                            <tr>
                                <td>Id</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                            </tr>
                            <?php foreach ($customers as $customer){ ?>
                                <tr>
                                    <td><?php echo $customer['id']; ?></td>
                                    <td><?php echo $customer['firstName']; ?></td>
                                    <td><?php echo $customer['lastName']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <input id="viewAllCustomerButton" type="submit" name="viewAllCustomerButton" value="View All Customers">
            </div>
        </form>
    </div>
</div>

<?php
    require_once('../../HeaderFooter/footer.php');
?>