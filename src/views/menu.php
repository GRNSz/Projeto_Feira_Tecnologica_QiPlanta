<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - A Natureza ao Seu Alcance</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap -->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="manifest" href="./json/manifest.json">
    <script src="./../../src/javascript/ServWorker.js"></script>
</head>

<body>
    <header>
        <?php include("./header.php") ?>
    </header>

    <main>
        <br>
        <center>
            <h2 style="font-size: 40px;">Bem-vindo à Central da <strong style="color:green">Vida</strong>!</h2>
            <p style="font-size: 20px; color: #555;">Transforme seu ambiente com o poder das plantas. Aqui, cada espécie tem uma história para contar.</p>
        </center>

        <!-- <div class="carousel">

            <div id="carouselExampleInterval" style=" background-color: transparent; color: black;" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <center>
                        <div class="carousel-item active" data-bs-interval="2000">
                            <a class="a_carousel" href="./detalhes.php?id=1">

                                <img src="./images/banner1.png" class="img-carousel" alt="produto-carousel">

                            </a>
                        </div>

                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./images/banner2.png" class="img-carousel" alt="produto-carousel">
                        </div>

                        <div class="carousel-item">
                            <img src="./images/banner3.png" class="img-carousel" id="test" alt="produto-carousel">
                        </div>
                    </center>
                </div>
            </div>

            <button class="carousel-control-prev" style="background-color: rgba(76, 175, 80, 0.3);" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" style="background-color: rgba(76, 175, 80, 0.3)" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->

        <section class="anuncios">

            <div class="produto">
                <center>
                    <img src="./images/liriodapaz.png" alt="Lírio-da-paz">
                    <h3>Lírio-da-paz <br> A Guardiã do Ar</h3>
                    <p>Com sua elegância, o Lírio-da-paz não só purifica o ambiente, mas também simboliza paz e harmonia. Ótima para interiores, traz tranquilidade ao seu lar.<br>
                        Descubra como essa planta mudou a história da vida na Terra!</p>
                    <button onclick="window.location.href='./detalhes.php?id=1';">Ver Produto</button>
                </center>
            </div>

            <div class="produto" id="plantas">
                <center>
                    <img src="./images/jiboia.png" alt="Jibóia">
                    <h3>Jibóia <br> A Trepadeira da Resiliência</h3>
                    <p>Resistente e adaptável, a Jibóia prospera em qualquer ambiente. Sua presença é sinônimo de flexibilidade e renovação do ar. <br>
                        Saiba mais sobre como essa planta inspirou gerações!</p>
                    <button onclick="window.location.href='./detalhes.php?id=2';">Ver Produto</button>
                </center>
            </div>

            <div class="produto" id="plantas">
                <center>
                    <img src="./images/espadadesaojorge.png" alt="Espada-de-São-Jorge">
                    <h3>Espada de São Jorge <br> A Guardiã da Proteção</h3>
                    <p>Com suas folhas imponentes, a Espada-de-São-Jorge é conhecida por sua resistência e poder de purificar o ar. Ideal para quem busca uma conexão espiritual com a natureza.<br>
                        Descubra o poder ancestral dessa planta incrível!</p>
                    <button onclick="window.location.href='./detalhes.php?id=3';">Ver Produto</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/vassoura.png" alt="Vassoura-para-grama">
                    <h3>Vassoura para Grama</h3>
                    <p>A vassoura para grama é ideal para varrer folhas e detritos em jardins e áreas externas. Com cerdas resistentes e design ergonômico, oferece conforto e eficiência na limpeza de gramados e calçadas.</p>
                    <button onclick="window.location.href='./detalhes.php?id=7';">Ver Produto</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/enxadinha.png" alt="enxadinha-para-jardim">
                    <h3>Enxadinha para Jardim</h3>
                    <p>A enxadinha de jardim é perfeita para capinar, aerar e preparar o solo. Com lâmina afiada e cabo confortável, é ideal para trabalhos de precisão em canteiros e áreas pequenas. Essencial para manter o jardim bem cuidado.</p>
                    <button onclick="window.location.href='./detalhes.php?id=9';">Ver Produto</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/vasoTransparente.png" alt="vaso-transparente">
                    <h3>Vaso Transparente</h3>
                    <p>O vaso possui um design inspirado nas plantas carnívoras Nepenthes. Com seu formato único e elegante, é perfeito para destacar tulipas e outros arranjos, adicionando um toque moderno e sofisticado ao ambiente.</p>
                    <button onclick="window.location.href='./detalhes.php?id=10';">Ver Produto</button>
                </center>
            </div>

        </section>
    </main>

    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>