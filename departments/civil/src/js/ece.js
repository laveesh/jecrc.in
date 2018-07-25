let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/civil/modules/"+id+".php"
    $('#civil_root').load(url);
});
