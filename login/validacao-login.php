<?php 
session_start();
$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('C:\xampp\htdocs\BytesLab\banco\config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o usuário e senha estão corretos
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1) {
        $erro = "Credenciais inválidas. Por favor, verifique seu e-mail e senha.";
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $_SESSION['erro'] = $erro;
        header('Location: login.php');
        exit();
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        
        // Se a opção "Remember me" estiver marcada, definir um cookie
        if (isset($_POST["remember_me"]) && $_POST["remember_me"] == "on") {
            setcookie('email', $email, time() + (86400 * 30), "/"); // Cookie válido por 30 dias
            setcookie('senha', $senha, time() + (86400 * 30), "/");
        } else {
            // Se a opção não estiver marcada, apagar os cookies existentes
            setcookie('email', '', time() - 3600, "/");
            setcookie('senha', '', time() - 3600, "/");
        }
        
        header('Location: /byteslab/site/home.php');
        exit();
    }
} else {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    $_SESSION['erro'] = $erro;
}
?>
