// Seleciona os elementos do DOM
const inputQuantidade = document.querySelector("#qtd");
const outputTotal = document.querySelector("#total");
const preco = document.querySelector("#preco");

// Associa o evento 'input' ao inputQuantidade
inputQuantidade.addEventListener('input', calcularEMostrarTotal);

// Função para calcular e mostrar o total
function calcularEMostrarTotal() {
    const quantidade = parseFloat(inputQuantidade.value);
    const valorUnitario = parseFloat(preco.textContent.replace('R$', '').replace(',', '.'));

    if (isNaN(quantidade) || isNaN(valorUnitario)) {
        outputTotal.textContent = 'Valor inválido';
        return;
    }

    const total = formatarMoeda(quantidade * valorUnitario);
    outputTotal.textContent = total;
}

// Função para formatar um número como moeda (R$)
function formatarMoeda(valor) {
    return valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
}
