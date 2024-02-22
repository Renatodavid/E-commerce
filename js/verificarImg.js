  // Captura o clique na imagem e ajusta o estado do input correspondente
  document.querySelectorAll('.imagem-produto').forEach(img => {
    img.addEventListener('click', function() {
        var input = this.parentElement.querySelector('input[type="radio"]');
       input.checked = true;
   });
});
  // Captura o clique em qualquer imagem dentro das labels
  document.querySelectorAll('.id name label img').forEach(img => {
    img.addEventListener('click', function() {
        // Obtém todas as imagens dentro da label clicada
        var imagens = this.parentElement.querySelectorAll('img');
        
        // Cria uma array para armazenar os URLs das imagens
        var listaImagens = [];
        
        // Itera sobre todas as imagens e armazena seus URLs na lista
        imagens.forEach(function(img) {
            listaImagens.push(img.src);
        });
        
        // Exibe a lista de URLs das imagens no console
        console.log('Lista de URLs das imagens:', listaImagens);
        
        // Faça o que quiser com a lista de URLs das imagens aqui
    });
});
function redirect(cor) {
  // Obtém o formulário
  var form = document.getElementById("checkoutForm");
  // Define o valor do campo de cor no formulário
  form.elements["cor"].value = cor;
  // Envia o formulário
  form.submit();
}