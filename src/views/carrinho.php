<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/carrinho.css">
</head>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <main>
        <script src="./../javascript/carrinhocompras.js"></script>
        <div class="div-carrinho-compras">
            <center>
                <h1>Meu carrinho de compras!</h1>
            </center>
            <div class="lista-produto-carrinho">
                <center>
                    <h2>Esqueceu alguma coisa? Não se preocupe.<br> Pode voltar lá! Estaremos aqui</h2>
                </center>
                <ul class="lista-carrinho" style="list-style: none;">
                    <li>
                        <div class="produto" id="P1">
                            <img src="./images/liriodapaz.png" style="size: 15px; border-radius:50%">
                            <h3 id="carrinho-nomeplanta">Lírio-da-paz</h3>
                            <div class="preco">
                                <p>R$ <b id="preco" value="30.00">30</b></p>
                            </div>

                            <div class="quantidade">
                                
                            <!-- Novo -->
                            <label>Quantidade:</label> <br>
                                <input class="input-valor" type="number" id="quanti1" value="0" min="0" oninput="quanti1.value=value" onchange="quantidadep1.value=value">
                            <br>
                                <input type="range" name="quantidadep1" id="quantidadep1" value="0" min="0" max="200" oninput="quanti1.value=value">
                            
                            
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <?php include("footer.php") ?>
    </footer>
</body>

</html>