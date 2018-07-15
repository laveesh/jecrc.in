let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/cse/modules/"+id+".php"
    $('#cse_root').load(url);
});
