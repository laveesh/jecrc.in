let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/mou/modules/"+id+".php"
    $('#mou_root').load(url);
});
