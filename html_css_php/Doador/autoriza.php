<!DOCTYPE html>
<html>
<head>
<title> Projeto Doaçao de Sangue  </title>
<meta charset="utf-8">
</head>
<body>
<br>
<h1>Olá, Seja bem vindo!</h1>
<br><br>
<?php echo "Bem vindo Sr(a).".$_POST["nome"]."<br>"?>
<?php 
 	echo "Segue suas informações para conferencia:<br>";
 	echo "Nome:".$_POST["nome"]."<br>";
 	$cont=0;

 	if (isset($_POST["idade"])) {
 	 	if ($_POST["idade"]>="16" and $_POST["idade"]<="69") {
 	 		$cont++;
 	 	
 	 	}
 	else  {
 		echo "Você não está com idade ideal, por isso não vai doar sangue!<br>";
 	}
	}

 	 if (isset($_POST["peso"])) {
 	 	if ($_POST["peso"]>="50")  {
 	 		$cont++;
 	 	
 	 	}
 	else   {
 		echo "Você não está com o peso ideal, por isso não vai doar sangue!<br>";
 	}
	}
 	
 	echo "Tipo Sanguineo:".$_POST["tipo"]."<br>";
	 
	 if (isset($_POST["saude"])) {
 	 	if ($_POST["saude"]=="Sim") {
 	 		$cont++;
 	 	
 	 	}
 	else if ($_POST["saude"]=="Não") {
 		echo "Você esta com a saude bem ruim<br>";
 	}
	}
	 if (isset($_POST["dormir"])) {
	 	if ($_POST["dormir"]=="Sim") {
	 		$cont++;
 	 	
 	 	}
 	else if ($_POST["dormir"]=="Não") {
 		echo "Você´precisa dormir mais<br>";
 	}
	}	
 	if (isset($_POST["refeicao"])) {
 		if ($_POST["refeicao"]=="Sim") {
 	 		$cont++;
 	 	
 	 	}
 	else if ($_POST["refeicao"]=="Não") {
 		echo "Você´vai desmaiar de fome, saco vazio nao para em pé<br>";
 	}
	}	
	if (isset($_POST["gravida"])) {
 	if ($_POST["gravida"]=="Sim") {
 	 	echo "Você esta gravida e não pode doar sangue <br>";
 	 	}
 	else if ($_POST["gravida"]=="Não") {
 		$cont++;
 		
 	}
	}
	if (isset($_POST["gripe"])) {
 	if ($_POST["gripe"]=="Sim") {
 	 	echo "Você tomou vacina a mais de 48h <br>";
 	 	}
 	else if ($_POST["gripe"]=="Não") {
 		$cont++;
 	}
	}
	if (isset($_POST["drogas"])) {
 	if ($_POST["drogas"]=="Sim") {
 		
 	 	echo "Você não pode doar sangue seu maconheiro de merda<br>";
 	 	}
 	else if ($_POST["drogas"]=="Não") {
 		$cont++;
 		
 	}
	}	
	if ($cont==8){
 	echo "Parabéns, Você está apto a doar sangue<br>";
 	echo "Você esta com a idade certa para doação ideal<br>";
 	echo "Você esta com a peso ideal<br>";
 	echo "Você esta com a saude boa<br>";
	echo "Você esta com a saude mental boa<br>";
 	echo "Você comeu a mais de 2h<br>";
 	echo "Você´não esta gravida<br>";
	echo "Você´tomou vacina a menos de 48h, não pode doar sangue<br>";
	echo "Você´não usa drogas<br>";
	echo "<br><br>Eu " . ($_POST["nome"]) . " confirmo a veraciada das informações acima<br>";
	echo "________________________________________";
	echo "<br> Assinatura do Sr(a). " . ($_POST["nome"]) . "<br><br>";
	echo "O que Você deseja fazer agora?";
	}

 ?>
<form>
	<input type="button" value="Imprimir" onclick="window.print()">
	<input type="button" value="Preencher novamente o questionario" onclick="history.go(-1)" >
	<input type="button" value="Voltar ao termo de aceite" onclick="window.location='confirma.php'" >
</form>
</body>
</html>