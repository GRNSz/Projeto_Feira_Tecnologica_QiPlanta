<head>
<link rel="stylesheet" href="views/css/menu.css"> <!-- Adicione seu CSS aqui -->
</head>
<div class="logo">
            <a href="index.php"><img src="./images/QiPlanta.png" alt="Logo do Marketplace"></a> <!-- Substitua pelo caminho do seu logo -->
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