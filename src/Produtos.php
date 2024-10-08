<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - Produtos</title>
    <link rel="stylesheet" href="views/css/menu.css"> <!-- Adicione seu CSS aqui -->
</head>

<body>

    <?php
        include "header.php";
        include "footer.php";
        include "Cadastrar.php";
        include "TelaCadastro.php";
    ?>

    <header>
        <div class="logo">
            <a href="/src/menu.php"><img src="views/images/QiPlanta.png" alt="Logo do Marketplace"></a>
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

    <section class="anuncios">
        <h2>Nossos Produtos</h2>
        
        <div class="produtos-container">
            <div class="produto">
                <img src="views/images/liriodapaz.png" alt="Lírio-da-paz">
                <h3>Lírio-da-paz</h3>
                <p>Além de purificar o ar, é ótimo para ambientes internos por sua tolerância à sombra e baixa necessidade de água.</p>
                <p><strong>Preço: R$ 30,00</strong></p>
                <button><a href="/src/views/detalhes.php">Ver Detalhes</a></button>
            </div>
            
            <div class="produto">
                <img src="views/images/jiboia.png" alt="Jibóia">
                <h3>Jibóia</h3>
                <p>Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.</p>
                <p><strong>Preço: R$ 25,00</strong></p>
                <button onclick="window.location.href='detalhes.php?id=2'">Ver Detalhes</button>
            </div>
            
            <div class="produto">
                <img src="views/images/espadadesaojorge.png" alt="Espada-de-São-Jorge">
                <h3>Espada-de-São-Jorge</h3>
                <p>Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.</p>
                <p><strong>Preço: R$ 35,00</strong></p>
                <button onclick="window.location.href='detalhes.php?id=3'">Ver Detalhes</button>
            </div>

            <!-- Adicione mais produtos conforme necessário -->
        </div>
    </section>

    <footer>
        <p>© 2024 Marketplace - Todos os direitos reservados.</p>
    </footer>

</body>

</html>
