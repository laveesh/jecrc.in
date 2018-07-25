let params = (new URL(document.location)).searchParams;
let id = params.get("section");
$ ( document ).ready(() => {
    var url="../departments/admission/modules/"+id+".php"
    $('#admission_root').load(url);
});
