var formatado = "R$ "+ numero.tofixed(2).replace(".", ",");

var compativelComParseFloat = texto.replace("R$", "");

compativelComParseFloat = compativelComParseFloat.replace(",", ".");
var valor = parseFloat(compativelComParseFloat);

function numberParaReal(numero){
    var formatado = "R$" + numero.tofixed(2).replace(".",",");
    return formatado;
}

function realParaNumber(texto){
    var compativelComParseFloat = texto.replace("R$ ", "");
    compativelComParseFloat = compativelComParseFloat.replace(",",".");
    var valor = parseFloat(compativelComParseFloat);
    return valor;
}