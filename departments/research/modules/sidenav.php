<!-- this is the side bar icon -->
<div class="navbar-header" id="sideNavHeader">
  <button type="button" class="navbar-toggle" id="sideNavIcon" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
  <span><i class="fa fa-bars"></i></span>
  </button>
</div>
<div class="container-fluid bg-primary deptHeader">
  <span class="deptName">Research</span>
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
              <li class="active"><a href="research.php?section=home">Home<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="active"><a href="research.php?section=collabs">Gloabal Collaborations<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
              <li class="active"><a href="cse.php?section=publication">
                Computer Science<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li class="active"><a href="it.php?section=publication">
                  Information Technology<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                  <li class="active"><a href="ece.php?section=publication">
                    Electronics & Communication<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                    <li class="active"><a href="me.php?section=publication">
                      Mechanical Engineering<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                      <li class="active"><a href="ee.php?section=publication">
                        Electrical Engineering<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                        <li class="active"><a href="civil.php?section=publication">
                          Civil Engineering<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
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