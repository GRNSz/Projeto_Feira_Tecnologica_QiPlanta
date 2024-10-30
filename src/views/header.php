<head>
    <link rel="stylesheet" href="./css/menu.css"> <!-- Adicione seu CSS aqui -->
</head>
    <div class="logo">
        <a href="./menu.php"><img src="./images/QiPlanta.png" alt="Logo do Marketplace"></a> <!-- Substitua pelo caminho do seu logo -->
</div>
<nav>
    <ul>
        <li><a href="./../index.php">Minha Conta</a></li>
        <li><a href="./../views/Produtos.php">Produtos</a></li>
        <li><a href="categorias.php">Categorias</a></li>
        <li><a href="./sobre.php">Sobre Nós</a></li>
        <li><a href="contato.php">Contato </a></li>
        <li><a href="./../views/carrinho.php">Carrinho</a></li>
    </ul>
</nav>
    <div class="search-bar">
        <form action="pesquisa.php" method="GET">
            <input class="input-busca" type="text" name="query" placeholder="Pesquisar produtos..." required>
            <button type="submit">Buscar</button>
        </form>
</div>