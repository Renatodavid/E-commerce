var formatado = numberParaReal(9.9);
var valor = realParaNumber("R$ 120,35");

if(formatado === "R$ 9,90" && valor === 120,35){
    console.log("Conversão de moeda está funcionando");
} else {
    console.log("Conversão de moeda está com erro!");
}