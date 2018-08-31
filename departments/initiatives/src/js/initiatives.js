let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/initiatives/modules/"+id+".php"
    $('#initiatives_root').load(url);
});
