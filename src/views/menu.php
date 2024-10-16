<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
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
                <h2 style="font-size: 40px;">Bem vindo à central da vida!</h2>
            </center>
            <div class="produto">
                <center>
                    <img src="./images/liriodapaz.png" alt="Produto 1">
                    <h3>Lírio-da-paz</h3>
                    <p>Além de purificar o ar, é ótimo para ambientes internos por sua tolerância à sombra e baixa necessidade de água.<br> Quer saber mais sobre a importância dessa planta pra história da vida? Clica abaixo!</p>
                    <button href="./detalhes.php">Ver Detalhes</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/jiboia.png" alt="Produto 2">
                    <h3>Jibóia</h3>
                    <p>Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.<br> Quer saber mais sobre a importância dessa planta pra história da vida? Clica abaixo!</p>
                    <button shref="detalhes.php?id=2">Conhecer vida</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/espadadesaojorge.png" alt="Produto 2">
                    <h3>Espada-de-São-Jorge</h3>
                    <p>Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.<br> Quer saber mais sobre a importância dessa planta pra história da vida? Clica abaixo!</p>
                    <button href="detalhes.php?id=3">Conhecer vida</button>
                </center>
            </div><!-- Adicione mais produtos conforme necessário -->
        </section>
    </main>
    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>