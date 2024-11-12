<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/carrinho.css">
    <script src="./../javascript/carrinhocompras.js"></script>
</head>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>
    <main>
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
                        <div class="produto">

                        <center>
                            <img src="./images/liriodapaz.png" alt="Lirio-da-Paz" size="15px;">
                            <h3 id="carrinho-nomeplanta">Lírio da Paz</h3>
                            
                            <div class="preco">
                                <p>R$ <strong id="preco" value="30.00">30,00</strong></p>
                            </div> <br>
                            <div class="quantidade">
                                <label>Quantidade:</label>    
                                <button type="button" class="btn-decrementar" onclick="decrementar_p1()">-</button>
                                <input type="number" class="input-quantidadeProduto" onchange="Quantidade-p1.value" name="Quantidade-produto" value="1" min="0" id="Quantidade-p1">
                                <button type="button" class="btn-incrementar" onclick="incrementar_p1()">+</button>
                                
                            </div>
                        </center>
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