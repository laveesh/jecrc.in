let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/patron/modules/"+id+".php"
    $('#patron_root').load(url);
});
