<?php
include "conexao.php";
$gnome = $_POST['nome'];
$gdatanasciemto = $_POST['datanascimento'];
$gcpf = $_POST['cpf'];
$grg = $_POST['rg'];
$gemail = $_POST['email'];
$gtelefone = $_POST['telefone'];
$gtipoparticipante = $_POST['tipoparticipante'];
$gcep = $_POST['cep'];
$gnumero = $_POST['numero'];
$grua = $_POST['rua'];
$gbairro = $_POST['bairro'];
$gcidade = $_POST['cidade'];
$gestado = $_POST['uf'];


$conexao = mysqli_connect("localhost","root","","snct");

if($_POST['tipoparticipante']!= "Comunidade Externa"){
$gmatricula = $_POST['matricula'];
}
else{
$gmatricula = null;
}

$consulta = "INSERT INTO cadastro(nome, matricula, datanascimento, cpf, rg, email, telefone, tipoparticipante, cep, numero, rua, bairro, cidade, estado) values('$gnome', '$gmatricula', '$gdatanasciemto', '$gcpf', '$grg', '$gemail', '$gtelefone', '$gtipoparticipante', '$gcep', '$gnumero', '$grua', '$gbairro', '$gcidade', '$gestado')";


if($_GET['funcao']=='gravar'){

$sqlgravar = mysqli_query($conexao,$consulta);
    header("Location:tabela.php");
}


?>
