<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);  
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
        $user = $result->fetch_assoc();

        
        if (password_verify($senha, $user['senha'])) {
          
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $user['senha']; 
            header('Location: sistema.php');
            exit;
        } else {
            
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: usuarioesenha.php');
            exit;
        }
    } else {
       
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: usuarioesenha.php');
        exit;
    }

} else {
    
    header('Location: usuarioesenha.php');
    exit;
}
?>
