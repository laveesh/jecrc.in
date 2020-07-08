<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

  <div id="content-wrapper">

    <div class="container-fluid">
      <!-- Page Content -->


      <h2>Assign Laboratory</h2>
      <hr>

      <?php
      if (isset($_POST['add_lab'])) {
        $labId = escape($_POST['lab']);
        $userId = escape($_SESSION['user_id']);

        $query = "INSERT INTO lab_assigned(user_id, lab_id)";
        $query .= "VALUES('{$userId}','{$labId}')";

        $stmt_add_query = mysqli_query($connection, $query);

        confirm_query($stmt_add_query);

        header("location:dashboard.php");
      }

      ?>

      <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="lab">Laboratory Name</label>
          <select class="custom-select" name="lab">
            <option disabled>--choose One--</option>
            <?php
            getLabOptionsWithDptName($_SESSION['user_id'])
            ?>
          </select>
        </div>

        <div class="form-group col-sm">
          <input type="submit" class="btn btn-secondary " name="add_lab" value="Add Laboratory">
        </div>
      </form>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>