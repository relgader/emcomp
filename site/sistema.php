<?php
session_start();
print_r($_SESSION);
if (isset($_SESSION["email"]) && !isset($_SESSION['senha'])) 
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: usuarioesenha.php');
}    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>

<body>
    <h1>Acessou o sistema</h1>  
</body>
</html>

