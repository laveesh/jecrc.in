let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/it/modules/"+id+".php"
    $('#it_root').load(url);
});
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});