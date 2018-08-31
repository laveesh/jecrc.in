<!-- this is the side bar icon -->
<div class="navbar-header" id="sideNavHeader">
  <button type="button" class="navbar-toggle" id="sideNavIcon" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
  <span><i class="fa fa-bars"></i></span>
  </button>
</div>
<div class="container-fluid bg-primary deptHeader">
  <span class="deptName">Achivements</span>
</div>
<!-- Container for sidebar and Image Carousel -->
<div class="container-fluid banner">
  <div class="row">
                <!-- Image Carousel -->
                <div class="col-sm-12 imageCarousel">
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