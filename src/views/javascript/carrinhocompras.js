     // erros: 19
//#region produto 01
var contadorplanta01 = 0;

function incrementarP1(){
    contadorplanta01 = contadorplanta01 + 1;
    const quantidadeplanta = document.getElementById("quantidade1");
    quantidadeplanta.style.color = "black";
    quantidadeplanta.value = contadorplanta01;
}
function decrementarP1(){
    const quantidadeplanta = document.getElementById("quantidade1");
    if(quantidadeplanta == 0){
    }
    if (document.getElementById("quantidade1").value >= 1) {
        contadorplanta01 = contadorplanta01 - 1;
        quantidadeplanta.value = contadorplanta01;
    } else {
        quantidadeplanta.style.color = "red";
    }
}

function deletarP1(){
    var divP1 = document.getElementById("P1");
    var escolha = document.getElementById("confirmar");
    if(escolha.style.display == 'none'){
        escolha.style.display = "block"
    }
}
//#endregion
