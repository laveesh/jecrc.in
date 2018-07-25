let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/research/modules/"+id+".php"
    $('#research_root').load(url);
});
