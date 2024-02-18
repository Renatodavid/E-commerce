var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner() {
  bannerAtual = (bannerAtual + 1) % 2;
  document.querySelector('.destaque img').src = banners[bannerAtual];
}

setInterval(trocaBanner, 4000);

$('.mais-vendidos, .novidades').addClass('painel-compacto');

$('.mais-vendidos button').click(function() {
	$('.mais-vendidos').removeClass('painel-compacto');
});

$('.novidades button').click(function() {
	$('.novidades').removeClass('painel-compacto');
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

document.addEventListener('DOMContentLoaded', function(){
  // Inicia o carrossel
  var myCarousel = document.querySelector('#carouselExampleSlidesOnly');
  var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 4000 // Define o intervalo de tempo para 4 segundos
  });
});

document.querySelector('input[type=email').oninvalid = function(){
  this.setCustomValidity("");
  if(!this.validity.valid){
    this.setCustomValidity("Email inválido");
  }
}