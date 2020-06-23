let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/subject-notes/modules/"+id+".php"
    $('#notes_root').load(url);
});
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});