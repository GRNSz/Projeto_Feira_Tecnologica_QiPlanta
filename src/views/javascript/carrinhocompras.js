    // erros: 10

let contadorplanta01 = 0;

function incrementarP1(){
    // Incrementa o valor do contador
    contadorplanta01 = contadorplanta01 + 1;
    
    // Obtém o elemento do input
    const quantidadeplanta = document.getElementById("quantidade1");

    // Define o valor do input com o contador atualizado
    quantidadeplanta.value = contadorplanta01;
}
function decrementarP1(){
        contadorplanta01 = contadorplanta01 - 1;
        const quantidadeplanta = document.getElementById("quantidade1");
        quantidadeplanta.value = contadorplanta01;
}