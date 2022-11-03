<?php

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];


    $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, telefone, cidade, estado, endereco) VALUES('$nome', '$email', '$telefone', '$cidade', '$estado', '$endereco')");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Cadastro usuario</title>
</head>
<body>
    <div class="conteiner">

        <!--  Inicio do Header -->
        <header>
            <div class="topo">

                <!-- A logo -->
                <div class="logo"> <img src="imagens/Logo.png" alt="" width="150px" height="50px"> </div>

                <!-- Barra de Pesquisa-->
                <div class="barra"> <input type="text" placeholder="Search.."> </div>

                <!-- Login -->
                <div class="login"> <a href="">Login</a> </div>

            </div>

            <!-- Menu de navegação -->
        
            <nav class="menu">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">Quem somos</a></li>
                    <li><a href="">Como Funciona</a></li>
                    <li><a href="">Contato</a></li>
                </ul>   
            </nav>
            
        </header>
        <!-- FIM DO HEADER -->

        <main class="cadastro">
            <div class="box">
                <form action="cadastro_usuario.php" method="POST" >
                    <fieldset>
                        <legend><b> Cadastro de usuário </b></legend>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label for="nome">Nome completo</label>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <input type="text" name="email" id="email" class="inputUser" required>
                            <label for="email">Email</label>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <input type="text" name="telefone" id="telefone" class="inputUser"  required>
                            <label for="telefone">Telefone</label>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <input type="text" name="cidade" id="cidade" class="inputUser" required>
                            <label for="cidade">Cidade</label>
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <input type="text" name="estado" id="estado" class="inputUser" required>
                            <label for="estado">Estado</label>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <input type="text" name="endereco" id="endereco" class="inputUser" required>
                            <label for="endereco">endereço</label>
                            
                        </div>

                        <br><br>

                        <input type="submit" name="submit" id="submit">
                        
                    </fieldset>
                </form>
            </div>    
        </main>


        <!-- FOOTER INICIO-->
        <footer>
            <h1>Aqui é o Footer </h1>

        </footer>

    </div>
</body>
</html>