
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


