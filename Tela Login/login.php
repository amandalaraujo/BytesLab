<!-- código html -->
 <!DOCTYPE html>

 <html lang="pt-br">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Crude</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Outfit:wght@300&display=swap" rel="stylesheet">
    </head>

<body>
 <section class="login">
     <div class="centralizer">
        <form  class="login-form" action="teste.php" method="POST">
        <?php
          session_start();
          if (isset($_SESSION['erro'])) {
              $erro = $_SESSION['erro'];
              echo '<p style="color: red;">' . $erro . '</p>';
              unset($_SESSION['erro']);
          }
          ?>

          <h1>Entre: </h1>
          <div class="inputBox">
            <input type="text" name="email" id="email" class="inputUser" required>
              <label for="email" class="labelinput">E-mail</label>
          </div>
          <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required>
            <label for="senha" class="labelinput">Senha</label>
          </div>
          <input type="submit" name="submit" id="submit" value="Entrar">
          <p>Ainda não possui cadastro? <a href="formulario.php">Cadastre-se!</a></p>
        </form>
        <div class="imglogin" >
              <img class="imglogin-img"  src="./15410.jpg" alt="" > 
        </div>
    </div>
  </section>
</body>

</html>


