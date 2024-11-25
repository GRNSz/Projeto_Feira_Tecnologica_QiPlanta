console.log("Processando requisição da barra de pesquisa...");

function barraBuscar(){

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "./../controllers/ProdutoController.php", true);

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            document.getElementById("busca").innerHTML = xhr.responseText;
        }
        xhr.send();

        console.log("Requisição finalizada.");
    };
    var input = document.getElementById("pesquisa");
    var filtro = input.value.toLowerCase();
    var produtos = document.getElementsByClassName("produto");

    for (var i = 0; i < produtos.length; i++) {
        var nomeProduto = produtos[i].getElementsByClassName("nome-produto")[0];
        var texto = nomeProduto.textContent || nomeProduto.innerText;
        
        if (texto.toLowerCase().indexOf(filtro) > -1) {
            produtos[i].style.display = "";
        } else {
            produtos[i].style.display = "none";
        }
    }
}