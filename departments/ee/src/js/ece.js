let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/ece/modules/"+id+".php"
    $('#ece_root').load(url);
});
