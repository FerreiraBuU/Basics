<!DOCTYPE html>
<html>
<head>
<title> Projeto de telas 01  </title>
<meta charset="utf-8">
</head>
<body>
<center>
	<form method="post" action="autoriza.php">

<br>
<h1>Termo para Doação de Sangue</h1>
Digite seu nome : <input type="text" name="nome" required=""><br>
Digite sua idade: <input type="text" name="idade" required=""><br>
Digite seu peso : <input type="text" name="peso" required=""><br>

<B>Selecione o tipo Sanguinio</B>
<br>
<input type="radio" name="tipo" value="O+" required=""> O+
<input type="radio" name="tipo" value="O-"> O-
<input type="radio" name="tipo" value="A+"> A+
<input type="radio" name="tipo" value="A-"> A-
<input type="radio" name="tipo" value="B+"> B+
<input type="radio" name="tipo" value="B-"> B-
<input type="radio" name="tipo" value="AB+"> AB+
<input type="radio" name="tipo" value="AB-"> AB-
<br><br>
<B>Por favor, Responda as perguntas a baixo.</B>
<br><br>
1. Você esta em boas condições de saúde?
<br>
<input type="radio" name="saude" value="Sim" required=""> Sim
<input type="radio" name="saude" value="Não"> Não
<br><br>
2. Você dormiu pelo menos 6h nas ultimas 24h?
<br>
<input type="radio" name="dormir" value="Sim" required=""> Sim
<input type="radio" name="dormir" value="Não"> Não
<br><br>
3. Sua ultima refeição foi a mais de 2h?
<br>
<input type="radio" name="refeicao" value="Sim" required=""> Sim
<input type="radio" name="refeicao" value="Não"> Não
<br><br>
4. Você esta gravida?
<br>
<input type="radio" name="gravida" value="Sim" required=""> Sim
<input type="radio" name="gravida" value="Não"> Não
<br><br>
5. Você tomou vacina pra gripe nas ultimas 48h?
<br>
<input type="radio" name="gripe" value="Sim" required=""> Sim
<input type="radio" name="gripe" value="Não"> Não
<br><br>
6. Você é usuario de drogas?
<br>
<input type="radio" name="drogas" value="Sim" required=""> Sim
<input type="radio" name="drogas" value="Não"> Não
<br><br>
<form>
	<input type="submit" value="Enviar" >
	<input type="reset" value="Apagar dados" >
	<input type="button" value="Voltar" onclick="history.go(-1)" >
</form>

</body>
</html>