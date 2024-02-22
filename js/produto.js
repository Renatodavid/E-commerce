// Selecionando os elementos do DOM
const inputTamanho = document.querySelector('[name="tamanho"]');
const outputTamanho = document.querySelector('[name="valortamanho"]');

// Função para atualizar o valor do tamanho exibido
function atualizarValorTamanho() {
    const tamanhoSelecionado = inputTamanho.value;
    outputTamanho.value = tamanhoSelecionado;
    outputTamanho.textContent = tamanhoSelecionado;
}

// Adicionando um ouvinte de evento para o evento 'input', que ocorre quando o valor do input muda
inputTamanho.addEventListener('input', atualizarValorTamanho);

// Chamando a função inicialmente para garantir que o valor seja exibido corretamente ao carregar a página
atualizarValorTamanho();
