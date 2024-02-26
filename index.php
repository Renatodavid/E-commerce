<!DOCTYPE html>
<html>
<?php $links = "links css js";
include("./php/links.php"); ?>

<body class="light-theme">
	<header class="container">
		<div class="container-fluid">
		<h1>
			<img src="img/logo.png" alt="Mirror Fashion">
		</h1>
		<p class="sacola">
			Nenhum item na sacola de compras
		</p>
		<div>
        	<button class="btn">dark</button>
   		 </div>
		</div>
		<?php $navbar = "navbar";
		include("./php/navbar.php"); ?>
	</header>
	<div class="container ">
		<div class="row">
			<div class="banner-destaque col-md-6 ">

				<img src="img/destaque-home.png" class="pause" alt="Promoção: Big City Night" style="max-width: 100%; height: auto; margin:20px;">
			</div>
			<div class="col-md-6">
				<fieldset class="col-md-12">
					<div class="col-md-11">
						<section class="busca col-md-12">
							<h2 class="col-md-10">Busca</h2>
							<form>
								<input type="search" />
								<input type="image" src="img/busca.png" />
							</form>
						</section>
						<section class="menu-departamentos col-md-12">
							<nav class="navbar-inverse">
								<h2>Departamentos</h2>
								<ul class="departamentos-lista">
									<li><a href="#">Blusas e Camisas</a>
										<ul class="sublista">
											<li><a href="#">Manga curta</a></li>
											<li><a href="#">Manga comprida</a></li>
											<li><a href="#">Camisa social</a></li>
											<li><a href="#">Camisa casual</a></li>
										</ul>
									</li>
									<li><a href="#">Calças</a>
										<ul class="sublista">
											<li><a href="#">Calça preta</a></li>
											<li><a href="#">Calça branco</a></li>
											<li><a href="#">Calça bege</a></li>
											<li><a href="#">Calça social</a></li>
										</ul>
									</li>
									<li><a href="#">Saias</a>
										<ul class="sublista">
											<li><a href="#">Saia preta</a></li>
											<li><a href="#">Saia branco</a></li>
											<li><a href="#">Saia vermelha</a></li>
											<li><a href="#">Saia social</a></li>
										</ul>
									</li>
									<li><a href="#">Vestidos</a>
										<ul class="sublista">
											<li><a href="#">Vestido preto</a></li>
											<li><a href="#">Vestido branco</a></li>
											<li><a href="#">Vestido bege</a></li>
											<li><a href="#">Vestido vermelho</a></li>
										</ul>
									</li>
									<li><a href="#">Sapatos</a>
										<ul class="sublista">
											<li><a href="#">Sapato preto</a></li>
											<li><a href="#">Sapato branco</a></li>
											<li><a href="#">Sapato marron</a></li>
											<li><a href="#">Sapato social</a></li>
										</ul>
									</li>
									<li><a href="#">Bolsas e Carteiras</a>
										<ul class="sublista">
											<li><a href="#">Bolsa preta</a></li>
											<li><a href="#">Carteira branca</a></li>
											<li><a href="#">Bolsa marron</a></li>
											<li><a href="#">Carteira social</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</section>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
<!--https://www.youtube.com/watch?v=8y5jTqn1RQ4 assistir para entender melhor como enviar fotos etc..-->
	</div>
	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<li>
					<a href="produto.php?imagem=img/produtos/foto1-verde.png">
						<figure class="novidades">
							
							<form method="post" action="seu_script_php.php">
							<img src="img/produtos/miniatura1.png">
								<button type="submit" name="valor" value="Fuzz Cardigan">Enviar</button>
								<figcaption type="txt">Fuzz Cardigan por R$ 129,90</figcaption>
							</form>
						</figure>
					</a>

				</li>

				<li>
					<a href="produto.php?imagem=img/produtos/foto2-verde.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura2.png">
							<a href="checkout.php?txt=Fuzz Cardigan por R$ 129,90">Fuzz Cardigan por R$ 129,90</a>

						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/foto3-azul.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura3.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/foto4-verde.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura4.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/foto5-rosa.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura5.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/foto10-azul.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura6.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/foto3-verde.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura10.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/foto11-azul.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura11.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura13.png">
						<figure class="novidades">
							<img src="img/produtos/miniatura13.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button" class="button">Mostrar mais</button>

		</section>

		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura7.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura7.png" alt="Imagem Verde">
							<figcaption>Fuzz Cardigan por R$ 120,90</figcaption>
						</figure>
					</a>

				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura8.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura8.png">
							<figcaption>Fuzz Cardigan por R$ 120,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura9.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura9.png">
							<figcaption>Fuzz Cardigan por R$ 120,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura10.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura10.png">
							<figcaption>Fuzz Cardigan por R$ 120,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura11.png">
						<a href="produto.php?imagem=img/produtos/miniatura10.png">
							<figure class=" mais-vendidos">
								<img src="img/produtos/miniatura11.png">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura12.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura12.png">
							<a href="produto.php?texto=Fuzz Cardigan por R$ 129,90"></a>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura13.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura13.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura14.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura14.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php?imagem=img/produtos/miniatura15.png">
						<figure class=" mais-vendidos">
							<img src="img/produtos/miniatura15.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button">Mostrar mais</button>

		</section>
	</div>



	<?php $rodape = "rodape";
	include("./php/rodape.php"); ?>

	<script src="js/app.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/banner.js"> </script>

	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/novidades.js"></script>
	<script type="text/javascript" src="js/verificarImg.js"></script>
	<script type="text/javascript" src="js/converteMoeda.js"></script>
	<script type="text/javascript" src="js/testaConversao.js"></script>
	<script type="text/javascript" src="js/darkMode.js"></script>

</body>
<!--Criado por Renato Marques david-->

</html>