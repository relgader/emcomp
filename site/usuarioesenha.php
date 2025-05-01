<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-image: linear-gradient(90deg, black, blue, royalblue, black);
            text-align: center;
            margin: 0;
            height: 100vh;
        }
        .login-container {
            background-color: rgba(0, 0, 0, 0.85);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 70px;
            border-radius: 25px;
            color: white;
            box-shadow: 0px 0px 20px black;
            width: 400px;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: none;
            outline: none;
            font-size: 14px;
            width: 80%;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .inputSubmit {
            background-color: cornflowerblue;
            border-radius: 10px;
            padding: 10px;
            width: 90%;
            color: aliceblue;
            border: none;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .inputSubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }
        a {
            color: cornflowerblue;
            text-decoration: none;
            font-size: 12px;
        }
        a:hover {
            text-decoration: underline;
        }
        p {
            font-size: 14px;
            margin-top: 20px;
        }
        img {
            margin-top: 20px;
            width: 150px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>

        <!-- Apenas um formulário -->
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Usuário" required><br><br>
            <input type="password" name="senha" placeholder="Senha" required><br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>

        <img src="mago.jfif" alt="MAGO" />
    </div>

</body>
</html>
