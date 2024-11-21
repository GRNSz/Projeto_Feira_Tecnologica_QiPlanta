<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - A Natureza ao Seu Alcance</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/menu.css"> <!-- Adicione seu CSS aqui -->
    <link rel="manifest" href="./json/manifest.json">
    <script src="./../../src/javascript/ServWorker.js"></script>
</head>

<body>
    <header>
        <?php include("./header.php") ?>
    </header>

    <main>
        <center>
            <h2 style="font-size: 40px;">Bem-vindo à Central da <strong style="color:green">Vida</strong>!</h2>
            <p style="font-size: 20px; color: #555;">Transforme seu ambiente com o poder das plantas. Aqui, cada espécie tem uma história para contar.</p>
        </center>
        <section class="anuncios">

            <div class="produto">
                <center>
                    <img src="./images/liriodapaz.png" alt="Lírio-da-paz">
                    <h3>Lírio-da-paz <br> A Guardiã do Ar</h3>
                    <p>Com sua elegância, o Lírio-da-paz não só purifica o ambiente, mas também simboliza paz e harmonia. Ótima para interiores, traz tranquilidade ao seu lar.<br>
                        Descubra como essa planta mudou a história da vida na Terra!</p>
                    <button onclick="window.location.href='./produtos.php';">Ver Produtos</button>
                </center>
            </div>

            <div class="produto" id="plantas">
                <center>
                    <img src="./images/jiboia.png" alt="Jibóia">
                    <h3>Jibóia <br> A Trepadeira da Resiliência</h3>
                    <p>Resistente e adaptável, a Jibóia prospera em qualquer ambiente. Sua presença é sinônimo de flexibilidade e renovação do ar. <br>
                        Saiba mais sobre como essa planta inspirou gerações!</p>
                    <button onclick="window.location.href='./produtos.php';">Ver Produtos</button>
                </center>
            </div>

            <div class="produto" id="plantas">
                <center>
                    <img src="./images/espadadesaojorge.png" alt="Espada-de-São-Jorge">
                    <h3>Espada de São Jorge <br> A Guardiã da Proteção</h3>
                    <p>Com suas folhas imponentes, a Espada-de-São-Jorge é conhecida por sua resistência e poder de purificar o ar. Ideal para quem busca uma conexão espiritual com a natureza.<br>
                        Descubra o poder ancestral dessa planta incrível!</p>
                    <button onclick="window.location.href='./produtos.php';">Ver Produtos</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/vassoura.png" alt="Vassoura-para-grama">
                    <h3>Vassoura para Grama</h3>
                    <p>A vassoura para grama é ideal para varrer folhas e detritos em jardins e áreas externas. Com cerdas resistentes e design ergonômico, oferece conforto e eficiência na limpeza de gramados e calçadas.</p>
                    <button onclick="window.location.href='./produtos.php';">Ver Produtos</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/enxadinha.png" alt="enxadinha-para-jardim">
                    <h3>Enxadinha para Jardim</h3>
                    <p>A enxadinha de jardim é perfeita para capinar, aerar e preparar o solo. Com lâmina afiada e cabo confortável, é ideal para trabalhos de precisão em canteiros e áreas pequenas. Essencial para manter o jardim bem cuidado.</p>
                    <button onclick="window.location.href='./produtos.php';">Ver Produtos</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/vasoTransparente.png" alt="vaso-transparente">
                    <h3>Vaso vasoTransparente</h3>
                    <p>O vaso possui um design inspirado nas plantas carnívoras Nepenthes. Com seu formato único e elegante, é perfeito para destacar tulipas e outros arranjos, adicionando um toque moderno e sofisticado ao ambiente.</p>
                    <button onclick="window.location.href='./produtos.php';">Ver Produtos</button>
                </center>
            </div>

        </section>
    </main>

    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>