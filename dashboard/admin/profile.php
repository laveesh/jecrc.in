<?php include "includes/header.php" ?>

<?php
if(isset($_SESSION['username'])){
    $query = "SELECT * FROM users WHERE username = '{$_SESSION['username']}' ";
    $select_user = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_user)){
        $username = $row['username'];
        $user_email = $row['user_email'];
        $user_name = $row['user_name'];
    }

}
?>

<?php
if(isset($_POST['update_user'])){
    $user_email = escape($_POST['user_email']);
    $user_name = escape($row['user_name']);
 
    $query = "UPDATE users SET user_email = '{$user_email}', user_name = '{$user_name}' WHERE username = ? ";
  
    $stmt_update_user_query = mysqli_prepare($connection,$query);
    mysqli_stmt_bind_param($stmt_update_user_query, "s", $_SESSION['username']);
    mysqli_stmt_execute($stmt_update_user_query);
    mysqli_stmt_close($stmt_update_user_query);

    confirm_query($stmt_update_user_query);

    header("location:includes/logout.php");

}
?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">


<div id="content-wrapper">

  <div class="container-fluid">
    <!-- Page Content -->
    <h2>Edit Your Personal Details</h2>
    <hr>

    <div class="col-sm-5">
        <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="user_name">Name</label>
                <input type="text" value="<?php echo $user_name; ?>" class="form-control" name="user_name" >
            </div>
    
            <div class="form-group">
                <label for="user_email">Email</label>
                <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email" >
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-secondary " name="update_user" value="UPDATE PROFILE" >
            </div>
        </form>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>