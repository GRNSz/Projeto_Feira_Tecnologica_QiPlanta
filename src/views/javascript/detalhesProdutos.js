
    console.log("Detalhes do produto");

    function detalhes(){

        xhr = new XMLHttpRequest();
        xhr.open("GET", "./views/detalhes.php", true);

        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                document.getElementById("verDetalhes").innerHTML = xhr.responseText;
            };
        
            xhr.send();

            console.log("Finalizando Detalhes");

        }
    }