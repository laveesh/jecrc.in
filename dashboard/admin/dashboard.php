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
    
      <div class="row text-center" style="font-size:30px;">
        <div class="col-sm-6">
          <a href="add_teachers.php">
            <i class="fas fa-plus-circle"></i> Add Techer
          </a>
        </div>

        <div class="col-sm-6">
          <a href="add_subject.php">
            <i class="fas fa-plus-circle"></i> Add Subject
          </a>
        </div>
      </div>

      <div class="container mt-5">
      
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Teacher's Name</th>
            <th scope="col">Email</th>
            <th scope="col">Change password</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            getTeachersTable();
          ?>
        </tbody>
      </table>
      </div>

      <div class="container mt-5">
        <?php include "subjects.php"?>
      </div>



  </div>
  <!-- /.content-wrapper -->



</div>
<!-- /#wrapper -->


<?php include "includes/footer.php" ?>