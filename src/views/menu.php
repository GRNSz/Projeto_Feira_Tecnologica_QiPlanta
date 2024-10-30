<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - A Natureza ao Seu Alcance</title>
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
                <h2 style="font-size: 40px;">Bem-vindo à Central da Vida!</h2>
                <p style="font-size: 20px; color: #555;">Transforme seu ambiente com o poder das plantas. Aqui, cada espécie tem uma história para contar.</p>
            </center>

            <div class="produto">
                <center>
                    <img src="./images/liriodapaz.png" alt="Lírio-da-paz">
                    <h3>Lírio-da-paz - A Guardiã do Ar</h3>
                    <p>Com sua elegância, o Lírio-da-paz não só purifica o ambiente, mas também simboliza paz e harmonia. Ótima para interiores, traz tranquilidade ao seu lar.<br>
                        Descubra como essa planta mudou a história da vida na Terra!</p>
                    <button onclick="window.location.href='./detalhes.php';">Ver Detalhes</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/jiboia.png" alt="Jibóia">
                    <h3>Jibóia - A Trepadeira da Resiliência</h3>
                    <p>Resistente e adaptável, a Jibóia prospera em qualquer ambiente. Sua presença é sinônimo de flexibilidade e renovação do ar. <br>
                        Saiba mais sobre como essa planta inspirou gerações!</p>
                    <button href="./detalhes.php?id=2">Conhecer Vida</button>
                </center>
            </div>

            <div class="produto">
                <center>
                    <img src="./images/espadadesaojorge.png" alt="Espada-de-São-Jorge">
                    <h3>Espada-de-São-Jorge - A Guardiã da Proteção</h3>
                    <p>Com suas folhas imponentes, a Espada-de-São-Jorge é conhecida por sua resistência e poder de purificar o ar. Ideal para quem busca uma conexão espiritual com a natureza.<br>
                        Descubra o poder ancestral dessa planta incrível!</p>
                    <button href="detalhes.php?id=3">Conhecer Vida</button>
                </center>
            </div>
        </section>
    </main>

    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>