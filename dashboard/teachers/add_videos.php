<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

  <div id="content-wrapper">

    <div class="container-fluid">
      <!-- Page Content -->


      <h2>Add Laboratory Videos</h2>
      <hr>

      <?php
      if (isset($_POST['add_video'])) {
        $labAssignedId = escape($_POST['lab']);
        $topic = escape($_POST['topic']);
        $code = escape($_POST['code']);
        $description = escape($_POST['description']);

        $query = "INSERT INTO videos(lab_assign_id,topic,code,description) ";
        $query .= "VALUES( '{$labAssignedId}','{$topic}','{$code}','{$description}' )";

        $stmt_add_videos_query = mysqli_query($connection, $query);

        confirm_query($stmt_add_videos_query);

        header("location:dashboard.php");
      }

      ?>

      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="lab">Laboratory</label>
          <select class="custom-select" name="lab" require>
            <option disabled>--choose One--</option>
            <?php
            getAssLabWithDptName($_SESSION['user_id'])
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="topic">Topic</label>
          <input type="text" class="form-control" name="topic" require>
        </div>
        <div class="form-group">
          <label for="code">Youtube video code (example: VwABBsV5mkA)</label>
          <input type="text" class="form-control" name="code" require>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description" rows="3" require></textarea>
        </div>
        <div class="form-group col-sm">
          <input type="submit" class="btn btn-secondary " name="add_video" value="Add Video">
        </div>
      </form>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>