//#region Contador valor
var contadorplanta01 = 0;
function incrementarP1() {
  valor = 30.0;

  contadorplanta01 = contadorplanta01 + 1;
  valor = valor * contadorplanta01;

  const quantidadeplanta = document.getElementById("quantidade1");
  const preco = document.getElementById("preco");
  quantidadeplanta.style.color = "black";
  quantidadeplanta.value = contadorplanta01;
  console.log(valor);
  document.getElementById("preco").innerHTML = valor;
}

function decrementarP1() {
  valor = 30.0;

  const quantidadeplanta = document.getElementById("quantidade1");
  if (quantidadeplanta == 0 || quantidadeplanta < 0) {
  }
  if (document.getElementById("quantidade1").value >= 1) {
    contadorplanta01 = contadorplanta01 - 1;
    valor = valor * contadorplanta01;
    quantidadeplanta.value = contadorplanta01;
    document.getElementById("preco").innerHTML = valor;
  } else {
    quantidadeplanta.style.color = "red";
  }
}

function deletarP1() {
  var divP1 = document.getElementById("P1");
  var escolha = document.getElementById("confirmar");
  if (escolha.style.display == "none") {
    escolha.style.display = "block";
  }
}
//#endregion