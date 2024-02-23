function numberParaReal(numero) {
    var formatado = "R$ " + numero.toFixed(2);
    return formatado.replace(".", ",");
}
 
function realParaNumber(texto) {
    var compativelComParseFloat = texto.replace(/\s*R\$\s*/, "");
    compativelComParseFloat = compativelComParseFloat.replace(",", ".");
    return parseFloat(compativelComParseFloat);
}