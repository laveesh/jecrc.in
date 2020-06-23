<?php include "db.php"; ?>

<?php ob_start(); ?>
<?php session_start(); ?>


<?php
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = mysqli_real_escape_string($connection,$username);
	$password = mysqli_real_escape_string($connection,$password);

	$query = "SELECT * FROM users WHERE username = '{$username}' AND user_password = '{$password}' ";
	$login_user_query = mysqli_query($connection,$query);

	if(!$login_user_query){
	    die("QUERY FAILED " . mysqli_error($connection));
	}

	while($row = mysqli_fetch_assoc($login_user_query)){
	    $db_user_id = $row['user_id'];
	    $db_username = $row['username'];
	    $db_user_name = $row['user_name'];
	    $db_user_password = $row['user_password'];
	    $db_user_email = $row['user_email'];
	    $db_user_role = $row['user_role'];
	}

	if($password == $db_user_password){
	    $_SESSION['user_id'] = $db_user_id;
	    $_SESSION['username'] = $db_username;
	    $_SESSION['user_name'] = $db_user_name;
	    $_SESSION['user_email'] = $db_user_email;
	    $_SESSION['user_role'] = $db_user_role;

		if($_SESSION['user_role'] == 'admin'){
			header("location: admin/dashboard.php");
		}else{
			header("location: teachers/dashboard.php");
		}
	}
	else{ 
	    header("location: index.php");
	}

}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
		<!-- Page Content -->
		<div class="container">
		    <section id="login">
		        <div class="row  justify-content-center align-items-center">
		            <div class="col-sm-4 col-sm-offset-4 boxview mt-4 px-5 py-2">
		                <div class="form-wrap">
							<h3 class="text-center"><i class="fas fa-user-circle fa-4x"></i></h3>
							<h2 class="text-center">Login Panel</h2>
		                	    <form role="form" action="index.php" method="post" id="login-form" autocomplete="off">
		                			<div class="input-group mb-3">
										<div class="input-group-prepend">
		     								<span class="input-group-text"><i class="far fa-user"></i></span>
										</div>
		                	            <label for="username" class="sr-only">Username</label>
										<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
									</div>
		                	        <div class="input-group mb-3">
										<div class="input-group-prepend">
		     								<span class="input-group-text"><i class="fas fa-key"></i></span>
										</div>
		                	            <label for="password" class="sr-only">password</label>
										<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
		                	        </div>
		                	        <input type="submit" name="login" id="btn-login" class="btn btn-secondary btn-lg btn-block" value="Login">
		                	    </form>
		                </div>
		    	    </div> <!-- /.col-sm-4 -->
		    	</div> <!-- /.row -->
		    </section> <!-- /.section -->
		</div> <!-- /.container -->

    	<!-- Bootstrap core JavaScript -->
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    	<!-- Custom scripts for all pages -->
    	<script src="js/sb-admin.min.js"></script>
    	<script src="js/script.js"></script>

  </body>
</html>
