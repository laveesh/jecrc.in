<!-- this is the side bar icon -->
<div class="navbar-header" id="sideNavHeader">
  <button type="button" class="navbar-toggle" id="sideNavIcon" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
    <span><i class="fa fa-bars"></i></span>
  </button>
</div>
<div class="container-fluid bg-primary deptHeader">
  <span class="deptName">Admission</span>
</div>
<!-- Container for sidebar and Image Carousel -->
<div class="container-fluid banner">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-sm-2 sidebarContainer">
      <div class="navbar navbar-expand-sm bg-primary sidebar" role="navigation">
          <div class="container-fluid">
      		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav flex-column">
              <li class="active"><a href="">Home<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Academics
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="as.php?section=co_po_mapping">CO and PO Mapping</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Faculty and Staff
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="as.php?section=faculty">Faculty</a>
                  <a class="dropdown-item" href="">Technical Staff</a>
                </div>
              </li>

            </ul>
      				</li>
      			</ul>
      		</div>
      	</div>
      </div>
    </div>
    <!-- Image Carousel -->
    <div class="col-sm-10 imageCarousel">
      <?php include "../modules/imageCarousel.php" ?>
    </div>
  </div>
</div>
