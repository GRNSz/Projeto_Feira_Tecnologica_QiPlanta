<?php
// Importação do controlador de produtos
require_once __DIR__ . '/../controllers/ProdutoController.php';

// Definição do namespace para usar o controlador
use MeuProjeto\controllers\ProdutoController;

// Inicialização do controlador e obtenção do ID do produto da URL
$controller = new ProdutoController();
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$produto = $controller->getDetalhes($id);

// Redirecionamento caso o produto não seja encontrado
if (!$produto) {
    header('Location: Produtos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Meta tags e configurações básicas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - <?php echo $produto['nome']; ?></title>
    <link rel="" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="./css/detalhes.css">
</head>

<body>
    <header>
        <?php include("./header.php"); ?>
    </header>

    <section class="detalhes-produto">
        <div class="produto">
            <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>" class="produto-img">
            
            <div class="produto-detalhes">
                <h1><?php echo $produto['nome']; ?></h1>
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