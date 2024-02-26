<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/bootstrap-flatly.css">
<link rel="stylesheet" href="css/produto.css">
<link rel="stylesheet" href="css/mobile.css">
<link rel="stylesheet" href="css/novoindex.css">





<body>

	<nav class="navbar navbar-default col-md-12">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Mirror Fashion</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="#">Sua Conta</a></li>
			<li><a href="#">Lista de Desejos</a></li>
			<li><a href="#">Cartão Fidelidade</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
		</ul>
	</nav>

	<div class="produto ">

		<h1>Fuzzy Cardigan</h1>
		<p type="number"> R$ 129,00</p>

		<form action="checkout.php" method="POST">
			<fieldset class="cores">
				<legend>Escolha a cor</legend>

				<input type="radio" name="cor" value="verde" id="verde" <?= isset($_POST['cor']) && $_POST['cor'] === 'verde' ? 'checked' : '' ?>>
				<label for="verde">
					<?php
					// Verifica se o parâmetro 'imagem' foi enviado na URL
					if (isset($_GET['imagem'])) {
						// Recupera o caminho da imagem da URL
						$caminho_imagem = $_GET['imagem'];
						// Use $caminho_imagem conforme necessário na página
						echo '<img src="' . $caminho_imagem . '" alt="Imagem">';
					}
					?>

				</label>


				<input type="radio" name="cor" value="rosa" id="rosa" <?= isset($_POST['cor']) && $_POST['cor'] === 'rosa' ? 'checked' : '' ?>>
				<label for="rosa">
					<?php
					// Verifica se o parâmetro 'imagem' foi enviado na URL
					if (isset($_GET['imagem'])) {
						// Recupera o caminho da imagem da URL
						$caminho_imagem = $_GET['imagem'];
						// Use $caminho_imagem conforme necessário na página
						echo '<img src="' . $caminho_imagem . '" alt="Imagem">';
					}
					?>

				</label>

				<input type="radio" name="cor" value="azul" id="azul" <?= isset($_POST['cor']) && $_POST['cor'] === 'azul' ? 'checked' : '' ?>>
				<label for="azul">
					<?php
					// Verifica se o parâmetro 'imagem' foi enviado na URL
					if (isset($_GET['imagem'])) {
						// Recupera o caminho da imagem da URL
						$caminho_imagem = $_GET['imagem'];
						// Use $caminho_imagem conforme necessário na página
						echo '<img src="' . $caminho_imagem . '" alt="Imagem">';
					}
					?>

				</label>

			</fieldset>

			<fieldset class="tamanhos">
				<legend>Escolha o tamanho:</legend>
				<input type="range" min="36" max="46" value="<?= isset($_POST['tamanho']) ? $_POST['tamanho'] : '42' ?>
						" step="2" name="tamanho" id="tamanho" oninput="output.value = this.value">

				<output id="output" for="tamanho" name="valortamanho"><?= isset($_POST['tamanho']) ? $_POST['tamanho'] : '42' ?></output>

			</fieldset>

			<input type="submit" class="comprar" value="Comprar">
		</form>

	</div>
	<div class="detalhes">
		<h2> Detalhe do Produto </h2>
		<p><?php
			$descricao;
			include("./php/descricao.php"); ?></p>
		<table>
			<thead>
				<tr>
					<th> Caracteristicas </th>
					<th> Detalhe </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td> Modelo </td>
					<td> Cardigan </td>
				</tr>
				<tr>
					<td> Material </td>
					<td> Algodão Poliester </td>
				</tr>
				<tr>
					<td> Cores </td>
					<td>Azul, Rosa e Verde </td>
				</tr>
				<tr>
					<td> Lavagem </td>
					<td> Lavar a Mão </td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
	</div>

	<footer class="row col-md-12">
		<div class="container">
			<img src="img/logo-rodape.png" alt="Logo Mirror Fashion" />

			<ul class="social">
				<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
				<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
				<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
			</ul>
		</div>
	</footer>

	<script type="text/javascript" src="js/produto.js"> </script>
	<script type="text/javascript" src="js/converteMoeda.js"></script>
	<script type="text/javascript" src="js/testaConversao.js"></script>
	<script type="text/javascrpit" src="js/total.js"></script>


</body>

</html>
<!--Criado por Renato Marques david-->