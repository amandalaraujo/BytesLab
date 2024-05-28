<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joelma Alpino - Unhas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-arch {
            position: relative;
            width: 300px;
            height: 300px;
            background-color: #f8d2da;
            border-radius: 50% 50% 0 0;
            overflow: hidden;
            margin: 0 auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .custom-arch img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
            border: 2px solid #f76a92;
            color: #f76a92;
            background-color: transparent;
            border-radius: 9999px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-outline:hover {
            background-color: #f76a92;
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
        }
        .new-section img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }
        .new-section h3 {
            position: absolute;
            color: white;
            background-color: green;
            padding: 5px 10px;
            border-radius: 5px;
            top: 10px;
            left: 10px;
        }
        .card {
            position: relative;
            width: 300px;
            margin: 0 10px;
        }
        .card-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .text-cinza{
          color: #767676;
        }

        
    </style>
</head>
<body class="bg-pink-50 text-gray-800">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-8">
                <h1 class="text-pink-500 font-semibold text-2xl">Joelma Alpino</h1>
                <nav class="flex space-x-8 text-lg">
                    <a href="#" class="text-gray-700 hover:text-pink-500">HOME</a>
                    <a href="#" class="text-gray-700 hover:text-pink-500">SERVIÇOS</a>
                    <a href="#" class="text-gray-700 hover:text-pink-500">AGENDAMENTO</a>
                    <a href="#" class="text-gray-700 hover:text-pink-500">CONTATO</a>
                </nav>
            </div>
        </div>
    </header>
    <main class="container mx-auto px-6 py-12">
        <section class="bg-white shadow-md p-8 flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-6 md:mb-0 text-center md:text-left">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Unhas um caso de <span class="text-pink-500">amor</span> por elas!</h2>
                <p class="text-gray-700 mb-4 highlight">
                    <span class="font-semibold text-pink-500">Nossa Trajetória</span><br>
                    A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha A Trajetória da Joelha.
                </p>
                <button class="btn-outline">
                    Agende um horário
                </button>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="custom-arch">
                        <img src="http://localhost/byteslab/site/images/unhasAmor.png" alt="Unhas" class="object-cover w-full">
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section class="bg-white shadow-md p-8">
          <div class="flex flex-col md:flex-row justify-around items-center">
              <div class="service-card w-full md:w-1/3 flex flex-col items-center">
                  <img src="http://localhost/byteslab/site/images/cuidadosunhas.png" alt="Cuidados com sua unha" class="w-full h-32 object-cover mb-4">
                  <h3 class="text-xl font-semibold text-cinza mb-2">Cuidados com sua unha</h3>
                  <p class="text-gray-700 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="service-card w-full md:w-1/3 flex flex-col items-center">
                  <img src="http://localhost/byteslab/site/images/nail-art.png" alt="Nail Art" class="w-full h-32 object-cover mb-4">
                  <h3 class="text-xl font-semibold text-cinza mb-2">Nail Art</h3>
                  <p class="text-gray-700 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="service-card w-full md:w-1/3 flex flex-col items-center">
                  <img src="http://localhost/byteslab/site/images/extensao-fibra.png" alt="Extensões Gel & Fibra de Vidro" class="w-full h-32 object-cover mb-4">
                  <h3 class="text-xl font-semibold text-cinza mb-2">Extensões Gel & Fibra de Vidro</h3>
                  <p class="text-gray-700 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
          </div>
      </section>


        <!-- New Section -->
        <section class="new-section">
            <div class="card">
                <img src="http://localhost/byteslab/site/images/unhasGel.png" alt="Unhas em Gel">
                <div class="card-text">UNHAS EM GEL<br>TABELA DE VALORES</div>
            </div>
            <div class="card">
                <img src="http://localhost/byteslab/site/images/unhasTradicionais.png" alt="Unhas Tradicionais">
                <div class="card-text">UNHAS TRADICIONAIS<br>TABELA DE VALORES</div>
            </div>
        </section>
    </main>
</body>
</html>
