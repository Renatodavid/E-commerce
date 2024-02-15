<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Mirror Fashion</title>
</head>
<body>
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
    <dd><?=$_POST['preco']?></dd>
    

</body>
</html>
