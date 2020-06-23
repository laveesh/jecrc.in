let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/achivements/modules/"+id+".php"
    $('#achivements_root').load(url);
});
