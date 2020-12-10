<?php
include("conexao.php");

$conexao= conectar("localhost","root","","snct");
//header('Content-type: Text/html; charset=ISO-8859-1');
$consulta = ("select * from cadastro");
$con = mysqli_query($conexao,$consulta);
?>

<!DOCTYPE html>
<html lang=”pt-br”>
    <head>
        
		<title> Tabela </title>
        <meta charset="utf-8">
        
         <link rel="stylesheet" href="estilos.css" >
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"> 

         
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" >
    
    </head>
	<body>
         <nav class="navbar fixed-top navbar-expand-lg navbar-light p-3 mb-2 cgreen text-white">
            <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="imagens/logo-cabecalho-1024x342.png" width="150">
                    </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fnt" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fnt" href="oqe.html">Sobre o evento</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="fnt nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"> Programação</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="programacao.html">Geral</a>
                                <a class="dropdown-item" href="programacao.html#15">Dia 15/10</a>
                                <a class="dropdown-item" href="programacao.html#16">Dia 16/10</a>
                                <a class="dropdown-item" href="programacao.html#17">Dia 17/10</a>
                                <a class="dropdown-item" href="programacao.html#18">Dia 18/10</a>
                                <a class="dropdown-item" href="programacao.html#19">Dia 19/10</a>
                            </div>
                    </li>
                    <li class="nav-item active">
                        <a class=" fnt nav-link" href="cadastro.html">Cadastro</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="fnt nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Social</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="https://www.facebook.com/ifsantacatarina/" target="_blank">Facebook</a>
                                <a class="dropdown-item" href="https://twitter.com/ifsc" target="_blank">Twitter</a>
                                <a class="dropdown-item" href="https://www.instagram.com/ifsc/" target="_blank">Instagram</a>
                                <a class="dropdown-item" href="https://www.ifsc.edu.br/" target="_blank">Pagina oficial</a>
                            </div>
                    </li>
                </ul>
                 
                <span class="float-right">
                <ul class=" navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 " type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit"> <img src="imagens/lupa.png" width="20" height="20" alt="snct"> </button>
                    </form>
                </li>
                </ul>
                </span>
                </div>
        </div>
        </nav>   
        
        
        <h2 class="pdd text-center" >Participantes cadastrados</h2>
        <div class="table-responsive-lg">
        <table class="table table-secondary table-striped border border-success">
            <tr>
                <th>ID participante</th>
                <th>Nome</th>
                <th>Matricula</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>RG</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Tipo de participante</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                
            </tr>
            <?php 
            while($resultado=mysqli_fetch_array($con)){
                //pegar o identificador do aluno e enviar para a pagina de edição
            $id=$resultado['idparticipante']
            ?>
            <tr>
                <td><?php echo $resultado['idparticipante'] ?></td>
                <td><?php echo $resultado['nome'] ?></td>
                <td><?php echo $resultado['matricula'] ?></td>
                <td><?php echo $resultado['datanascimento'] ?></td>
                <td><?php echo $resultado['cpf'] ?></td>
                <td><?php echo $resultado['rg'] ?></td>
                <td><?php echo $resultado['email'] ?></td>
                <td><?php echo $resultado['telefone'] ?></td>
                <td><?php echo $resultado['tipoparticipante'] ?></td>
                <td><?php echo $resultado['cep'] ?></td>
                <td><?php echo $resultado['numero'] ?></td>
                <td><?php echo $resultado['rua'] ?></td>
                <td><?php echo $resultado['bairro'] ?></td>
                <td><?php echo $resultado['cidade'] ?></td>
                <td><?php echo $resultado['estado'] ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        

        <div class="mg cgreen mt-4">
            <div class="container">
                <div class="pt-4 pb-4">
                <h5 class="text-center">Instituto Federal de Santa Catarina IFSC - Câmpus Lages </h5>
                <p class="text-center">Rua Heitor Vila Lobos, 222 - Bairro São Francisco - CEP 88506-400 <br> Fone: (49) 3221-4200</p>
                </div>
            </div>
        </div>
        
    </body>
</html>