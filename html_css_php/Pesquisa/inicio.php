<!DOCTYPE html>
<html lang=”pt-br”>
    <head>
		<title> Projeto 3 </title>
        <meta charset="utf-8">    
        <link rel="stylesheet" type="text/css">
    </head>
	<body>
                <h1> Pesquisa de Satisfação </h1>
        <form method="post" action="pesquisa.php">
            
        Digite seu nome: <input type="text" name="nome" required =""><br>
        Digite sua idade: <input type="number" name="num" required =""><br><br>
        Escolha os generos musical de sua preferencia: <br>
        <input type="checkbox" name="musica[]" value="Sertanejo"> Sertanejo 
        <input type="checkbox" name="musica[]" value="Rock"> Rock 
        <input type="checkbox" name="musica[]" value="Pagode"> Pagode 
        <input type="checkbox" name="musica[]" value="Classica"> Classica 
        <input type="checkbox" name="musica[]" value="Funk"> Funk 
        <input type="checkbox" name="musica[]" value="Tecno"> Tecno  
        <br><br><br>
            
        Escolha os generos filme de sua preferencia: <br>
        <input type="checkbox" name="filme[]" value="Terror"> Terror 
        <input type="checkbox" name="filme[]" value="Romance"> Romance 
        <input type="checkbox" name="filme[]" value="Aventura"> Aventura 
        <input type="checkbox" name="filme[]" value="Comedia"> Comedia 
        <input type="checkbox" name="filme[]" value="Drama"> Drama 
        <input type="checkbox" name="filme[]" value="Infantil"> Infantil  
        <br><br><br>
     
        
        <input type="checkbox" name="share" value="check" checked> Você permite que suas respostas sejam compartilhadas com outros usuarios? 
        <br><br><br>   
        <input type="submit" value="ENVIAR">
        <input type="reset" value="APAGAR DADOS">
        
        </form>
        


         
    </body>
</html>
