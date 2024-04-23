<html>
<?php 
  // if(isset($_POST['submit']))
  // {
  //   print_r('Nome: ' . $_POST['nome']);
  //   print_r('<br>');
  //   print_r('E-mail: ' . $_POST['email']);
  //   print_r('<br>');
  //   print_r('Genero: ' . $_POST['genero']);
  //   print_r('<br>');
  //   print_r('Data de Nascimento: ' . $_POST['dataNasc']);
  //   print_r('<br>');
  //   print_r('Endereço: ' . $_POST['endereco']);
  //   print_r('<br>');
  //   print_r('Cidade: ' . $_POST['cidade']);
  //   print_r('<br>');
  //   print_r('Estado: ' . $_POST['estado']);
  // }

  ///////////////////////////////////
  // echo "Nome:  $nome <br>";
  // echo "email: $email <br>";
  // echo "Telefone: $tel <br>";
  // echo "Genero: $genero <br>";
  // echo "dataNasc: $dataNasc <br>";
  // echo "Nome: $nome <br>";
  // echo "Nome: $nome <br>";
  // echo "Nome: $nome <br>";
  // echo "Nome: $nome <br>";
  /////////////////////////////////////

  include_once('C:\xampp\htdocs\BytesLab\banco\config.php');

  if(isset($_POST['submit'])) {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $tel = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $sexo = isset($_POST['genero']) ? $_POST['genero'] : '';
    $datanasc = isset($_POST['dataNasc']) ? $_POST['dataNasc'] : '';

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$email','$senha','$tel','$sexo','$datanasc','$cidade','$estado','$end')");

  header('Location: login.php');
  }
    
  // $query = "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$tel','$sexo','$datanasc','$cidade','$estado','$end')";

  // $result = mysqli_query($conexao, $query);
 // -> Outra maneira de fazer. 
?>



<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro | Joelma Nail Designer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="formulario.css">
</head>

<body>
  <form class="form" action="<?= $_SERVER["PHP_SELF"];?>" method="post">
  <p class="title">Cadastro</p>
    <p class="message">Cadastre-se para realizar o seu agendamento. </p>
       
    <label>
        <input class="input" type="text" id="nome" placeholder="" required="">
        <span>Nome Completo</span>
    </label>
    <label>
        <input class="input" type="date" id="data_nasc" placeholder="" required="">
        <span>Data Nascimento</span>
    </label>
    <label>
        <input class="input" type="text" id="telefone" placeholder="" required="">
        <span>Telefone</span>
    </label>     
    <label>
        <input class="input" type="text" id="email" placeholder="" required="">
        <span>Email</span>
    </label> 

    <label>
        <input class="input" type="password" id="senha" placeholder="" required="">
        <span>Senha</span>
    </label>
    <label>
        <input class="input" type="password" id="senha" placeholder="" required="">
        <span>Confirme a senha</span>
    </label>
    <button class="submit" id="submit">Cadastrar</button>
    <p class="signin" style="color: #606060; ">Já possui conta? <a href="login.php">Faça o login</a> </p>
</form>
</body>
</html>

