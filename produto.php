<!DOCTYPE html>
<html>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/estilo.css">
	
	<link rel="stylesheet" href="css/mobile.css"media="(max-width:939px)">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap-flatly.css">
	<link rel="stylesheet" href="css/produto.css">
	<link rel="stylesheet" href="css/mobile.css">
	<script type="text/javascript" src="js/verificarImg.js"></script>
	

	<body>
	<?php 
	$cabecalho_title ="Produto da Mirror Fashion";
	 include("./php/cabecalho.php");?>
	 <!--verificar o pq nao esta puxando as imagens corretamente aviso-->
	<div class="produto col-md-12">
				<h1>Fuzzy Cardigan</h1>
				<p>por apenas R$ 129,00</p>

				<form action="checkout.php" method="POST">
					<fieldset class="cores">
					<legend>Escolha a cor</legend>

						<input type="radio" name="cor" value="verde" id="verde" <?= isset($_POST['cor']) && $_POST['cor'] === 'verde' ? 'checked' : '' ?>>
						<label for="verde">
							<img src="img/produtos/foto1-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto2-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto3-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto4-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto5-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto6-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto7-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto8-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto9-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto10-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto11-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto12-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto13-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto14-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto15-verde.png" alt="Camisa na cor Verde" class="img-thumbnail img-responsive">
						
						</label>
						

						<input type="radio" name="cor" value="rosa" id="rosa" <?= isset($_POST['cor']) && $_POST['cor'] === 'rosa' ? 'checked' : '' ?>>
						<label for="rosa">

						<img src="img/produtos/foto1-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto2-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto3-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto4-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto5-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto6-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto7-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto8-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto9-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto10-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto11-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto12-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto13-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto14-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						<img src="img/produtos/foto15-rosa.png" alt="Camisa na cor Rosa" class="img-thumbnail img-responsive">
						
						</label>

						<input type="radio" name="cor" value="azul" id="azul" <?= isset($_POST['cor']) && $_POST['cor'] === 'azul' ? 'checked' : '' ?>>
						<label for="azul">
							<img src="img/produtos/foto1-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto2-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto3-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto4-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto5-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto6-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto7-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto8-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto9-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto10-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto11-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto12-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto13-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto14-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							<img src="img/produtos/foto15-azul.png" alt="Camisa na cor Azul" class="img-thumbnail img-responsive">
							
						</label>

					</fieldset>

					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						<input type="range" min="36" max="46" value="<?= isset($_POST['tamanho']) ? $_POST['tamanho'] : '42' ?>" step="2" name="tamanho" id="tamanho" oninput="output.value = this.value">
						
						<output id="output" for="tamanho"><?= isset($_POST['tamanho']) ? $_POST['tamanho'] : '42' ?></output>
					
					</fieldset>

					<input type="submit" class="comprar" value="Comprar">
				</form>

			</div>
		
	
	<?php include("./php/rodape.php");?>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/verificarImg.js"></script>
	
	</body>
</html>
<!--Criado por Renato Marques david-->