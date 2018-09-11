let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/sdo/modules/"+id+".php"
    $('#sdo_root').load(url);
});
