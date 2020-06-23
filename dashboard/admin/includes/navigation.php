
<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <a class="navbar-brand mr-1" href="dashboard.php">
      <?php echo strtoupper("jecrc"); ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" style="color:#062259;font-weight:bold;font-size:1.3rem" href="../index.php">Home
            </a>
          </li>

          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" style="color:#062259;font-weight:bold;font-size:1.3rem" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i><?php echo $_SESSION['username']; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="profile.php">Edit Profile</a>
              <a class="dropdown-item" href="password.php">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="includes/logout.php"><i class="fas fa-power-off"></i> Logout</a>
            </div>
          </li> 
      </ul>
    </div>
</nav> 