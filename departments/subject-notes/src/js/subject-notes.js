let params = new URL(document.location).searchParams;
let id = params.get('section');
$(document).ready(() => {
  var url = '../departments/subject-notes/modules/' + id + '.php';
  $('#notes_root').load(url);
  setTimeout(() => setNotes(0), 500);
});
$(document).ready(function() {
  $('.owl-carousel').owlCarousel();
});

function setNotes(subjectId) {
  var host = window.location.hostname;
  var baseUrl = '';
  if (host == 'localhost') {
    baseUrl = '/jecrcwebsite';
  }
  $.ajax({
    type: 'POST',
    url: baseUrl + '/departments/subject-notes/modules/function.php',
    data: { getNotes: true, subject: subjectId },
    success: data => {
      document.getElementById('notes').innerHTML = data;
    }
  });
}
