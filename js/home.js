
$('.novidades button').click(function() {
  $('.novidades').addClass('painel-aberto');
  });
  
  $('.novidades button').click(function() {
  $('.novidades').toggleClass('painel-aberto');
  });

document.addEventListener('DOMContentLoaded', (event) => {
  let menuItems = document.querySelectorAll('.departamentos-lista > li > a');

  menuItems.forEach((item) => {
      item.addEventListener('click', (event) => {
          event.preventDefault();

          // Feche todas as sublistas
          document.querySelectorAll('.sublista').forEach((sublista) => {
              if (sublista !== item.nextElementSibling) {
                  sublista.style.display = 'none';
              }
          });

          // Abra ou feche a sublista clicada
          let subMenu = item.nextElementSibling;
          subMenu.style.display = subMenu.style.display === 'none' ? 'block' : 'none';
      });
  });
});


document.querySelector('input[type=email').oninvalid = function(){
  this.setCustomValidity("");//remove mensagem de errod antgas
  if(!this.validity.valid){//reexecuta a validação
    this.setCustomValidity("Email inválido");// se inválido, coloca mensagem de erro
  }
}