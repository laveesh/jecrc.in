<!-- this is the side bar icon -->
<div class="navbar-header" id="sideNavHeader">
  <button type="button" class="navbar-toggle" id="sideNavIcon" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
    <span><i class="fa fa-bars"></i></span>
  </button>
</div>
<!-- Container for sidebar and Image Carousel -->
<div class="container-fluid banner">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-sm-3 sidebarContainer">
      <div class="navbar navbar-expand-sm bg-primary sidebar" role="navigation">
          <div class="container-fluid">
      		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      			<ul class="nav navbar-nav flex-column">
      				<li class="active"><a href="#">About<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
      				<li ><a href="#">Profile<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
      				<li ><a href="#">Messages<span class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
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
    <div class="col-md-9 col-sm-9 col-lg-9 imageCarousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../src/img/Carousel/slider1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img src="../src/img/Carousel/slider2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img   src="../src/img/Carousel/slider3.JPG" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img  src="../src/img/Carousel/slider4.jpg" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img  src="../src/img/Carousel/slider5.jpg" alt="Fifth slide">
          </div>
          <div class="carousel-item">
            <img  src="../src/img/Carousel/slider6.jpg" alt="Sixth slide">
          </div>
          <div class="carousel-item">
            <img  src="../src/img/Carousel/slider7.jpg" alt="Seventh slide">
          </div>
          <div class="carousel-item">
            <img  src="../src/img/Carousel/slider8.jpg" alt="Eighth slide">
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
$(document).ready(function () {
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
