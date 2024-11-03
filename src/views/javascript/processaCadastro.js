
    // Iniciando com um aviso no console para o usuário
    console.log("Olá! A aplicação Ajax se inicia aqui.");

    // Iniciando a função do index.php para cadastro de produto
    function enviaform(){

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "./controllers/CadastroProduto.php", true);
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                document.getElementById("cadastraProduto").innerHTML = xhr.responseText;
            }
        };

        xhr.send();

        console.log("Finaliza aplicação Ajax.");

    }