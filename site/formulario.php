<?php

 if(isset($_POST['submit']))
 {
     /* print_r('Nome: '.$_POST['nome']);
      print_r('<br>');
      print_r('Email: '.$_POST['email']);
      print_r('<br>');
      print_r('Telefone: '.$_POST['telefone']);
      print_r('<br>');
      print_r('Sexo: '.$_POST['genero']);
      print_r('<br>');
      print_r('Data de Nascimento: '.$_POST['data_nascimento']);
      print_r('<br>');
      print_r('Cidade: '.$_POST['cidade']);
      print_r('<br>');
      print_r('Estado: '.$_POST['estado']);
      print_r('<br>');
      print_r('Endereço: '.$_POST['endereco']);
      */
      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $telefone = $_POST['telefone'];
      $sexo = $_POST['genero'];
      $data_nasc = $_POST['genero'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

      header('Location: usuarioesenha.php');
 }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-image: linear-gradient(90deg, black, blue, royalblue, black);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
    .box {
      background-color: rgba(0, 0, 0, 0.85);
      color: aliceblue;
      padding: 40px;
      border-radius: 20px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 0 20px royalblue;
    }
    fieldset {
      border: 2px solid royalblue;
      padding: 20px;
      border-radius: 10px;
    }
    legend {
      padding: 10px 20px;
      background-color: royalblue;
      border-radius: 10px;
      font-size: 24px;
      font-weight: bold;
    }
    .inputBox {
      margin-top: 20px;
      position: relative;
    }
    .inputUser {
      width: 100%;
      padding: 10px;
      background: none;
      border: none;
      border-bottom: 2px solid aliceblue;
      color: aliceblue;
      font-size: 16px;
      outline: none;
    }
    .labelInput {
      position: absolute;
      top: 10px;
      left: 10px;
      color: aliceblue;
      pointer-events: none;
      transition: 0.3s ease;
    }
    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput {
      top: -15px;
      left: 5px;
      font-size: 12px;
      color: royalblue;
    }
    p {
      margin-top: 20px;
      font-size: 16px;
    }
    .gender-options {
      display: flex;
      justify-content: center;
      margin-top: 10px;
      gap: 15px;
    }
    .gender-options label {
      font-size: 14px;
    }
    #submit {
      margin-top: 30px;
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 12px;
      font-size: 18px;
      color: aliceblue;
      background-image: linear-gradient(90deg, cornflowerblue, royalblue);
      cursor: pointer;
      transition: 0.3s ease;
    }
    #submit:hover {
      background-image: linear-gradient(90deg, deepskyblue, royalblue);
    }

    /* Estilo específico para o campo de data */
    input[type="date"] {
      width: 100%;
      padding: 10px;
      background: none;
      border: none;
      border-bottom: 2px solid aliceblue;
      color: aliceblue;
      font-size: 16px;
      outline: none;
    }

    input[type="date"]:focus {
      border-bottom: 2px solid royalblue;
    }

  </style>
</head>
<body>
  <div class="box">
    <form action="formulario.php" method="POST">
    
      <fieldset>
        <legend>Cadastro</legend>

        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required>
          <label for="nome" class="labelInput">Nome completo</label>
        </div>

        <div class="inputBox">
          <input type="password" name="senha" id="senha" class="inputUser" required>
          <label for="senha" class="labelInput">Senha</label>
        </div>

        <div class="inputBox">
          <input type="email" name="email" id="email" class="inputUser" required>
          <label for="email" class="labelInput">Email</label>
        </div>

        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" required>
          <label for="telefone" class="labelInput">Telefone</label>
        </div>

        <p>Sexo:</p>
        <div class="gender-options">
          <label><input type="radio" name="genero" value="feminino" required> Feminino</label>
          <label><input type="radio" name="genero" value="masculino" required> Masculino</label>
          <label><input type="radio" name="genero" value="outro" required> Outro</label>
        </div>

        <div class="inputBox">
          <label for="data_nascimento" class="labelInput">Data de Nascimento</label>
        <br><br>
          <input type="date" name="data_nascimento" id="data_nascimento" required>
        </div>

        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputUser" required>
          <label for="cidade" class="labelInput">Cidade</label>
        </div>

        <div class="inputBox">
          <input type="text" name="estado" id="estado" class="inputUser" required>
          <label for="estado" class="labelInput">Estado</label>
        </div>

        <div class="inputBox">
          <input type="text" name="endereco" id="endereco" class="inputUser" required>
          <label for="endereco" class="labelInput">Endereço</label>
        </div>

        <input type="submit" name="submit" id="submit" value="Cadastrar">
      </fieldset>
    </form>
  </div>
</body>
</html>
