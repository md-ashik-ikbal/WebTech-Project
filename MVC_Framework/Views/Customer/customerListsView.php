<?php
  require_once('../../HeaderFooter/header.php');
  require_once('../NavBar/navBarView.php');
  require_once('../../Models/adminDashboardModel.php');

  $adminDashboardModel = new adminDashboardModel();
  $getcustomerId = $adminDashboardModel -> getCustomerId();
  $customers = $adminDashboardModel -> getAllCustomers();

  if (empty($_SESSION['adminId']) and empty($_SESSION['customerId']))
  {
    header('location: ../LogInSignUp/logInView.php');
  }
?>

<script>
  title.innerHTML = "CUSTOMER LIST";
  const customerListViewCssLink = document.createElement('link');
  customerListViewCssLink.setAttribute('rel', 'stylesheet');
  customerListViewCssLink.setAttribute('href', '../Css/customerListView.css');
  document.head.appendChild(customerListViewCssLink);
</script>

<div id="customerListViewDiv">
  <form action="../../Controller/customerDashboardController.php"method="GET">
    <?php
      if (isset($_SESSION['customerDeleteErrorMessage'])){
    ?>
      <div id="customerDeleteErrorMessageDiv">
        <h1>
          <?php
            echo $_SESSION['customerDeleteErrorMessage'];
            unset($_SESSION['customerDeleteErrorMessage']);
          ?>
        </h1>
      </div>
    <?php  
      }
    ?>
    <table>
      <tr>
        <th colspan="7"><h2>CUSTOMER CONTROLL PANNEL</h2></th>
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
      <?php foreach ($customers as $customer){ ?>
        <tr>
          <td> <a href="../../Controller/customerDashboardController.php?cidsp=<?= $customer['id']; ?>"><?= $customer['id']; ?></a> </td>
          <td><?= $customer['firstName']; ?></td>
          <td><?= $customer['lastName']; ?></td>
          <td><?= $customer['phoneNumber']; ?></td>
          <td><?= $customer['email']; ?></td>
          <td><?= $customer['password']; ?></td>
          <td>
            <a
              href="../../Controller/customerDashboardController.php?customerId=<?= $customer['id']; ?>"
            >
              <input type="button" id="customerRemoveButton" value="Remove">
            </a>
          </td>
        </tr>
      <?php } ?>
      <tr>
        <td>
          <input class="addCustomerInput" type="text" name="id" value="<?= $getcustomerId?>" disabled>
        </td>
        <td>
          <input class="addCustomerInput" type="text" name="firstName" placeholder="First Name" required>
        </td>
        <td>
          <input class="addCustomerInput" type="text" name="lastName" placeholder="Last Name" required>
        </td>
        <td>
          <input class="addCustomerInput" type="text" name="phoneNumber" placeholder="Phone Number" required>
        </td>
        <td>
          <input class="addCustomerInput" type="text" name="email" placeholder="Email" required>
        </td>
        <td>
          <input class="addCustomerInput" type="text" name="password" placeholder="Password" required>
        </td>
        <td>
          <input class="addCustomerInput" type="submit" value="Add" name="addCustomerButton" id="addCustomerButton">
        </td>
      </tr>
    </table>
  </form>
</div>

<?php
  require_once('../../HeaderFooter/footer.php');
?>