<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

  <div id="content-wrapper">
    <div class="container-fluid text-center">
      <h1>Admin Panel</h1>
      <hr>
      <h2>Welcome <?php echo strtoupper($_SESSION['username']); ?></h2>
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->



</div>
<!-- /#wrapper -->


<?php include "includes/footer.php" ?>