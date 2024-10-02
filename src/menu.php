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
        <h2>Produtos Anunciados</h2>
        <div class="produto">
            <img src="/caminho/para/imagem1.jpg" alt="Produto 1">
            <h3>Produto 1</h3>
            <p>Descrição do Produto 1</p>
            <p>Preço: R$ 100,00</p>
            <a href="detalhes.php?id=1">Ver detalhes</a>
        </div>
        <div class="produto">
            <img src="/caminho/para/imagem2.jpg" alt="Produto 2">
            <h3>Produto 2</h3>
            <p>Descrição do Produto 2</p>
            <p>Preço: R$ 150,00</p>
            <a href="detalhes.php?id=2">Ver detalhes</a>
        </div>
        <!-- Adicione mais produtos conforme necessário -->
    </section>


</body>

</html>