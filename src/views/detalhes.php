<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - Lírio-da-paz</title>
    <link rel="stylesheet" href="/src/views/css/menu.css"> <!-- Adicione seu CSS aqui -->
</head>

<body>

    <?php
        include "/src/views/header.php";
    ?>

    <header>
        <div class="logo">
            <a href="/src/menu.php"><img src="/src/views/images/QiPlanta.png" alt="Logo do Marketplace"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Login/Cadastre-se</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="contato.php">Contato </a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="pesquisa.php" method="GET">
                <input class="input-busca" type="text" name="query" placeholder="Pesquisar produtos..." required>
                <button type="submit">Buscar</button>
            </form>
        </div>
    </header>

    <section class="detalhes-produto">
        <h1 style="margin-left: 70px;">Lírio-da-paz</h1>
        
        <div class="produto">
            <img src="/src/views/images/liriodapaz.png" alt="Lírio-da-paz" class="produto-img">
            
            <div class="produto-detalhes">
                <p><strong>Preço:</strong> R$ 30,00</p>
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
                    <p><strong>João Silva:</strong> "Uma planta maravilhosa para quem quer decorar o interior da casa sem se preocupar muito com manutenção."</p>
                    <p><strong>Maria Fernanda:</strong> "Adoro o meu Lírio-da-paz! Ele realmente faz uma diferença na qualidade do ar."</p>
                </div>
            </section>
            
        </div>
            <footer>
                <?php include "footer.php"; ?>
            </footer>

</body>

</html>
