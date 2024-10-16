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
                <ul class="lista-carrinho">
                    <li>
                        <div class="produto">
                            <img src="./images/espadadesaojorge.png" style="size: 15px; border-radius:50%">
                            <h3 id="carrinho-nomeplanta">Espada de são Jorge</h3>

                            <div class="quantidade">
                                <script src="./javascript/carrinhocompras.js"></script>
                                <label>Quantidade:</label> <br>
                                <input type="button" id="btn1-" value="-" onclick="decrementarP1()">
                                <input type="number" id="quantidade1" value="0">
                                <input type="button" id="btn1+"value="+" onclick="incrementarP1()">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="produto">
                            b
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
    
</body>
</html>