<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link rel="stylesheet" href="views/css/menu.css"> <!-- Adicione seu CSS aqui -->
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="views/images/QiPlanta.png" alt="Logo do Marketplace"></a> <!-- Substitua pelo caminho do seu logo -->
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="contato.php">Contato </a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="pesquisa.php" method="GET">
                <input type="text" name="query" placeholder="Pesquisar produtos..." required>
                <button type="submit">Buscar</button>
            </form>
        </div>
    </header>

    <section class="anuncios">
        <h2>Melhores opções pro seu lar...</h2>
        <div class="produto">
            <img src="views/images/liriodapaz.png" alt="Produto 1">
            <h3>Lírio-da-paz</h3>
            <p>Além de purificar o ar, é ótimo para ambientes internos por sua tolerância à sombra e baixa necessidade de água.</p>
            <p>Quer saber mais sobre a importância dessa planta pra história da vida? Clica abaixo!</p>
            <button href="detalhes.php?id=1">Conhecer vida</button>
        </div>
        <div class="produto">
            <img src="views/images/jiboia.png" alt="Produto 2">
            <h3>Jibóia</h3>
            <p>Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.</p>
            <p>Quer saber mais sobre a importância dessa planta pra história da vida? Clica abaixo!</p>
            <button shref="detalhes.php?id=2">Conhecer vida</button>
        </div>
        <div class="produto">
            <img src="views/images/espadadesaojorge.png" alt="Produto 2">
            <h3>Espada-de-São-Jorge</h3>
            <p>Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.</p>
            <p>Quer saber mais sobre a importância dessa planta pra história da vida? Clica abaixo!</p>
            <button href="detalhes.php?id=3">Conhecer vida</button>
        </div>
        <!-- Adicione mais produtos conforme necessário -->
    </section>


</body>

</html>