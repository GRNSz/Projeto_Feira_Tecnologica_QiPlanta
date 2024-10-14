<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Marketplace</title>
    <link rel="stylesheet" href="views/css/categorias.css"> <!-- Adicione o CSS personalizado -->
</head>

<body>
    <header>
        <?php include("./views/header.php"); ?>
    </header>

    <main>
        <section class="categorias">
            <h2 class="titulo">Explore Nossas Categorias</h2>
            <div class="grid-categorias">
                <div class="categoria">
                    <img src="views/images/plantas.png" alt="Plantas" class="categoria-img">
                    <h3>Plantas</h3>
                    <p>Variedade de plantas para alegrar seu espaço.</p>
                    <a href="produtos.php?categoria=plantas" class="btn">Ver Produtos</a>
                </div>

                <div class="categoria">
                    <img src="views/images/flores.png" alt="Flores" class="categoria-img">
                    <h3>Flores</h3>
                    <p>Flores lindas para todas as ocasiões.</p>
                    <a href="produtos.php?categoria=flores" class="btn">Ver Produtos</a>
                </div>

                <div class="categoria">
                    <img src="views/images/ferramentas.png" alt="Ferramentas" class="categoria-img">
                    <h3>Ferramentas</h3>
                    <p>Equipamentos essenciais para cuidar do seu jardim.</p>
                    <a href="produtos.php?categoria=ferramentas" class="btn">Ver Produtos</a>
                </div>

                <div class="categoria">
                    <img src="views/images/vasos.png" alt="Vasos" class="categoria-img">
                    <h3>Vasos</h3>
                    <p>Estilosos e funcionais para suas plantas.</p>
                    <a href="produtos.php?categoria=vasos" class="btn">Ver Produtos</a>
                </div>

                <!-- Adicione mais categorias conforme necessário -->
            </div>
        </section>
    </main>

    <footer>
        <?php include("./views/footer.php"); ?>
    </footer>
</body>

</html>