<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

<div id="content-wrapper">

  <div class="container-fluid">
    <!-- Page Content -->


    <h2>Assign Subject</h2>
    <hr>

    <?php
    if(isset($_POST['add_subject'])){
      $subjectId = escape($_POST['subject']);
      $userId = escape($_SESSION['user_id']);

      $query = "INSERT INTO sub_assigned(user_id, sub_id)";
      $query .= "VALUES('{$userId}','{$subjectId}')";

      $stmt_add_teacher_query = mysqli_query($connection,$query);

      confirm_query($stmt_add_teacher_query);
      
      header("location:dashboard.php");
    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="department">Subject Name</label>
            <select class="custom-select" name="subject">
            <option disabled>--choose One--</option>
            <?php
              $subjectSql = "SELECT s.id as sid, s.name as sname, d.name as dname from subject s join department d on ";
              $subjectSql .= "s.dpt_id = d.id";
              $result = mysqli_query($connection, $subjectSql);
              
              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<option value=\"" . $row["sid"]. "\">" . $row["sname"]. ", ". $row["dname"] . "</option>";
                }
              }
            ?>
            </select>
        </div>

        <div class="form-group col-sm">
            <input type="submit" class="btn btn-secondary " name="add_subject" value="Add Subject" >
        </div>
    </form>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>