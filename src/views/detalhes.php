<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lírio-da-paz | Detalhes do Produto</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="css/detalhes.css">
</head>

<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <main>
        <section class="detalhes-produto">
            <div class="produto">
                <div class="produto-imagem">
                    <img src="images/liriodapaz.png" alt="Lírio-da-paz" class="produto-img">
                </div>

                <div class="produto-info">
                    <h1 class="produto-titulo">Lírio-da-paz</h1>

                    <div class="preco">
                        R$ 30,00
                    </div>

                    <div class="info-section">
                        <h3>Descrição</h3>
                        <p>Além de purificar o ar, o Lírio-da-paz é ótimo para ambientes internos devido à sua tolerância à sombra e baixa necessidade de água. É uma planta perfeita para trazer tranquilidade ao lar.</p>
                    </div>

                    <div class="info-section">
                        <h3>Cuidados Especiais</h3>
                        <p>Rega moderada, preferencialmente quando o solo estiver seco. Manter em locais com sombra ou luz indireta.</p>
                    </div>

                    <div class="info-section">
                        <h3>Categoria</h3>
                        <p>Plantas de Interior</p>
                    </div>

                    <button class="adicionar-carrinho" onclick="window.location.href='carrinho.php?add=1'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                        </svg>
                        Adicionar ao Carrinho
                    </button>
                </div>
            </div>
        </section>

        <div class="produto-video">
            <h2>Conheça mais sobre o Lírio-da-paz</h2>
            <div class="video-container">
                <!-- Restaurando o vídeo indexado original -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FR_qHmrIh6E?si=5ZFKbOxEFBGXGLGy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </main>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
    <script src="./javascript/carrinhocompras.js"></script>
</body>

</html>