<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

  <div id="content-wrapper">
    <div class="container-fluid text-center">
      <h1><?php echo ucfirst($_SESSION['user_role']) ?>'s Panel</h1>
      <hr>
      <h2>Welcome <?php echo strtoupper($_SESSION['user_name']); ?></h2>
    </div>
    <!-- /.container-fluid -->

    <div class="text-center row" style="font-size:30px;">
      <div class="col-sm-6">
        <a href="assign_subject.php">
          <i class="fas fa-plus-circle"></i> Assign Subject
        </a>
      </div>

      <div class="col-sm-6">
        <a href="add_notes.php">
          <i class="fas fa-plus-circle"></i> Add Notes
        </a>
      </div>
    </div>

    <?php if ($_SESSION['user_role'] == 'editor') { ?>
      <div class="text-center row" style="font-size:30px;">
        <div class="col-sm-6">
          <a href="assign_lab.php">
            <i class="fas fa-plus-circle"></i> Assign Laboratory
          </a>
        </div>

        <div class="col-sm-6">
          <a href="add_videos.php">
            <i class="fas fa-plus-circle"></i> Add Videos
          </a>
        </div>
      </div>
    <?php } ?>

    <div class="container mt-5">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Department</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php getAssignedSubjects($_SESSION['user_id']) ?>
        </tbody>
      </table>
    </div>

    <?php if ($_SESSION['user_role'] == 'editor') { ?>
      <div class="container mt-5">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Laboratory Name</th>
              <th scope="col">Department</th>
            </tr>
          </thead>
          <tbody>
            <?php getAssignedLabs($_SESSION['user_id']) ?>
          </tbody>
        </table>
      </div>
    <?php } ?>

    <div class="container mt-5">
      <?php
      include "notes.php"
      ?>
    </div>

    <?php if ($_SESSION['user_role'] == 'editor') { ?>
      <div class="container mt-5">
        <?php
        include "videos.php"
        ?>
      </div>
    <?php } ?>

  </div>

</div>
<!-- /#wrapper -->


<?php include "includes/footer.php" ?>