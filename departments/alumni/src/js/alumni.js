let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/alumni/modules/"+id+".php"
    $('#alumni_root').load(url);
});
