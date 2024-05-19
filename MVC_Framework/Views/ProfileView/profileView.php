<?php
    require_once('../../HeaderFooter/header.php');
    require_once('../NavBar/navBarView.php');
?>

<style>
  #mainDiv
  {
    position: relative;
    top: 50px;
  }
</style>

<div id="mainDiv">
  <?php
    if (!empty($_SESSION['adminId']) or !empty($_SESSION['customerId']))
    {
  ?>
    <img height="200px" width="200px" src="../image/<?php echo (!empty($ProfilePicView)) ? ($ProfilePicView) : ('Icon/loginIcon.png'); ?>" alt="NF">
  <?php
    }

    else{
  ?>
    <img src="../image/Icon/loginIcon.png" alt="nf">
  <?php
    }
  ?>
  <h2><?= $_SESSION['firstName']. " ". $_SESSION['lastName'] ?></h2>
</div>

<?php
  require_once('../../HeaderFooter/footer.php');
?>