<!DOCTYPE html>
<html>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/estilo.css">
	
	<link rel="stylesheet" href="css/mobile.css"media="(max-width:939px)">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap-flatly.css">
	<link rel="stylesheet" href="css/produto.css">
	<link rel="stylesheet" href="css/mobile.css">
	

	<body>
	<?php 
	$cabecalho_title ="Produto da Mirror Fashion";
	 include("./php/cabecalho.php");?>
	 
	<div class="produto ">
				<h1>Fuzzy Cardigan</h1>
				<p>por apenas R$ 129,00</p>

				<form action="checkout.php" method="$_POST">
			    	<fieldset class="cores">
			        	<legend>Escolha a cor</legend>

			          	<input type="radio" name="cor" value="verde" id="verde" checked>
			          	<label for="verde">
			            	<img src="img/produtos/foto1-verde.png" alt="verde">
			         	</label>
			          
			          	<input type="radio" name="cor" value="rosa" id="rosa">
			          	<label for="rosa">
			            	<img src="img/produtos/foto1-rosa.png" alt="rosa">
			          	</label>
			          
			          	<input type="radio" name="cor" value="azul" id="azul">
			          	<label for="azul">
			            	<img src="img/produtos/foto1-azul.png" alt="azul">
			          	</label>
			      	</fieldset>

			      	<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>

						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho" oninput="output.value = this.value">
					 	<output name="output" for="tamanho" value="42">42
				  	</fieldset>

			      	<input type="submit" class="comprar" value="Comprar">
			  	</form>
			</div>
			<table>
				<caption>Quantidade e preço de camiseteas</caption>
				<colgroup>
				</col width="10%">
			</colgroup>
			</table>
	
	<?php include("./php/rodape.php");?>
	</body>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</html>
<!--Criado por Renato Marques david-->