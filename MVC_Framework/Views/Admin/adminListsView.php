<?php
  require_once('../../HeaderFooter/header.php');
  require_once('../NavBar/navBarView.php');
  require_once('../../Models/adminDashboardModel.php');

  $AdminDashboardModel = new AdminDashboardModel();
  $admins = $AdminDashboardModel -> getAllAdmins();
  $getAdminId = $AdminDashboardModel -> getAdminId();

  if (empty($_SESSION['adminId']))
  {
    header('location: ../LogInSignUp/logInView.php');
  }
?>

<script>
  title.innerHTML = "ADMIN LIST";
  const adminListViewCssLink = document.createElement('link');
  adminListViewCssLink.setAttribute('rel', 'stylesheet');
  adminListViewCssLink.setAttribute('href', '../Css/adminListView.css');
  document.head.appendChild(adminListViewCssLink);
</script>

<div id="adminListViewDiv">
  <form action="../../Controller/adminDashboardController.php"method="GET">
    <?php
      if (isset($_SESSION['adminDeleteErrorMessage'])){
    ?>
      <div id="adminDeleteErrorMessageDiv">
        <h1>
          <?php
            echo $_SESSION['adminDeleteErrorMessage'];
            unset($_SESSION['adminDeleteErrorMessage']);
          ?>
        </h1>
      </div>
    <?php  
      }
    ?>
    <table>
      <tr>
        <th colspan="7"><h2>ADMIN PANNEL</h2></th>
      </tr>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
      <?php foreach ($admins as $admin){ ?>
        <tr>
          <td><?= $admin['id']; ?></td>
          <td><?= $admin['firstName']; ?></td>
          <td><?= $admin['lastName']; ?></td>
          <td><?= $admin['phoneNumber']; ?></td>
          <td><?= $admin['email']; ?></td>
          <td><?= $admin['password']; ?></td>
          <td>
            <a
              href="../../Controller/adminDashboardController.php?adminId=<?= $admin['id']; ?>"
            >
              <input type="button" id="adminRemoveButton" value="Remove">
            </a>
          </td>
        </tr>
      <?php } ?>
      <tr>
        <td>
          <input class="addAdminInput" type="text" name="id" value="<?= $getAdminId?>" disabled>
        </td>
        <td>
          <input class="addAdminInput" type="text" name="firstName" placeholder="First Name" required>
        </td>
        <td>
          <input class="addAdminInput" type="text" name="lastName" placeholder="Last Name" required>
        </td>
        <td>
          <input class="addAdminInput" type="text" name="phoneNumber" placeholder="Phone Number" required>
        </td>
        <td>
          <input class="addAdminInput" type="text" name="email" placeholder="Email" required>
        </td>
        <td>
          <input class="addAdminInput" type="text" name="password" placeholder="Password" required>
        </td>
        <td>
          <input class="addAdminInput" type="submit" value="Add" name="addAdminButton" id="addAdminButton">
        </td>
      </tr>
    </table>
  </form>
</div>

<?php
  require_once('../../HeaderFooter/footer.php');
?>