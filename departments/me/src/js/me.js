let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/me/modules/"+id+".php"
    $('#me_root').load(url);
});