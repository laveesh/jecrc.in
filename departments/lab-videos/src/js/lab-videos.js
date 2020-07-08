let params = new URL(document.location).searchParams;
let id = params.get('section');
$(document).ready(() => {
  var url = '../departments/lab-videos/modules/' + id + '.php';
  $('#videos_root').load(url);
  setTimeout(() => setVideos(0), 500);
});
$(document).ready(function() {
  $('.owl-carousel').owlCarousel();
});

function setVideos(labId) {
  var host = window.location.hostname;
  var baseUrl = '';
  if (host == 'localhost') {
    baseUrl = '/jecrcwebsite';
  }
  $.ajax({
    type: 'POST',
    url: baseUrl + '/departments/lab-videos/modules/function.php',
    data: { getVideos: true, lab: labId },
    success: data => {
      document.getElementById('videos').innerHTML = data;
    }
  });
}
