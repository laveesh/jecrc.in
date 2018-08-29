let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/ee/modules/"+id+".php"
    $('#ee_root').load(url);
});
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});