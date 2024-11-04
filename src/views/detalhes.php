<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - Lírio-da-paz</title>
    <link rel="stylesheet" href="css/detalhes.css"> <!-- Adicione seu CSS aqui -->
</head>

<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <section class="detalhes-produto">
        <div class="produto">
            <center>
                <h1>Lírio-da-paz</h1>
            </center>
            <img src="images/liriodapaz.png" alt="Lírio-da-paz" class="produto-img">

            <div class="produto-detalhes">
                <p><strong>Preço:</strong><b id="preco-lirio"> R$ 30,00</b></p>
                <p><strong>Descrição:</strong> Além de purificar o ar, o Lírio-da-paz é ótimo para ambientes internos devido à sua tolerância à sombra e baixa necessidade de água. É uma planta perfeita para trazer tranquilidade ao lar.</p>
                <p><strong>Cuidados:</strong> Rega moderada, preferencialmente quando o solo estiver seco. Manter em locais com sombra ou luz indireta.</p>
                <p><strong>Categoria:</strong> Plantas de Interior</p>

                <button class="adicionar-carrinho" onclick="window.location.href='carrinho.php?add=1'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>   <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>    </svg>
                    Adicionar ao Carrinho
                </button>
            </div>

            <div class="produto-video">
                <h2>Conheça mais sobre o Lírio-da-paz</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FR_qHmrIh6E" title="Vídeo sobre Lírio-da-paz" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="produto-avaliacoes">
                <h3>Avaliações dos Clientes</h3>
                <div class="avaliacao">
                    <p><strong>João Silva:</strong> "Uma planta maravilhosa para quem quer decorar o interior da casa sem se preocupar muito com manutenção."</p>
                </div>
                <div class="avaliacao">
                    <p><strong>Maria Fernanda:</strong> "Adoro o meu Lírio-da-paz! Ele realmente faz uma diferença na qualidade do ar."</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
    <script src="./javascript/carrinhocompras.js"></script>
</body>

</html>