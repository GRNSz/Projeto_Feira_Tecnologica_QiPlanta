<head>
    <link rel="stylesheet" href="./css/menu.css"> <!-- Adicione seu CSS aqui -->
</head>
    <div class="logo">
        <a href="./../../src/views/menu.php"><img src="./../../src/views/images/QiPlanta.png" alt="Logo do Marketplace"></a> <!-- Substitua pelo caminho do seu logo -->
</div>
<nav>
    <ul>
        <li><a href="./../index.php">Minha Conta</a></li>
        <li><a href="./../../src/views/Produtos.php">Produtos</a></li>
        <li><a href="./../../src/views/categorias.php">Categorias</a></li>
        <li><a href="./../../src/views/sobre.php">Sobre Nós</a></li>
        <li><a href="./../../src/views/contato.php">Contato </a></li>
        <li><a href="./../../src/views/carrinho.php">Carrinho</a></li>
        <li><a href="./../../src/views/cadastroproduto.php">Cadastre um Produto</a></li>
    </ul>
</nav>
    <div class="search-bar">
        <form action="./../controllers/mainController.php?r=BuscaProduto&action=index" method="GET">
            <input class="input-busca" type="text" name="query" placeholder="Pesquisar produtos..." required>
            <button type="submit" onclick="barraBuscar()">Buscar</button>
            <div id="busca"></div>
        </form>
</div>