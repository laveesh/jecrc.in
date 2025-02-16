<!-- this is the side bar icon -->
<div class="navbar-header" id="sideNavHeader">
  <button type="button" class="navbar-toggle" id="sideNavIcon" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
    <span><i class="fa fa-bars"></i></span>
  </button>
</div>
<div class="container-fluid bg-primary deptHeader">
  <span class="deptName">Trainings and Placements</span>
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
              <li class="active"><a href="placements.php?section=home">Home<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <!-- <li class="active"><a href="placements.php?section=visionmission">Vision and Mission<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li> -->
              
              <li class="active"><a href="placements.php?section=tie_ups">Unique Initiatives<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="active"><a href="placements.php?section=companies_list">Company List<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="nav-item">
                <a class="active" href="placements.php?section=pastyear">
                  Statistics
                </a>
                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="placements.php?section=2018">2018</a>
                  <a class="dropdown-item" href="placements.php?section=2015_17">2015 - 2017</a>
                  <a class="dropdown-item" href="placements.php?section=2012_14">2012 - 2014</a>
                  <a class="dropdown-item" href="placements.php?section=2009_11">2009 - 2011</a>
                  <a class="dropdown-item" href="placements.php?section=2006_08">2006 - 2008</a>
                </div> -->
              </li>
              <!-- <li class="active"><a href="placements.php?section=career_development">Career Development Center<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li> -->
              <li class="active"><a href="placements.php?section=facilities">Training<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="active"><a href="placements.php?section=brochure">Brochure<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
            	</ul>
      				
      		</div>
      	</div>
      </div>
    </div>
    <!-- Image Carousel -->
    <div class="col-sm-10 imageCarousel">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img  src="../departments/placements/src/Carousel/a1.jpg" alt="Fifth slide">
          </div>
          <div class="carousel-item">
            <img  src="../departments/placements/src/Carousel/a2.jpg" alt="Fifth slide">
          </div>
          <div class="carousel-item">
            <img  src="../departments/placements/src/Carousel/a3.jpg" alt="Fifth slide">
          </div>
          <div class="carousel-item active">
            <img src="../departments/placements/src/Carousel/a4.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img src="../departments/placements/src/Carousel/a5.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="../departments/placements/src/Carousel/a6.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img  src="../departments/placements/src/Carousel/a7.jpg" alt="Fifth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
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
