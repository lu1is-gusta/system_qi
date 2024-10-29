<?php

    if(isset($_POST['submit']))
    {
         print_r('email: ' . $_POST['email']);
         print_r('<br>');
         print_r('senha: ' . $_POST['senha']);
         print_r('<br>');
         print_r('nome: ' . $_POST['nome']);
         print_r('<br>');
         print_r('cpf: ' . $_POST['cpf']);
         print_r('<br>');
         print_r('Telefone: ' . $_POST['fone']);
         print_r('<br>');
              

       /* include_once('sqlConnection.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $numeroCel = $_POST['fone'];

        $result = mysqli_query($connection, "INSERT INTO usuario(email_usuario,senha_usuario,Nome_usuario,CPF_CNPJ_usuario,contato_usuario) 
        VALUES ('$email','$senha','$nome','$cpf', '$numeroCel')");

       */
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadastro dos Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                
                <div class="inputBox">
                  <input type="password" name="senha" id="senha" class="inputUser" required>
                  <label for="senha" class="labelInput">senha</label>
                </div>

                <br><br>

                <div class="inputBox">
                  <input type="text" name="nome" id="nome" class="inputUser" required>
                  <label for="nome" class="labelInput">Nome</label>
                </div>

                <br><br>

                <div class="inputBox">
                  <input type="text" name="cpf" id="cpf" class="inputUser" required>
                  <label for="cpf" class="labelInput">cpf</label>
                </div>

                <br><br>

                <div class="inputBox">
                  <input type="tel" name="fone" id="fone" pattern="[0-9]{3}-[0-9]{5}-[0-9]{4}" class="inputUser" >
                  <label for="fone" class="labelInput">fone</label>
                </div>
                
                <button class='btn btn-succes'>Editar</button>
                <button class='btn btn-danger'>Excluir</button>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>