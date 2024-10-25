<head>
    <link rel="stylesheet" href="./../../src/views/css/header.css"> <!-- Adicione seu CSS aqui -->
</head>
<div class="logo">
    <a href="./menu.php"><img src="./../../src/views/images/QiPlanta.png" alt="Logo do Marketplace"></a> <!-- Substitua pelo caminho do seu logo -->
</div>
<nav>
    <ul>
        <li><a href="./../index.php">Minha Conta</a></li>
        <li><a href="./../../src/views/Produtos.php">Produtos</a></li>
        <li><a href="./../../src/views/categorias.php">Categorias</a></li>
        <li><a href="../../../src/views/sobre.php">Sobre Nós</a></li>
        <li><a href="./../../src/views/contato.php">Contato </a></li>
        <li><a href="./../../src/views/carrinho.php">Carrinho</a></li>
    </ul>
</nav>
<div class="search-bar">
    <form action="pesquisa.php" method="GET">
        <input class="input-busca" type="text" name="query" placeholder="Pesquisar produtos..." required>
        <button type="submit">Buscar</button>
    </form>
</div>