<!DOCTYPE html>
<html lang=”pt-br”>
    <head>
		<title> Formularios </title>
        <meta charset="utf-8">    
        <link rel="stylesheet" type="text/css">
    </head>
	<body>
       
        <?php
            $nome=$_POST["nome"];
            $num=$_POST["num"];  
            echo "Sr(a) $nome";
            
        
            if(isset($_POST["musica"])){
                echo "<br><br><br>Preferencias Musicais<br>";
            
                foreach($_POST["musica"] as $musica){
                    echo "<br> -".$musica;
                }
                    if(isset($_POST["share"])){
                        echo "<br><br> Obrigado por compartilhar suas musicas";
            }
                    else{
                        echo "<br><br> Voce não terá suas preferencias de musicas compartilhadas";
            }
            }
            else{
                echo "<br> Voce não selecionou generos musicais";

            }
            
        
        
        
        
        
               
            if(isset($_POST["filme"])){
                echo "<br><br><br>Preferencias de Filme<br>";
            
                foreach($_POST["filme"] as $filme){
                    echo "<br> -".$filme;
                }
                if(isset($_POST["share"])){
            
                    echo "<br><br> Obrigado por compartilhar seus filmes";
                
            }
            else{
                echo "<br><br> Voce não terá suas preferencias de filmes compartilhadas";

            }
            }
            else{
                echo "<br> Voce não selecionou generos de filme";

            }
                    
               
        
        
            
                    
           
            
            ?>
        
         <form>
        <br><br><input type="button" value="VOLTAR" onclick="history.go(-1)">
        </form>
        
    </body>
</html>
