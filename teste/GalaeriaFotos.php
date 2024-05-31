<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=s  wap" rel="stylesheet">
    <style>
    
        .container-imagem {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2px; /* Parte do espaçamento das fotos*/
        }
        .image-item-imagem {
            flex: 1 1 calc(33% - 10px); /*Espaço de "zoom" das imagens */
            box-sizing: border-box;
            max-width: calc(45% - 10px); 
            position: relative;
        }
        .image-item-imagem img {
            width: 100%; /* Ajustado para ocupar toda a largura do contêiner */
            height: 450px; 
            object-fit: cover; 
            display: block;
        }
        .overlay-imagem {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: rgba(255, 51, 153, 0.3);  /* "Caixa de fundo" opaca */
            backdrop-filter: blur(50px); 
            border-radius: 15px;
            color: pink;
            font-size: 20px;
            text-align: center;
            opacity: 0;
            transition: .5s ease;
            font-family: 'Roboto', sans-serif;
        }
        .overlay-imagem a {
            color: #FFFFFF; /*Cor da escrita @JOELMA */
            text-decoration: none;
            font-family: 'Roboto', sans-serif; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .overlay-imagem img {
            width: 24px;   
            height: 24px; 
            margin-top: 10px;
        }
        .image-item-imagem:hover .overlay-imagem {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="container-imagem">
        <?php
        $images = [
            "NailPhotos/imagem1.jpeg",  //imagens que foram enviadas
            "NailPhotos/imagem3.jpeg",
            "NailPhotos/imagem4.jpeg",
            "NailPhotos/imagem5.jpeg",
            "NailPhotos/imagem6.jpeg",
            "NailPhotos/imagem7.jpeg"
        ];

        foreach ($images as $image) {
            echo '<div class="image-item-imagem">';
            echo '<img src="' . $image . '" alt="Image">';
            echo '<div class="overlay-imagem">
                    <a href="https://www.instagram.com/JOELMAALPINOOFICIAL" target="_blank">
                        @JOELMAALPINOOFICIAL
                        <img src="NailPhotos/insta.png" alt="Instagram">
                    </a>
                </div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>