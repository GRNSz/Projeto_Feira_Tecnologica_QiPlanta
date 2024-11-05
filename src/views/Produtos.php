<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Produtos</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/menu.css"> <!-- Adicione seu CSS aqui -->
    <script src="./javascript/detalhesProdutos.js"></script>
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
                        <button onclick="window.location.href='detalhes.php'"><a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>  Ver Detalhes</a>
                        </button>
                    </center>
                </div>

    <div class="produto">
        <center>
            <img src="./images/jiboia.png" alt="Jiboia">
            <h3>Jiboia</h3>
            <p>Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.</p>
                        <p><strong>Preço: R$ 25,00</strong></p>
                        <button onclick="detalhes()">Ver Detalhes</button>
                        <div id="verDetalhes"></div>
        </center>
    </div>

                <div class="produto">
                    <center>
                        <img src="./images/espadadesaojorge.png" alt="Espada-de-São-Jorge">
                        <h3>Espada-de-São-Jorge</h3>
                        <p>Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.</p>
                        <p><strong>Preço: R$ 35,00</strong></p>
                        <button onclick="detalhes()">Ver Detalhes</button>
                        <div id="verDetalhes"></div>
                    </center>
                </div> <!-- Adicione mais produtos conforme necessário -->

                <div class="produto">
                    <center>
                        <img src="./images/buqueRosas.png" alt="Buquê de Rosas">
                        <h3>Buquê com 12 Rosas Vermelhas</h3>
                        <p>Lindo Buquê com doze rosas vermelhas nacionais. Ideal para presentear alguém especial.</p>
                        <p><strong>Preço: R$ 90,00</strong></p>
                        <button onclick="detalhes()">Ver Detalhes</button>
                        <div id="verDetalhes"></div>
                    </center>
                </div>

                <div class="produto">
                    <center>
                        <img src="./images/girassol.png" alt="Buquê de Rosas">
                        <h3>Flor Girassol</h3>
                        <p>O girassol é uma planta alta com flores grandes e amarelas que seguem o movimento do sol. Suas sementes são comestíveis e usadas para produzir óleo. É símbolo de alegria e luz.</p>
                        <p><strong>Preço: R$ 13,00</strong></p>
                        <button onclick="detalhes()">Ver Detalhes</button>
                        <div id="verDetalhes"></div>
                    </center>
                </div>

                <div class="produto">
                    <center>
                        <img src="./images/gerbera.png" alt="Buquê de Rosas">
                        <h3>Vaso de Gérbera</h3>
                        <p>O girassol é uma planta alta com flores grandes e amarelas que seguem o movimento do sol. Suas sementes são comestíveis e usadas para produzir óleo. É símbolo de alegria e luz.</p>
                        <p><strong>Preço: R$ 13,00</strong></p>
                        <button onclick="detalhes()">Ver Detalhes</button>
                        <div id="verDetalhes"></div>
                    </center>
                </div>

            </div>
        </section>
    </main>
    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>