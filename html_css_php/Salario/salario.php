<!DOCTYPE html>
<html lang=”pt-br”>
    <head>
		<title> Salarios </title>
        <meta charset="utf-8">    
        <link rel="stylesheet" type="text/css">
    </head>
	<body>
       
        <?php
            if(isset($_POST["nome"])and($_POST["s"])){
            
            $nome=$_POST["nome"];
            $s=$_POST["s"];
            
                    
            if($s<1500){
                $ns=$s;
                
                    echo "<br>Sr(a) $nome <br>O salario atual é: R$$s. <br>Seu salario sem aumento. <br><br><br>";
            }
                elseif($s>=1500 and $s<=1750){
                   $ns=$s*1.3;
                    echo "<br>Sr(a) $nome <br>O salario atual é: R$$s. <br>Seu salario com 30% de aumento é: R$$ns. <br><br><br>";
                }
                elseif($s>1750 and $s<2000){
                   $ns=$s*1.2;
                    echo "<br>Sr(a) $nome <br>O salario atual é: R$$s. <br>O novo salario com 20% de aumento é: R$$ns. <br><br><br>";
                }
                elseif($s>=2000 and $s<=3000){
                   $ns=$s*1.1; 
                    echo "<br>Sr(a) $nome <br>O salario atual é: R$$s. <br>O novo salario com 10% de aumento é: R$$ns. <br><br><br>";
                }
                else{
                    $ns=$s*1.05;
                    echo "<br>Sr(a) $nome <br>O salario atual é: R$$s. <br>O novo salario com 5% de aumento é: R$$ns. <br><br><br>";

                }
                    
            echo "<br>O que deseja fazer?";
            }
            ?>
        
         <form>
        <br><input type="button" value="Voltar para tela inicial" onclick="history.go(-1)">
            <input type="button" value="Imprimir página" onclick="window.print()">
        </form>
        
    </body>
</html>
