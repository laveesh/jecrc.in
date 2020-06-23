<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

<div id="content-wrapper">

  <div class="container-fluid">
    <!-- Page Content -->


    <h2>Add Notes</h2>
    <hr>

    <?php
    if(isset($_POST['add_notes'])){
      $subAssignedId = escape($_POST['subject']);
      $topic = escape($_POST['topic']);
      $description = escape($_POST['description']);

      $query = "INSERT INTO notes(sub_assign_id,topic,description) ";
      $query .= "VALUES( '{$subAssignedId}','{$topic}','{$description}' )";

      $stmt_add_notes_query = mysqli_query($connection,$query);

      confirm_query($stmt_add_notes_query);

      if($stmt_add_notes_query){
        $last_id = mysqli_insert_id($connection);

        $temp = explode(".", $_FILES["notes"]["name"]);
        $newFilename = $last_id . '.' . end($temp);

        $target_dir = "../../uploads/";
        $target_file = $target_dir . $newFilename;

        $notes_temp_image = $_FILES['notes']['tmp_name'];
        if(move_uploaded_file($notes_temp_image,$target_file)){
          $fileLink = "https://jecrc.in/uploads/".$newFilename;
        $updateFile = "UPDATE notes SET link = '{$fileLink}' WHERE id = '{$last_id}'";

        $stmt_update_notes_query = mysqli_prepare($connection,$updateFile);
        mysqli_stmt_execute($stmt_update_notes_query);
        mysqli_stmt_close($stmt_update_notes_query);

        confirm_query($stmt_update_notes_query);
        header("location:dashboard.php");
        }else {
          $deleteQuery = "DELETE from notes where id = '{$last_id}'";
          $result = mysqli_query($connection, $deleteQuery);
      
          confirm_query($result);
        }

        
      }

    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="subject">Subject</label>
            <select class="custom-select" name="subject" require>
            <option disabled>--choose One--</option>
            <?php
              getAssSubjectWithDptName($_SESSION['user_id'])
            ?>
            </select>
        </div>
        <div class="form-group">
            <label for="topic">Topic</label>
            <input type="text" class="form-control" name="topic" require>
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <input type="file" accept="application/pdf" class="form-control-file" name="notes" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description" rows="3" require></textarea>
        </div>
        <div class="form-group col-sm">
            <input type="submit" class="btn btn-secondary " name="add_notes" value="Add Notes" >
        </div>
    </form>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>