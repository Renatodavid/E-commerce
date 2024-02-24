<!doctype html>
 <html>
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width">
         <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/open-iconic-bootstrap.css">
         <link rel="stylesheet" href="css/checkout.css">

         <title>Checkout Mirror Fashion</title>
     </head>
     <body>
        <div class="jumbotron jumbotron-fluid">
            
            <div class="container">
                <h1 class="display-4">Ótima escolha!</h1>
                <p class="lead">Obrigado por comprar na Mirror Fashion!
                    Preencha seus dados para efetivar a compra.
                </p>
            </div>
        </div>

        <div class="container" >
            <div class="row">
            
            <div class="col-md-4">
                
                <div class="card-header">
                <h2>Sua compra</h2>
            </div>

        <div class="panel-body ">
        <?php $nome = $_POST["nome"];
                 $cor = $_POST["cor"]; 
                    $caminhoImagem = "img/produtos/foto1" . $nome . "-" . $cor . ".png";?>
             <img src="<?php echo $caminhoImagem; ?>" class="img-thumbnail img-responsive">

            <dl action="checkout.php">
                <dt>Produto</dt>
                <dd><?= $_POST['nome']  ?></dd>

                <dt>Preço</dt>
                <dd><?= $_POST['preco']  ?></dd>

                <dt>Cor</dt>
                <dd><?= $_POST['cor'] ?></dd>

                <dt>Tamanho</dt>
                <dd><?= $_POST['tamanho'] ?></dd>

            </dl>
            
        </div>

            <div class="card mb-3" method="POST">
                <div class="card-body">
               
                  <div class="form-group">
                    <label for="qt">Quantidade:</label>
                    <input type="number"name="qt" min="1" max="99" value="1" class="form-control">
                   

                  </div>
               
                  <div class="form-group">
                    <label for="total">Total</label>
                    <output for="total" name="total" class="form-control">
                    <dd><?=$_POST['total'] ?></dd>

                       
                    </output>
                  </div>
               
                </div>
               </div>

        </div>
            
        <form action="checkout.php" method="post" class="col-md-8">
                <div class="row">
                    <fieldset class="col-lg-6">
                    <legend>Dados pessoais</legend>
           
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                    </div>
           
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"placeholder="email@exemplo.com">
                    </div>
           
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required> 
                    </div>
           
                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="newsletter"
                                        value="sim" checked>
                        <label class="custom-control-label" for="newsletter">
                            Quero receber Newsletter da Mirror Fashion
                        </label>
                    </div>
                </fieldset>
                <div class="col-lg-6"></div>
                <fieldset>
                    <legend>Cartão de crédito</legend>
               
                    <div class="form-group">
                        <label for="numero-cartao">Número - CVV</label>
                        <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                    </div>
               
                    <div class="form-group">
                        <label for="bandeira-cartao">Bandeira</label>
                        <select class="custom-select" id="bandeira-cartao">
                            <option disabled selected>Selecione uma opção...</option>
                            <option value="master">MasterCard</option>
                            <option value="visa">VISA</option>
                            <option value="amex">American Express</option>
                        </select>
                    </div>
               
                    <div class="form-group">
                        <label for="validade-cartao">Validade</label>
                        <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary mb-3">
                    <span class="oi oi-thumb-up"></span>
                    Confirmar Pedido
                </button>
            </div>
     </body>
     
     <script type="text/javascript" src="js/jquery.js"> </script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
    <script type="text/javascrpit" src="js/validarEmail.js"></script>

    <script type="text/javascript" src="js/converteMoeda.js"></script>
    <script type="text/javascript" src="js/testaConversao.js"></script>
    <script type="text/javascrpit" src="js/total.js"></script>

    </html>