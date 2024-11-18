//#region cria <li>
function criarLi(nome, preco, imagem, id) {
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
    inputQuantidade.value = 1;
    inputQuantidade.min = 0;
    inputQuantidade.id = `Quantidade-p${id}`;

    const btnIncrementar = document.createElement('button');
    btnIncrementar.type = 'button';
    btnIncrementar.classList.add('btn-incrementar');
    btnIncrementar.textContent = '+';
    btnIncrementar.onclick = function() { incrementar_p1(id); };

    const btnRemover = document.createElement('button');
    btnRemover.onclick = function() { deletarCarrinho(id);
    };

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

//#region Montando <li> produto
const btn_addCarrinho = document.getElementById("btn_addCarrinho");

    btn_addCarrinho.addEventListener('click', () =>{
        criarLi();
    });
/*function coleta_infoProduto(){

    
}
function coleta_infoProduto(){ 
  if (window.location.href === 'http://localhost:3000/src/views/detalhes.php?id=1'){
    let nome = document.getElementById("nome_produto").innerText
    
    alert(nome);
  }
}
  
let add_Carrinho =document.getElementById('btn_addCarrinho');
                        add_Carrinho.addEventListener('click', () =>{
                            });
*/

 function adicionarProduto() {
    const nome = "Produto 1"; // Substitua pelo nome do produto
    const preco = "30,00"; // Substitua pelo preço do produto
    const imagem = ""; // Substitua pelo link da imagem do produto
   const id = Date.now(); // Gera um ID único baseado no timestamp

    const lista = document.getElementById('minha-lista');
   lista.appendChild(criarLi(nome, preco, imagem, id));

    verificarCarrinho() //verificador se tem item //
}

// Funções de incremento e decremento
function incrementar_p1(id) {
    const input = document.getElementById(`Quantidade-p${id}`);
    input.value = parseInt(input.value) + 1;
}

function decrementar_p1(id) {
    const input = document.getElementById(`Quantidade-p${id}`);
    if (input.value > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

function deletarCarrinho(id) {
    const item = document.getElementById(id);
    item.remove();

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
}// o problema que quando deleta o item ele n volta T_T