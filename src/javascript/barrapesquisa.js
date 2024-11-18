console.log("Processando requisição da barra de pesquisa...");

function barraBuscar(){

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "./../controllers/PesquisaProduto.php", true);

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            document.getElementById("busca").innerHTML = xhr.responseText;
        }
        xhr.send();

        console.log("Requisição finalizada.");
    };
}