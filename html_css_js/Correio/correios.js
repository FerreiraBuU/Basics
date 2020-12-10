var botao = document.getElementById("botao1");
botao.addEventListener("click",calculo);


function calculo() {

    var nomeR =  document.getElementById("NR").value;
    var nomeD =  document.getElementById("ND").value;
    var ender =  document.getElementById("END").value;
    var peso = document.getElementById("PESO").value;
    var normal = document.getElementById("Normal");
    var sedex = document.getElementById("Sedex");
    var sedex10 = document.getElementById("Sedex10");
    var RR = document.getElementById("registro");
    
    var preco;
     if (normal.checked){
        preco = (peso * 0.03);  
        }
    
        if (sedex.checked){
        preco = (peso * 0.07);
        }
        
        if (sedex10.checked){
        preco = (peso * 0.10);
        }


    var prev;
     if (normal.checked){
        prev = 5;  
        }
    
        if (sedex.checked){
        prev = 2;
        }
        
        if (sedex10.checked){
        prev =1;
        }
    
    

    
    var estado = document.getElementById("estado").value;
        var Vadd = 0;
            if (estado == 'SC'){
        Vadd = 3.50;   
    }
            if (estado == 'RS'){
        Vadd = 5.20;
    
    }       
            if (estado == 'PR'){
        Vadd = 5.50;
    
    }
            if (estado == 'SP'){
        Vadd = 7.20;
    
    }
            if (estado == 'RJ'){
        Vadd =  8.80;
    }
            if (estado == 'MG'){
        Vadd = 9.20;
    }
            if (estado == 'CO'){
        Vadd = 13.15;
    }
            if (estado == 'ES'){
        Vadd = 11.00;
    }           
            if (estado == 'NO'){
        Vadd = 15.20;
    }
        
            if (estado == 'NT'){
        Vadd = 18.00;
    }


    
        var registro = 0;
            if (RR.checked){
        registro = ((preco + Vadd) * .03);
    }
    
    var total = (preco + Vadd + registro).toFixed(2);

    
 document.getElementById("page").innerHTML =
        
         "Conferência de dados <br><br>"
    
        + "Valor a pagar será de: " + total + "<br>"
        + "Nome do remetente: " + nomeR + "<br>"
        + "Nome do destinatario: " + nomeD + "<br>"
        + "Endereço destinatario: " + ender + "<br>"
        + "Previsão de entrega: " + prev + "<br>"
      

  

}

