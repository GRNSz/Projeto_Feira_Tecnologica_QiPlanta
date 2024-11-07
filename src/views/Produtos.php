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
            <h2>
                Nossos Produtos
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-flower3" viewBox="0 0 16 16">
                    <path d="M11.424 8c.437-.052.811-.136 1.04-.268a2 2 0 0 0-2-3.464c-.229.132-.489.414-.752.767C9.886 4.63 10 4.264 10 4a2 2 0 1 0-4 0c0 .264.114.63.288 1.035-.263-.353-.523-.635-.752-.767a2 2 0 0 0-2 3.464c.229.132.603.216 1.04.268-.437.052-.811.136-1.04.268a2 2 0 1 0 2 3.464c.229-.132.489-.414.752-.767C6.114 11.37 6 11.736 6 12a2 2 0 1 0 4 0c0-.264-.114-.63-.288-1.035.263.353.523.635.752.767a2 2 0 1 0 2-3.464c-.229-.132-.603-.216-1.04-.268z" />
                </svg>
            </h2>
            <div class="produtos-container">
                <div class="produto">
                    <img src="./images/liriodapaz.png" alt="Lírio-da-paz">
                    <h3>Lírio-da-paz</h3>
                    <p>Além de purificar o ar, é ótimo para ambientes internos por sua tolerância à sombra e baixa necessidade de água.</p>
                    <p><strong>R$ 30,00</strong></p>
                    <button onclick="window.location.href='detalhes.php'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        </svg>
                        Ver Detalhes
                    </button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>

</html>