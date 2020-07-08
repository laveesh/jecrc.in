<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

  <div id="content-wrapper">

    <div class="container-fluid">
      <!-- Page Content -->


      <h2>Add Laboratory</h2>
      <hr>

      <?php
      if (isset($_POST['add_subject'])) {
        $labName = escape($_POST['labName']);
        $department = escape($_POST['department']);

        $query = "INSERT INTO lab(name, dpt_id)";
        $query .= "VALUES('{$labName}','{$department}')";

        $stmt_add_teacher_query = mysqli_query($connection, $query);

        confirm_query($stmt_add_teacher_query);

        header("location:dashboard.php");
      }

      ?>

      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="labName">Laboratory Name</label>
          <input type="text" class="form-control" name="labName">
        </div>

        <div class="form-group">
          <label for="department">Department</label>
          <select class="custom-select" name="department">
            <option disabled>--choose One--</option>
            <?php
            $departmentSql = "SELECT id, name from department";
            $result = mysqli_query($connection, $departmentSql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value=\"" . $row["id"] . "\">" . $row["name"] . "</option>";
              }
            }
            ?>
          </select>
        </div>

        <div class="form-group col-sm">
          <input type="submit" class="btn btn-secondary " name="add_subject" value="Add Lab">
        </div>
      </form>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>