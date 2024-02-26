<div class="container">
    <h2>Premium</h2>  
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100px; height: 100px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            // Array de URLs das imagens
            $imagens = array(
                "img/produtos/foto1-verde.png",
                "img/produtos/foto2-verde.png",
                "img/produtos/foto3-verde.png"
            );

            // Contador para os indicadores
            $contador = 0;

            // Loop para criar os indicadores
            foreach ($imagens as $imagem) {
                echo '<li data-target="#myCarousel" data-slide-to="' . $contador . '" class="' . ($contador === 0 ? 'active' : '') . '"></li>';
                $contador++;
            }
            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
            // Resetando o contador
            $contador = 0;

            // Loop para criar os slides do carrossel
            foreach ($imagens as $imagem) {
                echo '<div class="item ' . ($contador === 0 ? 'active' : '') . '">
                        <img src="' . $imagem . '" alt="Imagem ' . ($contador + 1) . '" class="carousel-img">
                      </div>';
                $contador++;
            }
            ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Próxima</span>
        </a>
    </div>
</div>