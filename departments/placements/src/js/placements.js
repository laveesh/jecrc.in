let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/placements/modules/"+id+".php"
    $('#placements_root').load(url);
});
