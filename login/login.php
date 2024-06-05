<?php
session_start();

if (isset($_SESSION['erro'])) {
    $erro = $_SESSION['erro'];
    unset($_SESSION['erro']);
}

// Lógica para preencher automaticamente os campos de email e senha
$email_cookie = isset($_COOKIE['email']) ? $_COOKIE['email'] : '';
$senha_cookie = isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <title>Login</title>
    <style>
        body {
            font-family: 'Outfit', Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left, #f7e4e4, #ffd2df);
            text-align: center;
        }

        form {
            background: #ffffff;
            margin-left: auto;
            padding: 10px 0;
            border-radius: 0px 15px 15px 0px;
            color: #606060;
        }

        .b-lg {
            border-radius: 0px 15px 15px 0px;
        }

        legend {
            padding: 10px;
            text-align: center;
            font-size: 24px;
        }

        .inputBox {
            position: relative;
            padding: 15px;
            text-align: center;
        }

        .inputUser {
            border: none;
            background: none;
            box-shadow: none;
            padding: 5px;
            border-bottom: 1px solid #A27758;
            outline: none;
            color: #B87743;
            font-size: 15px;
            width: 95%;
            letter-spacing: 1px;
        }

        .labelinput {
            position: absolute;
            top: 0px;
            left: 14px;
            pointer-events: none;
            transition: 0.5s;
            padding-top: 10px;
        }

        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput {
            top: -20px;
            font-size: 15px;
            color: #A27758;
            text-align: center;
        }

        a {
            color: #B87743;
        }

        #submit {
            background-color: #FFA3BE;
            width: min-content;
            border: none;
            padding: 15px;
            color: #f8f8f8;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
        }
        #submit:hover {
            background: #fbb5b5;
        }
        * {
            margin: 0;
            padding: 0;
        }
        .login {
            display: flex;
            align-items: center;
            justify-content: center;
            /* isso aqui é para definir o tamanho da tela */
            min-width: 100vw;
            min-height: 100vh;
        }
        .centralizer {
            display: flex;
            max-width: 1200px;
            width: 100%;
        }

        .login-form {
            display: flex;
            flex: 1;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
        }

        .imglogin-img {
            object-fit: cover;
            /* object fit é pra ir cortando a imagem */
            width: 100%;
            height: 100%;
            border-radius: 15px 0px 0px 15px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.12) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .imglogin {
            flex: 1;
        }

        .login-content {
            flex: 1;
            max-width: 50%;
            background: #ffffff;
            padding: 2rem;
            border-radius: 0 15px 15px 0;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.12) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        @media(max-width: 900px) {
            .imglogin {
                display: none;
            }

            .login-content {
                max-width: 100%;
                border-radius: 15px;
            }
        }
    </style>
</head>
<body>
    <section class="login">
        <div class="centralizer">
            <div class="imglogin">
                <img class="imglogin-img" src="./login-tela.jpg" alt="Login Image">
            </div>
            <div class="login-content">
                <h1 class="text-2xl font-bold mb-4">Entrar</h1>
                <p class="text-gray-600 mb-6">Olá, Bem Vinda! 👋</p>
                <div class="mb-4">
                    <div id="g_id_onload"
                        data-client_id="SEU_CLIENT_ID"
                        data-login_uri="SEU_URL_DE_REDIRECIONAMENTO"
                        data-auto_prompt="false">
                    </div>
                    <div class="g_id_signin w-full"
                        data-type="standard"
                        data-shape="rectangular"
                        data-theme="outline"
                        data-text="sign_in_with"
                        data-size="large"
                        data-logo_alignment="left">
                    </div>
                </div>
                <div style="margin-top:20px;" class="flex items-center justify-center mb-4">
                    <span class="block h-px w-full bg-gray-300"></span>
                    <span class="text-gray-500" style="width: 400px;">Entrar com E-mail</span>
                    <span class="block h-px w-full bg-gray-300"></span>
                </div>
                <?php if (isset($erro)): ?>
                    <p style="color: red;"><?= $erro ?></p>
                <?php endif; ?>
                <form class="space-y-4" action="validacao-login.php" method="POST">
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" value="<?= $email_cookie; ?>" required>
                        <label for="email" class="labelinput">E-mail</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" value="<?= $senha_cookie; ?>" required>
                        <label for="senha" class="labelinput">Senha</label>
                    </div>
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember_me" class="form-checkbox" <?= $email_cookie ? 'checked' : ''; ?>>
                            <span class="ml-2 text-gray-700">Lembre-me</span>
                        </label>
                        <a href="#" class="text-pink-500 text-sm text-indigo-600 hover:underline">Esqueceu a senha?</a>
                    </div>
                    <button type="submit" name="submit" id="submit" class="w-full bg-pink-500 text-white py-2 rounded-md hover:bg-pink-600">Entrar</button>
                    <p class="mt-4 text-center text-gray-600">Não tem uma conta ainda? <a href="formulario.php" class="text-pink-500 hover:underline">Crie sua conta agora!</a></p>
                </form>
            </div>
        </div>
    </section>
    <script>
        function handleCredentialResponse(response) {
            // Decodifique o token JWT do Google
            const responsePayload = decodeJwtResponse(response.credential);
            // Enviar dados para o servidor para validação
            fetch('validacao-login-google.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(responsePayload)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'pagina-protegida.php';
                } else {
                    alert('Erro de login com Google');
                }
            });
        }

        function decodeJwtResponse(token) {
            const base64Url = token.split('.')[1];
            const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
            const jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));

            return JSON.parse(jsonPayload);
        }

        window.onload = function() {
            google.accounts.id.initialize({
                client_id: 'SEU_CLIENT_ID',
                callback: handleCredentialResponse
            });
            google.accounts.id.renderButton(
                document.querySelector('.g_id_signin'), // elemento onde o botão será renderizado
                { theme: 'outline', size: 'large' } // personalização do botão
            );
            google.accounts.id.prompt(); // opcional: faz a solicitação automática de login
        };
    </script>
</body>
</html>
