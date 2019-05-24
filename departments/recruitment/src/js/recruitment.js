let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/recruitment/modules/"+id+".php"
    $('#recruitment_root').load(url);
});