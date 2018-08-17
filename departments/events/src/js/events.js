let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/events/modules/"+id+".php"
    $('#events_root').load(url);
});
