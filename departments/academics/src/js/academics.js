let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/academics/modules/"+id+".php"
    $('#academics_root').load(url);
});
