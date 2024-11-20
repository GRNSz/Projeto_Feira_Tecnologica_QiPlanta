//#region cria <li>
function criarLi(nome, preco, imagem, id, quantidade = 1) {
    const li = document.createElement('li');
    li.classList.add('produto');
    li.id = id;
    const img = document.createElement('img');
    img.src = imagem;
    img.alt = nome;
    const h3 = document.createElement('h3');
    h3.id = 'carrinho-nome';
    h3.textContent = nome;
    const precoElement = document.createElement('p');
    precoElement.classList.add('preco');
    precoElement.innerHTML = `R$ <strong id="preco">${preco}</strong>`;
    const quantidadeDiv = document.createElement('div');
    quantidadeDiv.classList.add('quantidade');
    const label = document.createElement('label');
    label.textContent = 'Quantidade:';
    const btnDecrementar = document.createElement('button');
    btnDecrementar.type = 'button';
    btnDecrementar.classList.add('btn-decrementar');
    btnDecrementar.textContent = '-';
    btnDecrementar.onclick = function() { decrementar_p1(id); };
    const inputQuantidade = document.createElement('input');
    inputQuantidade.type = 'number';
    inputQuantidade.classList.add('input-quantidadeProduto');
    inputQuantidade.name = 'Quantidade-produto';
    inputQuantidade.value = quantidade;
    inputQuantidade.min = 0;
    inputQuantidade.id = `Quantidade-p${id}`;
    const btnIncrementar = document.createElement('button');
    btnIncrementar.type = 'button';
    btnIncrementar.classList.add('btn-incrementar');
    btnIncrementar.textContent = '+';
    btnIncrementar.onclick = function() { incrementar_p1(id); };
    const btnRemover = document.createElement('button');
    btnRemover.onclick = function() { deletarCarrinho(id); };
    btnRemover.textContent = 'Remover';
    quantidadeDiv.appendChild(label);
    quantidadeDiv.appendChild(btnDecrementar);
    quantidadeDiv.appendChild(inputQuantidade);
    quantidadeDiv.appendChild(btnIncrementar);
    quantidadeDiv.appendChild(btnRemover);
    li.appendChild(img);
    li.appendChild(h3);
    li.appendChild(precoElement);
    li.appendChild(quantidadeDiv);
    return li;
}
//#endregion

//#region Função para adicionar produto ao carrinho
function adicionarProduto(nome, preco, imagem) {
    const id = Date.now(); // Gera um ID único baseado no timestamp
    const lista = document.getElementById('minha-lista');
    const quantidade = 1; // Pode ser alterado conforme necessário

    // Adiciona o produto ao carrinho
    lista.appendChild(criarLi(nome, preco, imagem, id, quantidade));

    // Salva o produto no localStorage
    salvarProdutoNoCarrinho({ id, nome, preco, imagem, quantidade });
    verificarCarrinho(); // Verifica se o carrinho está vazio
}

// Função para salvar produto no localStorage
function salvarProdutoNoCarrinho(produto) {
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    carrinho.push(produto);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
}

// Função para carregar produtos do localStorage
function carregarCarrinho() {
    const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    carrinho.forEach(produto => {
        const lista = document.getElementById('minha-lista');
        lista.appendChild(criarLi(produto.nome, produto.preco, produto.imagem, produto.id, produto.quantidade));
    });
    verificarCarrinho();
}

// Funções de incremento e decremento
function incrementar_p1(id) {
    const input = document.getElementById(`Quantidade-p${id}`);
    input.value = parseInt(input.value) + 1;
    atualizarQuantidadeNoCarrinho(id, input.value);
}

function decrementar_p1(id) {
    const input = document.getElementById(`Quantidade-p${id}`);
    if (input.value > 1) {
        input.value = parseInt(input.value) - 1;
        atualizarQuantidadeNoCarrinho(id, input.value);
    }
}

function atualizarQuantidadeNoCarrinho(id, quantidade) {
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    carrinho = carrinho.map(produto => {
        if (produto.id === id) {
            produto.quantidade = quantidade;
        }
        return produto;
    });
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
}

function deletarCarrinho(id) {
    const item = document.getElementById(id);
    item.remove();

    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    carrinho = carrinho.filter(produto => produto.id !== id);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));

    verificarCarrinho();
}
//#endregion

//#region Verificador
function verificarCarrinho() {
    const lista = document.getElementById('minha-lista');
    const mensagemVazia = document.getElementById('mensagem-vazia');
    // Se a lista não tiver filhos, mostra a mensagem de carrinho vazio
    if (lista.children.length === 0) {
        mensagemVazia.style.display = 'block';
    } else {
        mensagemVazia.style.display = 'none';
    }
}

// Carregar produtos do carrinho ao iniciar a página
document.addEventListener('DOMContentLoaded', carregarCarrinho);
//#endregion