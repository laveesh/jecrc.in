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
        

    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Subject">Subject</label>
            <input type="text" class="form-control" name="subject">
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" name="Department">
        </div>
        <div class="form-group">
            <label for="topic">Topic</label>
            <input type="text" class="form-control" name="Topic">
        </div>
        <div class="form-group">
            <label for="Notes">Notes</label>
            <input type="file" accept="image/*" class="form-control-file" name="Notes" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description" rows="3"></textarea>
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