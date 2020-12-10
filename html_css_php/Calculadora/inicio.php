<!DOCTYPE html>
<html lang=”pt-br”>
    <head>
		<title> Calculadora </title>
        <meta charset="utf-8">    
        <link rel="stylesheet" type="text/css">
    </head>
	<body>
                <h1> SEJA BEM VINDO </h1>
        <form method="post" action="atividade.php">
            
        Digite seu nome: <input type="text" name="nome" required =""><br>
        Digite o primeiro número: <input type="text" name="n1" required =""><br>
        Digite o segundo número: <input type="text" name="n2" required =""><br><br>
        
        Qual a operação matemática você deseja fazer com os números digitados?<br>
        <input type="radio" name="opera" value="soma" required="" > soma
        <input type="radio" name="opera" value="sub" required="" > subtração
        <input type="radio" name="opera" value="divi" required="" > divisão
        <input type="radio" name="opera" value="multi" required="" > multiplicação <br><br>
            
        <input type="submit" value="ENVIAR">
        <input type="reset" value="APAGAR DADOS">
        
        </form>
        


         
    </body>
</html>
