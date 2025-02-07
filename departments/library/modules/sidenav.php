<!-- this is the side bar icon -->
<div class="navbar-header" id="sideNavHeader">
  <button type="button" class="navbar-toggle" id="sideNavIcon" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
  <span><i class="fa fa-bars"></i></span>
  </button>
</div>
<div class="container-fluid bg-primary deptHeader">
  <span class="deptName">Library</span>
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
              <li class="active"><a href="library.php?section=home">JECRC Library<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="active"><a href="library.php?section=mission_vision">Vision & Mission<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Resources
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="library.php?section=collection">Collection</a>
                  <a class="dropdown-item" href="library.php?section=e_resources">E-Resources</a>
                </div>
              </li>
              <li class="active"><a href="library.php?section=rules">Rules and Regulations<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="active"><a href="library.php?section=contact">Contact<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
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
<script type="text/javascript">
function htmlbodyHeightUpdate(){
var height3 = $( window ).height()
var height1 = $('.nav').height()+50
height2 = $('.main').height()
if(height2 > height3){
$('html').height(Math.max(height1,height3,height2)+10);
$('body').height(Math.max(height1,height3,height2)+10);
}
else
{
$('html').height(Math.max(height1,height3,height2));
$('body').height(Math.max(height1,height3,height2));
}
}
$( document ).ready(function () {
htmlbodyHeightUpdate()
$( window ).resize(function() {
htmlbodyHeightUpdate()
});
$( window ).scroll(function() {
height2 = $('.main').height()
htmlbodyHeightUpdate()
});
});
</script>