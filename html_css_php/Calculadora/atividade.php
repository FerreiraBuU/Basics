<!DOCTYPE html>
<html lang=”pt-br”>
    <head>
		<title> Formularios </title>
        <meta charset="utf-8">    
        <link rel="stylesheet" type="text/css">
    </head>
	<body>
       
        <?php
            if(isset($_POST["nome"])and($_POST["n1"])and($_POST["n2"])){
            $nome=$_POST["nome"];
            $n1=$_POST["n1"];
            $n2=$_POST["n2"];
            
            echo "<h1>Olá $nome </h1>";
                
            echo "<br>Os numeros são: $n1 e $n2.";
            
            if(($_POST["opera"])=="soma"){
                function soma ($n1, $n2){
                $soma = ($n1 + $n2);
                return $soma;
            } 
            $soma = soma($n1,$n2);
            echo "<br>A soma é $soma.";
            }
            
            
             elseif(($_POST["opera"])=="sub"){
                function sub ($n1, $n2){
                $sub = ($n1 - $n2);
                return $sub;
            }
            $sub = sub($n1,$n2);    
            echo "<br>A subtração é $sub.";
            }
             
                
            elseif(($_POST["opera"])=="multi"){        
                function multi ($n1, $n2){
                $multi = ($n1 * $n2);
                return $multi;
            }
            $multi = multi($n1,$n2);
            echo "<br>A multiplicação é $multi.";
            }
        
                
            else{        
                function divi ($n1, $n2){
                $divi = ($n1 / $n2);
                return $divi;
            }
            $divi = divi($n1,$n2);
            echo "<br>A divisão é $divi.";
            }
            }
            
        ?> 
         <form>
        <br><br><input type="button" value="VOLTAR" onclick="history.go(-1)">
        </form>
         
    </body>
</html>
