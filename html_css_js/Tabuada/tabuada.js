var botao = document.getElementById("botao");
botao.addEventListener("click",gerarTabuada);

function gerarTabuada() {
    var numero = Number(document.getElementById("num").value);
    var res;
    var texto = "";
    
    for (var i=1;i<=10; i=i+1){
        res = numero * i;
        texto = texto + numero + " x " + i + " = " + res + "<br>"; 
    }
    
    document.getElementById("resultado").innerHTML = texto;     
}       