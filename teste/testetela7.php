<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }
        .image-item {
            flex: 1 1 calc(33% - 20px);
            box-sizing: border-box;
            max-width: calc(33% - 20px);
            position: relative;
        }
        .image-item img {
            width: 95%;
            height: 450px; /* Defina uma altura fixa para uniformidade */
            object-fit: cover; /* Mantém a proporção e cobre a área definida */
            display: block;
        }
        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px); /* Adiciona o efeito de desfoque */
            border-radius: 15px;
            color: pink;
            font-size: 20px;
            text-align: center;
            opacity: 0;
            transition: .5s ease;
            font-family: 'Roboto', sans-serif; /* Adiciona a fonte Roboto */
        }
        .overlay a {
            color: pink;
            text-decoration: none;
            font-family: 'Roboto', sans-serif; /* Adiciona a fonte Roboto */
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .overlay img {
            width: 24px;  /* Ajuste do tamanho do ícone */
            height: 24px; /* Ajuste do tamanho do ícone */
            margin-top: 10px;
        }
        .image-item:hover .overlay {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $images = [
            "NailPhotos/imagem1.jpeg",
            "NailPhotos/imagem3.jpeg",
            "NailPhotos/imagem4.jpeg",
            "NailPhotos/imagem5.jpeg",
            "NailPhotos/imagem6.jpeg",
            "NailPhotos/imagem7.jpeg"
        ];

        foreach ($images as $image) {
            echo '<div class="image-item">';
            echo '<img src="' . $image . '" alt="Image">';
            echo '<div class="overlay">
                    <a href="https://www.instagram.com/JOELMAALPINOOFICIAL" target="_blank">
                        @JOELMAALPINOOFICIAL
                        <img src="NailPhotos/instagram.svg" alt="Instagram">
                    </a>
                </div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
