<!DOCTYPE html>
<html>
	<title>

			<?php $links ="links css js";
		include("./php/links.php");?>
	</title>


<body>
	<header class="container">
		<h1>
			<img src="img/logo.png" alt="Mirror Fashion">
		</h1>

		<p class="sacola">
			Nenhum item na sacola de compras
		</p>
		<nav class="navbar navbar-default">
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
	</header>
	<div class="row">
		<fieldset class="col-sm-8 col-lg-9">

			<div class="col-sm-8  col-lg-9">
					<section class="busca">
						<h2>Busca</h2>
						<form>
							<input type="search" />
							<input type="image" src="img/busca.png" />
						</form>
					</section>

				<section class="menu-departamentos">
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

				<img src="img/destaque-home.png" alt="Promoção: Big City Night">
			</div>
		</fieldset>
	</div>
	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura4.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura6.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura11.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura13.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button">Mostrar mais</button>
		</section>

		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura7.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura8.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura9.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura11.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura12.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura13.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura14.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura15.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button">Mostrar mais</button>
		</section>
	</div>

	<footer>
		<div class="container">
			<img src="img/logo-rodape.png" alt="Logo Mirror Fashion" />

			<ul class="social">
				<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
				<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
				<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
			</ul>
		</div>
	</footer>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</body>

</html>