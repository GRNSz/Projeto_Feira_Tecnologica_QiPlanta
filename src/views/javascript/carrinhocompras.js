    // erros: 12
//#region DIv produto do carrinho 01
var contadorplanta01 = 0;

function incrementarP1(){
    // Incrementa o valor do contador
    contadorplanta01 = contadorplanta01 + 1;
    
    // Obtém o elemento do input
    const quantidadeplanta = document.getElementById("quantidade1");

    // Define o valor do input com o contador atualizado
    quantidadeplanta.value = contadorplanta01;
}
function decrementarP1(){
   // if(quantidadeplanta >0){
        const quantidadeplanta = document.getElementById("quantidade1");
        contadorplanta01 = contadorplanta01 - 1;
        quantidadeplanta.value = contadorplanta01;
   // }
}
function deletarP1(){
    var divP1 = document.getElementById("P1");
    var resposta = prompt("Para confirmação para deletar o produto\n de seu carrinho digite 'CONFIRMAR'");
    if(resposta == "CONFIRMAR"){
        divP1.style.display = "none"
        //caixinha perguntando se deseja deletar

    }
}
//#endregion
//#region Div produto carrinho 02
function incrementarP2(){

}