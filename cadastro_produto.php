
<?php
    if(isset($_FILES['myfile'])){
        $arquivo = $_FILES['myfile'];
        
        if($arquivo['error']){
            die("Falha ao enviar o arquivo");
        }

        if($arquivo['size'] > 2097152){
            die("Arquivo maior que 2MB");
        }

        $pasta = "arquivos/";
        $nomeDoArquivo = $_FILES['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
        echo "<p>$extensao</p>";

        if($extensao != "jpeg" && $extensao != "png"){
            die("Tipo de arquivo não aceito");
        }

        $deuCerto = move_uploaded_file($arquivo["tpm_name"], $pasta . $novoNomeArquivo . "." . $extensao);
        
        if($deuCerto){
            echo "<p>Arqhivo enviado com sucesso! Para acessa-lo clique aqui:<a href=\'arquivos/$novoNomeArquivo.$extensao'\>Clique aqui</a></p>";
        }
        else{
            echo "<p>Falha ao enviar o arquivo</p>";
        }
    
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Cadastro do Produto</title>
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
                <form enctype="multipart/form-data" method="POST">
                    <fieldset>
                        <legend><b> Cadastro do Produto </b></legend>
                        <br>
                        <div class="inputBox">
                            <label for="nome">Nome do produto</label>
                            <input type="text" name="nome_produto" id="nome" class="inputUser" required>
                                                        
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="browsers">Categoria</label>
                            <input list="browsers" name="browser">
                            <datalist id="browsers">
                                <option value="Ferramentas">
                                <option value="utensilio doméstico">
                                <option value="Livros">
                                <option value="outros">
                            </datalist>
                            
                        </div>

                        <br><br>

                        <div class="inputBox">
                            <label for="descricao">Decrição</label>
                            <input type="text" name="descricao" id="descricao" class="inputUser" width="100" height="50" required>
                            
                        </div>

                        <br><br>

                    
                        <div class="inputBox">

                            <label for="myfile">Selecione as fotos do produto:</label>
                            <input type="file" id="myfile" name="myfile">
                            
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