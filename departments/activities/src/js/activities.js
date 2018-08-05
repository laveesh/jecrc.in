let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/activities/modules/"+id+".php"
    $('#activities_root').load(url);
});
