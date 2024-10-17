<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Carrinho</title>
        <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    </head>
    
    <body>
        <header>
            <?php include('header.php'); ?>
        </header>
        <main>
            <script src="./javascript/carrinhocompras.js"></script>
            <Div class="div-carrinho-compras">
            <center>
                <h2>Meu carrinho de compras:</h2>
                <br>
                <p>Aqui onde é possivel gerenciar seu carrinho de compras</p>
            </center>
            <div class="lista-produto-carrinho">
                <center>
                    <h2>lista de compras:</h2>
                </center>
                <ul class="lista-carrinho" style="list-style: none;">
                    <li>
                        <div class="produto" id="P1">
                            <img src="./images/liriodapaz.png" style="size: 15px; border-radius:50%">
                            <h3 id="carrinho-nomeplanta">Lírio-da-paz</h3>

                            <div class="quantidade">
                                    <label>Quantidade:</label> <br>
                                    <input type="button" id="btn1-" value="-" onclick="decrementarP1()">
                                    <input type="number" id="quantidade1" value="1">
                                    <input type="button" id="btn1+" value="+" onclick="incrementarP1()">
                                </div>
                                <div class="escolha">
                                    <button onclick="deletarP1()">Excluir</button>
                                    <button>Finalizar</button>
                                </div>
                            </div>
                    </li>
                    <li>
                        <div class="produto" id="P2">
                            
                        </div>
                    </li>
                    <li>
                        <div class="produto">
                            c
                        </div>
                    </li>
                </ul>
            </div>
        </Div>
    </main>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>

</html>