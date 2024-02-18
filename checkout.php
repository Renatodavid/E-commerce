<!DOCTYPE html>
<html lang="pt-br">


<body>
<?php 
	$cabecalho_title ="Produto da Mirror Fashion";
	 include("./php/cabecalho.php");?>
     <?php $links;
     include("./php/links.php");?>


    <h1>Ótima escolha!</h1>
    <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.
    </p>
    <h2>Sua Compra</h2>
    <dl>
        <dt>Cor</dt>
        <dd><?= $_POST['cor']?></dd>

        <dt>Tamanho</dt>
        <dd><?= $_POST['tamanho']?></dd>
        
    </dl>
    <input type="hidden" name="nome" value="Fuzzy Cardigan">
    <input type="hidden" name="preco" value="129.99">
    <dt>Produto</dt>
    <dd><?= $_POST['nome']?></dd>
    <dt>Preço</dt>
    <dd><?=$_POST['preco']?></dd>
    

</body>
</html>
<!--Criado por Renato Marques david-->