let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/bhramann/modules/"+id+".php"
    $('#bhramann_root').load(url);
});
