// var menu = document.getElementsByClassName("bottom");
// function menuDown(){
//     alert("");
//     document.getElementById("subMenuProcess").style.display = "inline";
// }

function elementId(valor){
    var objeto = {
        "val": document.getElementById(valor).value,
        "id": document.getElementById(valor).id,
        "class": document.getElementById(valor).class,
        "name": document.getElementById(valor).name,
        "all": document.getElementById(valor)
    }
    return objeto;
}
function elementName(valor){
    var objeto = {
        "val": document.getElementsByName(valor).value,
        "id": document.getElementsByName(valor).id,
        "class": document.getElementsByName(valor).class,
        "name": document.getElementsByName(valor).name,
        "all": document.getElementsByName(valor)
    }
    return objeto;
}
