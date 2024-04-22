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

  include_once('config.php');

  if(isset($_POST['submit'])) {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $tel = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $sexo = isset($_POST['genero']) ? $_POST['genero'] : '';
    $datanasc = isset($_POST['dataNasc']) ? $_POST['dataNasc'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $end = isset($_POST['endereco']) ? $_POST['endereco'] : '';
  

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
  <link rel="stylesheet" href="cad.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Outfit:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <form action="<?= $_SERVER["PHP_SELF"];?>" method="post">
    <fieldset>
      <legend><b>Cadastro de Clientes</b></legend>
      <br>
      <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" required>
        <label for="nome" class="labelinput">Nome Completo</label>
      </div>
      <br>


      <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelinput">E-mail</label>
      </div>
      <br>

      <div class="inputBox">
        <input type="password" name="senha" id="senha" class="inputUser" required>
        <label for="senha" class="labelinput">Senha</label>
      </div>
      <br>

      <div class="inputBox">
        <input type="text" name="telefone" id="telefone" class="inputUser" required>
        <label for="telefone" class="labelinput">Telefone</label>
      </div>
      <br>
      <p>Sexo: </p>
        <input type="radio" name="genero" value="feminino" id="feminino" requierd>
        <label for="feminio">feminino</label>
        <input type="radio" name="genero" value="masculino" id="masculino" requierd>
        <label for="feminio">Masculino</label>
        <input type="radio" name="genero" value="genero " id="genero" requierd>
        <label for="feminio">Outro: </label>
        <br><br>

        <!-- radio ok -->
      <div>
        <label for="data_nasc">Data de Nascimento: </label>
        <input type="date" name="data_nasc" id="data_nasc" required>
      </div>
      <br>
     
      <input type="submit" name="submit" id="submit">
      </div>
    </fieldset>
  </form>
</body>

</html>



</html>
