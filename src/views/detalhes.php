<?php
require_once __DIR__ . '/../controllers/ProdutoController.php';

use MeuProjeto\controllers\ProdutoController;

$controller = new ProdutoController();
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$produto = $controller->getDetalhes($id);

if (!$produto) {
    header('Location: Produtos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - <?php echo $produto['nome']; ?></title>
    <link rel="stylesheet" href="/src/views/css/detalhes.css">
    <script src="./javascript/detalhesProdutos.js"></script>
</head>

<body>
    <header>
        <?php include("./header.php"); ?>
    </header>

    <section class="detalhes-produto">
        <div class="produto">
            <center>
                <h1 style="margin-left: 70px;"><?php echo $produto['nome']; ?></h1>
            </center>
            <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>" class="produto-img">
            
            <div class="produto-detalhes">
                <div id="<?php echo $id; ?>"></div>
                <p><strong>Preço:</strong><b id="preco-produto"> R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></b></p>
                <p><strong>Descrição:</strong> <?php echo $produto['descricao']; ?></p>
                <?php if (isset($produto['cuidados'])): ?>
                    <p><strong>Cuidados:</strong> <?php echo $produto['cuidados']; ?></p>
                <?php endif; ?>
                <?php if (isset($produto['categoria'])): ?>
                    <p><strong>Categoria:</strong> <?php echo $produto['categoria']; ?></p>
                <?php endif; ?>

                <button class="adicionar-carrinho" onclick="window.location.href='carrinho.php?add=<?php echo $id; ?>'">
                    Adicionar ao Carrinho
                </button>
            </div>

            <?php if (isset($produto['video'])): ?>
            <div class="produto-video">
                <h2>Conheça mais sobre o <?php echo $produto['nome']; ?></h2>
                <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/<?php echo $produto['video']; ?>" 
                        title="Vídeo sobre <?php echo $produto['nome']; ?>" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>
            <?php endif; ?>

            <?php if (isset($produto['avaliacoes'])): ?>
            <div class="produto-avaliacoes">
                <h3>Avaliações dos Clientes</h3>
                <?php foreach ($produto['avaliacoes'] as $avaliacao): ?>
                    <p><strong><?php echo $avaliacao['cliente']; ?>:</strong> "<?php echo $avaliacao['comentario']; ?>"</p>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <footer>
        <?php include "footer.php"; ?>
    </footer>

    <script src="./javascript/carrinhocompras.js"></script>
</body>

</html>