document.addEventListener('DOMContentLoaded', function() {
    const inputTamanho = document.querySelector('[name="tamanho"]');
    const outputTamanho = document.querySelector('#output');

 
    function atualizarValorTamanho() {
        const tamanhoSelecionado = inputTamanho.value;
        outputTamanho.value = tamanhoSelecionado;
    }
 
    inputTamanho.addEventListener('input', atualizarValorTamanho);
 
    atualizarValorTamanho();
});