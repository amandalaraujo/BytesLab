<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joelma Alpino - Unhas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        /* Estilos existentes */
        .custom-arch {
            position: relative;
            width: 300px;
            height: 400px;
            background-color: #f8d2da;
            border-radius: 150px 150px 0 0;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .highlight {
            display: inline-block;
            position: relative;
        }
        .highlight::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 0.5em;
            bottom: 0;
            left: 0;
            background: #FFA3BE;
            z-index: -1;
        }
        .btn-outline {
            border: 2px solid #FFA3BE;
            background-color: transparent;
            border-radius: 9999px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-outline:hover {
            background-color: #FFA3BE;
            color: #fff;
        }
        .service-card {
            text-align: center;
            padding: 20px;
        }
        .service-card img {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
        }
        .new-section {
            background-color: #f8d2da;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .card {
            position: relative;
            width: 300px;
            margin: 0 10px;
            overflow: hidden; /* Certifica-se de que a imagem não saia do contêiner */
            z-index: 1; /* Ensure it is in front of the background images */
        }
        .card-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background-color: rgba(0, 0, 0, 0.0);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1.3rem;
        }

        .image-overlap {
            position: absolute;
            top: 0;
            left: 20px; /* Ajuste este valor para deslocar a imagem para a direita */
            z-index: 1;
            width: 100%;
            height: 100%;
            pointer-events: none;
            object-fit: cover;
        }
        .outlined-text {
            position: relative;
            color: white;
            background-color: rgba(0, 0, 0, 0.0);
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 1.3rem;
            border: 2px solid white; /* Outline branco ao redor do texto */
        }
        .fit-image {
            width: 100%;
            height: 300px;
            object-fit: cover; /* Faz com que a imagem cubra o contêiner sem deformar */
            border-radius: 15px;
        }
        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1; /* Ensure it is behind other content */
        }
        .background-image:nth-child(1) {
            top: -10%;
            left: 2%;
            transform: rotate(0deg); /* Adjust rotation angle if needed */

        }

        .background-image:nth-child(2) {
            bottom: -20%;
            right: 3%;
            transform: rotate(75deg); /* Adjust rotation angle if needed */
        }
        .background-image {
            position: absolute;
            width: 30%; /* Adjust width as needed */
            height: auto;
            opacity: 0.7; /* Adjust opacity as needed */
            transform: rotate(30deg); /* Adjust rotation angle if needed */
            z-index: 0; /* Ensure it is behind other content */
        }
        .relative{
            position: relative;
        }

        /* Estilos para a nova seção */
        .products-section {
            background-color: #f8d2da;
            padding: 40px;
            text-align: center;
            position: relative;
        }
        .products-section h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            color: #555;
            margin-bottom: 40px;
        }
        .product-card {
            display: inline-block;
            margin: 20px;
        }
        .product-card img {
            width: 120px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }
        .product-card h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 5px;
        }
        .product-card p {
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body class="bg-pink-100 text-gray-500">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-pink-300 font-semibold text-2xl" style="font-family:Emilia;">Joelma Alpino</h1>
            <div class="flex items-center space-x-8">
                <nav class="flex space-x-8 text-lg">
                    <a href="#" style="font-family:Inter;" class="text-gray-500 hover:text-pink-500">HOME</a>
                    <a href="#" style="font-family:Inter;" class="text-gray-500 hover:text-pink-500">SERVIÇOS</a>
                    <a href="#" style="font-family:Inter;" class="text-gray-500 hover:text-pink-500">AGENDAMENTO</a>
                    <a href="#" style="font-family:Inter;" class="text-gray-500 hover:text-pink-500">CONTATO</a>
                </nav>
            </div>
        </div>
    </header>
    <main class="container mx-auto px-6 py-12">
        <section class="bg-white shadow-md p-8 flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-6 md:mb-0 text-center md:text-left">
                <h2 style="font-size: 50px; font-family:Cormorant Garamond" class="text-2xl font-semibold text-cinza mb-4">Unhas <br><br> um caso de <span style="font-family:Corinthia; font-size:80px;" class="text-pink-300">amor</span> <br> <br> por elas!</h2> <br>
                <p class=" text-gray-500 mb-4 highlight">
                    <span style="font-family: Corinthia; font-size:40px;" class="font-semibold text-pink-300">Nossa </span> <span style="font-family: Cormorant Garamond;font-weight: bold;font-size: 30px;">Trajetória</span><br>
                    A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha.
                </p>
                <button  class="text-gray-500 btn-outline">
                    Agende um horário
                </button>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="background-overlay">
                        <img src="http://localhost/byteslab/site/images/brilhos.png" alt="Brilhos Dourados" class="background-image">
                    </div>
                    <div class="custom-arch"></div>
                    <img src="http://localhost/byteslab/site/images/unhasAmor.png" alt="Unhas" class="image-overlap">
                </div>
            </div>
            </div>
        </section>

        <!-- Services Section -->
        <section style="height: 500px;" class=" bg-white shadow-md p-8 ">
            <div class="flex flex-col md:flex-row justify-around items-center">
                <div class="service-card w-full md:w-1/3 flex flex-col items-center">
                    <img src="http://localhost/byteslab/site/images/cuidadosunhas.png" alt="Cuidados com sua unha" class="w-full h-32 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-cinza mb-2">Cuidados com sua unha</h3>
                    <p class="text-gray-700 text-center">Tratamentos personalizados para fortalecer e revitalizar suas unhas.</p>
                </div>
                <div class="service-card w-full md:w-1/3 flex flex-col items-center">
                    <img src="http://localhost/byteslab/site/images/nail-art.png" alt="Nail Art" class="w-full h-32 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-cinza mb-2">Nail Art</h3>
                    <p class="text-gray-700 text-center">Transforme suas unhas em obras de arte com designs únicos e criativos.</p>
                </div>
                <div class="service-card w-full md:w-1/3 flex flex-col items-center">
                    <img src="http://localhost/byteslab/site/images/extensao-fibra.png" alt="Extensões Gel & Fibra de Vidro" class="w-full h-32 object-cover mb-4">
                    <h3 class="text-xl font-semibold text-cinza mb-2">Extensões Gel & Fibra de Vidro</h3>
                    <p class="text-gray-700 text-center">Unhas longas e elegantes com extensões duráveis e acabamento natural.</p>
                </div>
            </div>
        </section>
        <!-- New Section -->
        <section style="height: 500px;" class="new-section">
            <div class="background-overlay">
                <img src="http://localhost/byteslab/site/images/brilhos.png" alt="Brilhos Dourados" class="background-image">
                <img src="http://localhost/byteslab/site/images/brilhos.png" alt="Brilhos Dourados" class="background-image">
            </div>
            <div class="card">
                <img src="http://localhost/byteslab/site/images/unhasGel.jpeg" alt="Unhas em Gel" class="fit-image">
                <div class="card-text">
                    <span class="outlined-text">UNHAS EM GEL</span>
                    <br>TABELA DE VALORES
                </div>
            </div>
            <div class="card">
                <img src="http://localhost/byteslab/site/images/unhasTradicionais.jpeg" alt="Unhas Tradicionais" class="fit-image">
                <div class="card-text">
                    <span class="outlined-text">UNHAS TRADICIONAIS</span>
                    <br>TABELA DE VALORES
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="products-section">
            <h2>NOSSOS PRODUTOS ESPECIALIZADOS</h2>
            <div class="product-card">
                <img src="http://localhost/byteslab/site/images/esmalte-base-coat.png" alt="Base Coat">
                <h3>Base Coat</h3>
                <p>Film shadow / No.5 oz</p>
            </div>
            <div class="product-card">
                <img src="http://localhost/byteslab/site/images/esmalte-gek-polish.png" alt="Gel Polish">
                <h3>Gel Polish</h3>
                <p>Sorbet fine / No.5 oz</p>
            </div>
            <div class="product-card">
                <img src="http://localhost/byteslab/site/images/esmalte-top-coat.png" alt="Top Coat">
                <h3>Top Coat</h3>
                <p>Summer mirage / No.5 oz</p>
            </div>
            <div class="product-card">
                <img src="http://localhost/byteslab/site/images/esmalte-matte.png" alt="Matte Polish">
                <h3>Matte Polish</h3>
                <p>Blue Paletts / No.5 oz</p>
            </div>
        </section>
    </main>
</body>
</html>
