<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Produtos</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/menu.css"> <!-- Adicione seu CSS aqui -->
</head>

<body>
    <header>
        <?php include("./header.php") ?>
    </header>
    <main>
        <section class="anuncios">
            <center>
                <h2>Nossos Produtos</h2>
            </center>
            <div class="produtos-container">
                <div class="produto">
                    <center>
                        <img src="./images/liriodapaz.png" alt="Lírio-da-paz">
                        <h3 id="nomeproduto01">Lírio-da-paz</h3>
                        <p>Além de purificar o ar, é ótimo para ambientes internos por sua tolerância à sombra e baixa necessidade de água.</p>
                        <p><strong>Preço: R$ 30,00</strong></p>
                        <button onclick="window.location.href='detalhes.php?id=2'"><a >Ver Detalhes</a></button>
                    </center>
                </div>

                <div class="produto">
                    <center>
                        <img src="./images/jiboia.png" alt="Jibóia">
                        <h3>Jibóia</h3>
                        <p>Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.</p>
                        <p><strong>Preço: R$ 25,00</strong></p>
                        <button onclick="window.location.href='detalhes.php?id=2'">Ver Detalhes</button>
                    </center>
                </div>

                <div class="produto">
                    <center>
                        <img src="./images/espadadesaojorge.png" alt="Espada-de-São-Jorge">
                        <h3>Espada-de-São-Jorge</h3>
                        <p>Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.</p>
                        <p><strong>Preço: R$ 35,00</strong></p>
                        <button onclick="window.location.href='detalhes.php?id=3'">Ver Detalhes</button>
                    </center>
                </div> <!-- Adicione mais produtos conforme necessário -->
            </div>
        </section>
    </main>
    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>