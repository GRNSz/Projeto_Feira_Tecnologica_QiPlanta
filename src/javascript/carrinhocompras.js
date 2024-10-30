document.addEventListener('DOMContentLoaded', function() {
    const quantidadeInput = document.getElementById('quanti1');
    const quantidadeRange = document.getElementById('quantidadep1');
    const precoElement = document.getElementById('preco');
    const nomeProduto = document.getElementById('nomeproduto01').innerText;

    function atualizarPreco() {
        const quantidade = parseInt(quantidadeInput.value);
        const precoUnitario = parseFloat(precoElement.getAttribute('value'));
        const precoTotal = quantidade * precoUnitario;
        precoElement.innerText = precoTotal.toFixed(2);
    }

    quantidadeInput.addEventListener('input', function() {
        quantidadeRange.value = quantidadeInput.value;
        atualizarPreco();
    });

    quantidadeRange.addEventListener('input', function() {
        quantidadeInput.value = quantidadeRange.value;
        atualizarPreco();
    });

    window.deletarP1 = function() {
        const produto = document.getElementById('P1');
        produto.remove();
        alert(`${nomeProduto} foi removido do carrinho.`);
    };

    atualizarPreco();
});