<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$genero = $_POST['genero'];
$cpf = $_POST['cpf'];

$result = mysqli_query($conexao, "INSERT INTO form02(nome,email,data_nasc,genero,cpf) values('$nome','$email','$data_nasc','$genero', '$cpf')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <link href="style.css" rel="stylesheet">

</head>
<body>
    <form action="index.php" method="POST">
        <div class="box">
        <fieldset class="field">
            <legend class="legend">Banco Niterói</legend>
                <label class="cadastrar">Cadastre-se</label>
                    <br>
                        <label for="nome" class="inputtext">Nome Completo</label>
                            <br>
                            <input type="text"  name="nome" id="nome" class="inputUser" required/>  
                            <br>
                            <br>
                        <label for="email" class="inputtext">email</label>
                            <br>
                            <input type="text"  name="email" id="email" class="inputUser" required/>  
                            <br>
                            <br>
                        <label for="data_nasc" class="inputtext">Data de Nascimento</label>
                            <br>    
                        <input type="date"  name="data_nasc" id="data_nasc" class="inputUser" required/>
                            <br>
                            
                        <p class="inputtext">Gênero</p>
                            <input type="radio" id="masculino"  name="genero"  value="masculino" required/>
                            <label for="masculino">masculino</label>
                            <br>
                            <input type="radio" id="feminino"  name="genero"  value="feminino" required/>
                            <label for="feminino">feminino</label>
                            <br>
                            <input type="radio" id="naores"  name="genero"  value="naores" required/>
                            <label for="feminino">prefiro nao responder</label>
                            <br>
                            <br>
                        <label for="cpf" class="inputtext">CPF</label>
                            <br>
                            <input type="text"  name="cpf" id="cpf" class="inputUser" required/>
                            <br>
                            <br>
                        <input type="submit" name="submit" id="submit" class="submit-button"/>
        </fieldset>
        </div>
    </form>

</body>
</html>