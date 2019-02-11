let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/faculty/modules/"+id+".php"
    $('#activities_root').load(url);
});
