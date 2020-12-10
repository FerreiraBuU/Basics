var botao = document.getElementById("Bcalcular");
botao.addEventListener("click",calculo);


function calculo() {
    var quanti = document.getElementById("quanti").value;
    var vDia = 50;
    var avista = document.getElementById("avista");
    var aparazo = document.getElementById("aprazo");
    
    var preco;
    if (avista.checked){
        preco = "VALOR de R$" + ((quanti * vDia) - (quanti * vDia * .08)).toFixed(2);
        
    }
     if (aprazo.checked){
        preco ="VALOR de R$" + (quanti * vDia) + " em 3x de " + ((quanti * vDia)/3).toFixed(2);

     
     }
    
 document.getElementById("LOCACAO").innerHTML =
         "Conferência de dados <br><br>"
     
         +"Valor a pagar será de: " + preco + "<br>"
    

}
