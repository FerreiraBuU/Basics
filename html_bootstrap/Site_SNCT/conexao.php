<?php
function conectar ($local, $usuario, $senha, $base){
    $conexao = mysqli_connect("$local","$usuario","$senha","$base");
    return $conexao;
}

function desconectar ($encerrar){
    if($encerrar==true){
    mysqli_close($encerrar);
}}
?>