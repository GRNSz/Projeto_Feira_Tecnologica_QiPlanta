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

                <button class="adicionar-carrinho" onclick="window.location.href='carrinho.php?add=1'">Adicionar ao Carrinho</button>
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