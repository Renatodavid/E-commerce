$(document).ready(function(){
    $('.button').click(function() {
        $(this).prev('.painel').toggleClass('painel-aberto');
        var buttonText = $(this).text();
        $(this).text(buttonText == "Mostrar mais" ? "Fechar" : "Mostrar mais");
    });
});
