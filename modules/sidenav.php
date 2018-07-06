<div class="navbar navbar-expand-sm bg-primary sidebar col-md-3" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header" id="sideNavHeader">
			<button type="button" class="navbar-toggle" id="sideNavIcon" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span><i class="fa fa-bars"></i></span>
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav flex-column">
				<li class="active"><a href="#">Home<span class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
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
