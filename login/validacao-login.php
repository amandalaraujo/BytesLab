<?php 
  session_start();
  $erro = "";
  print_r($_REQUEST);
  if(isset($_POST['submit']))
  {
    echo "acessou";
    // Acessa 
    include_once('C:\xampp\htdocs\BytesLab\banco\config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    print_r($email);
    print_r($senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);
    
    print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
      $erro = "Credenciais inválidas. Por favor, verifique seu e-mail e senha.";
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      $_SESSION['erro'] = $erro;
      header('Location: login.php');
    } else 
    {
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      header('Location: /byteslab/site/home.php');
    }
  } else {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    $erro = "Credenciais inválidas. Por favor, verifique seu e-mail e senha.";
  }
?>
