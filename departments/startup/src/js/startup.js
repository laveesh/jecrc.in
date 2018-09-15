let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/startup/modules/"+id+".php"
    $('#startup_root').load(url);
});
