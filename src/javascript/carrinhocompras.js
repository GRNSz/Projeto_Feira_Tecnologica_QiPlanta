document.addEventListener('DOMContentLoaded', function() {
    const quantidadeInput = document.getElementById('Quantidade-p1');
    const precoElement = document.getElementById('preco');
    const nomeProduto = document.getElementById('carrinho-nomeplanta');
    const precoUnitario = 30.00;  // Define o preço unitário aqui

    function atualizarPreco() {
        const quantidade = parseInt(quantidadeInput.value);
        const precoTotal = quantidade * precoUnitario;
        precoElement.innerText = precoTotal.toFixed(2).replace('.', ',');
    }

    // Funções para incrementar e decrementar
    window.incrementar_p1 = function() {
        quantidadeInput.value = parseInt(quantidadeInput.value) + 1;
        atualizarPreco();
    };

    window.decrementar_p1 = function() {
        if (quantidadeInput.value > 1) {
            quantidadeInput.value = quantidadeInput.value - 1;
            atualizarPreco();
        }
    };

    atualizarPreco();
});
