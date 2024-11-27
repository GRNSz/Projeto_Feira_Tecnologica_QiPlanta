<?php
// ... (o restante do seu código permanece o mesmo)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="stylesheet" href="./css/carrinho.css"> <!-- Porque estilo é tudo! -->
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
</head>
<body>
<header>
    <?php include('header.php'); // Não mexa aqui, sério! ?>
</header>
<main>
    <div class="div-carrinho-compras">
        <center>
            <h1>Meu carrinho de compras!</h1>
        </center>
        <div class="lista-produto-carrinho">
            <ul class="lista-carrinho" style="list-style: none;">
                <?php if (!empty($_SESSION['carrinho'])): ?>
                    <?php foreach ($_SESSION['carrinho'] as $idProduto => $quantidade): ?>
                        <?php
                        // Busca os detalhes do produto pelo ID
                        $produto = $controller->getDetalhes($idProduto);

                        // Verifica se o produto foi encontrado
                        if (!$produto): ?>
                            <?php
                            // Removendo automaticamente esse intruso!
                            unset($_SESSION['carrinho'][$idProduto]);
                            ?>
                        <?php else: ?>
                            <li class="produto">
                                <center>

                                    <h3>Produto:
                                        <strong> <?php echo htmlspecialchars($produto['nome']); // Sem SQL Injection, por favor! ?></strong>
                                    </h3>
                                    <img src="<?php echo htmlspecialchars($produto['imagem']); ?>"> 
                                    <p>Quantidade:<br>    <b><?php echo $quantidade; ?></b></p>
                                    <p>Preço Unitário: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                                    <p>Subtotal: <b style="color:#3f9442;">R$  <?php echo number_format($produto['preco'] * $quantidade, 2, ',', '.'); ?></b></p>
                                    <button type="button" onclick="window.location.href='carrinho.php?add=<?php echo $idProduto; ?>'" class="btn-incrementar">+</button>
                                    <button type="button" onclick="window.location.href='carrinho.php?remove=<?php echo $idProduto; ?>'" class="btn-decrementar">-</button>
                                </center>
                        
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <center>
                        <button type="button" onclick="window.location.href='finalizar_compra.php'" class="btn-finalizar-compra">Finalizar Compra</button>
                    </center>
                <?php else: ?>
                    <div>
                        <center style="display:flex">
                            <h2>O carrinho de compras está vazio :(
                            <!--<span style='font-size:100px;font-size:35px;'>&#129402;</span>-->
                            </h2> <br><!-- Vamos lá, encha isso de produtos! -->
                        </center>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</main>
<footer>
    <?php include("footer.php"); // Sério, não mexa nisso também! ?>
</footer>
</body>
</html>
