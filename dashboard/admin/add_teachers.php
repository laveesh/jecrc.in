<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

<div id="content-wrapper">

  <div class="container-fluid">
    <!-- Page Content -->


    <h2>Add Teachers</h2>
    <hr>

    <?php
    if(isset($_POST['add_teacher'])){

        $username = escape($_POST['username']);
        $password = escape($_POST['password']);
        $teacherName = escape($_POST['teacherName']);
        $teacherEmail = escape($_POST['teacherEmail']);

        $query = "INSERT INTO users(username,user_name,user_password,user_role, user_email) ";
        $query .= "VALUES( '{$username}','{$teacherName}','{$password}','teacher','{$teacherEmail}' )";

        $stmt_add_teacher_query = mysqli_query($connection,$query);

        confirm_query($stmt_add_teacher_query);

        header("location:dashboard.php");

    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="teacherName" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="teacherEmail" required>
        </div>
        <div class="form-group col-sm">
            <input type="submit" class="btn btn-secondary " name="add_teacher" value="Add Teacher" required>
        </div>
    </form>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>