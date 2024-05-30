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
    <link rel="stylesheet" href="style-calendar.css"/>
    <link 
        rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
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
        :root{
        --primary-clr: #FFA3BE;
        }

        /*CSS do calendario*/
        .container-calendar {
            position: relative;
            width: 100%;
            max-width: 1200px;
            min-height: 850px;
            margin: 0 auto;
            padding: 40px;
            color: #545454;
            display: flex;
            border-radius: 10px;
            background-color: #f8d2da;
        }
        .left {
            width: 70%;
            padding: 20px;
        }
        .calendar {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-between;
            color: #545454; /*color do texto -> mes/ano*/
            border-radius: 5px;
            background-color: #f8d2da; /*background-color do calendario*/
        }
        .calendar::before,
        .calendar::after {
            content: " ";
            position: absolute;
            top: 50%;
            left: 100%;
            width: 12px;
            height: 97%;
            border-radius: 0 5px 5px 0;
            background-color: #d3d5d6d;
            transform: translateY(-50%);
        }
        .calendar::before {
            height: 94%;
            left: calc(100% + 12px);
        }
        .calendar .month{
            width: 100%;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px;
            font-size: 1.2rem;
            font-weight: 500;
            text-transform: capitalize;
        }
        .calendar .month .prev,
        .calendar .month .next{
            cursor: pointer;
        }
        .calendar .month .prev:hover,
        .calendar .month .next:hover {
            color: var(--primary-clr);
        }
        .calendar .weekdays{
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            font-size: 1rem;
            font-weight: 500;
            text-transform: capitalize;
        }
        .calendar .weekdays div {
            width: 14.28%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .calendar .days{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0 20px;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .calendar .days .day {
            width: 14.28%;
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #878789; /*color -> dias do calendario*/
            border: 1px solid #f5f5f5;
        }
        .calendar .day:not(.prev-date , .next-date):hover {
            color: #fff;
            background-color: var(--primary-clr);
        }
        .calendar .days .prev-date,
        .calendar .days .next-date{
            color: #b3b3b3;
        }
        .calendar .days .active {
            position:  relative;
            font-size: 2rem;
            color: #fff;
            background-color: var(--primary-clr);
        }
        .calendar .days .active::before {
            content: ' ';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 10px 2px var(--primary-clr);
        }
        .calendar .days .today {
            font-size: 2rem;
        }
        .calendar .days .event{
            position: relative;
        }
        .calendar .days .event::after {
            content: ' ';
            position: absolute;
            bottom: 10px;
            left: 50%;
            width: 75%;
            height: 6px;
            border-radius: 30px;
            transform: translateX(-50%);
            background-color: #f47daf; /*color -> bottom evento*/
        }
        .calendar .event:hover::after {
            background-color: #fff;
        }
        .calendar .active.event::after {
            background-color: #fff;
            bottom: 20px;
        }
        .calendar .active.event{
            padding-bottom: 10px;
        }
        .calendar .goto-today{
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 5px;
            padding: 0 20px;
            margin-bottom: 20px;
            color: var(--primary-clr);
        }
        .calendar .goto-today .goto{
            display: flex;
            align-items: center;
            border-radius: 5px;
            overflow: hidden;
            border: 1px solid var(--primary-clr);
        }
        .calendar .goto-today .goto input{
            width: 100%;
            height: 30px;
            outline: none;
            border: none;
            border-radius: 5px;
            padding: 0 20px;
            color: var(--primary-clr);
            border-radius: 5px;
        }
        .calendar .goto-today button {
            padding: 5px 10px;
            border: 1px solid var(--primary-clr);
            border-radius: 5px;
            background-color: transparent;
            cursor: pointer;
            color: #f47daf;
        }
        .calendar .goto-today button:hover{
            color: #fff;
            background-color: var(--primary-clr);
        }
        .calendar .goto-today .goto buttor{
            border: none;
            border-left: 1px solid var(--primary-clr);
            border-radius: 0;
        }

        /*Bloco de eventos*/
        .container .right {
            position: relative;
            width: 40%;
            min-height: 100%;
            padding: 20px;
            background-color: #f8d2da; /*cor do calendário*/
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 5px; /*borda do calendário*/
        }
        .right .today-date{
            width: 100%;
            height: 50px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            padding-left: 70px;
            margin-top: 50px;
            margin-bottom: 20px;
            text-transform: capitalize;
        }
        .today-date .event-day{
        font-size: 2rem;
        font-weight: 500;
        }
        .today-date .event-date{
            font-size: 1.2rem;
            font-weight: 400;
            color: #545454;
        }
        .events{
            width: 100%;
            height: 100%;
            max-height: 600px;
            overflow-x: hidden;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            padding: 4px;
        }
        .events .event{
            position: relative;
            width: 95%;
            min-height: 70px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            gap: 5px;
            padding: 0 20px;
            padding-left: 50px;
            color: #ebf0da;
            cursor: pointer;
            background: linear-gradient(90deg, #f591b2, transparent);
        }
        .events .event:nth-child(even){
            background: transparent;
        }
        .events .event:hover{
            background: linear-gradient(90deg, #d3d5d6d7, transparent);
        }
        .events .event .title{
            display: flex;
            align-items: center;
            pointer-events: none;
        }
        .events .event .title .event-title{
            font-size: 1rem;
            font-weight: 400;
            margin-left: 20px;
        }
        .events .event .title i{
            color: var(--primary-clr);
            font-size: 0.5rem;
        }
        .events .event:hover .title i,
        .events .event:hover .event-time{
            color: #fff;
        }
        .events .event .event-time{
            font-size: 0.8rem;
            font-weight: 400;
            color: #d8d8da;
            margin-left: 15px;
            pointer-events: none;
        }

        /*Icone "check na barra de tarefas"*/
        .events .event::after{
            content: "✓";
            position: absolute;
            top: 50%;
            right: 0;
            font-size: 3rem;
            display: none;
            align-items: center;
            justify-content: center;
            opacity: 0.3;
            color: var(--primary-clr);
            transform: translateY(-50%);
        }
        .events .event:hover::after{
            display: flex;
        }
        .events .no-event{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 500;
            color: #54545094;
        }

        /*Eventos do Calendario*/
        .add-event-wrapper {
            position: absolute;
            bottom: 100px;
            left: 50%;
            width: 90%;
            max-height: 0;
            overflow: hidden;
            border-radius: 5px;
            background-color: #fff;
            transform: translateX(-50%);
            transition: max-height 0.5s;
        }
        .add-event-wrapper.active {
            max-height: 300px;
        }
        .add-event-header {
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            color: #373c4f;
            border-bottom: 1px solid #f5f5f5;
        }
        .add-event-header .close {
            font-size: 1.5rem;
            cursor: pointer;
        }
        .add-event-header .close:hover {
            color: var(--primary-clr);
        }
        .add-event-header .title {
            font-size: 1.2rem;
            font-size: 500;

        }
        .add-event-body {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            gap: 5px;
            padding: 20px;
        }
        .add-event-body .add-event-input{
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }
        .add-event-body .add-event-input input{
            width: 100%;
            height: 100%;
            outline: none;
            border: none;
            border-bottom: 1px solid #f5f5f5;
            padding: 0 10px;
            font-size: 1rem;
            font-weight: 400;
            color: #373c4f;
        }
        .add-event-body .add-event-input input::placeholder {
            color: #a5a5a5;
        }
        .add-event-body .add-event-input input:focus{
            border-color: var(--primary-clr);
        }
        .add-event-body .add-event-input input:focus::placeholder{
            color: var(--primary-clr);
        }
        .add-event-footer{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .add-event-btn{
            height: 40px;
            font-size: 1rem;
            font-weight: 500;
            outline: none;
            border: none;
            color: #fff;
            background-color: var(--primary-clr);
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid var(--primary-clr);
        }
        .add-event-btn:hover {
            color: var(--primary-clr);
            background-color: transparent;
        }
        .add-event {
            position: absolute;
            bottom: 30px;
            right: 30px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: #545454;
            border: 2px solid #545454;
            opacity: 0.5;
            border-radius: 50%;
            background-color: transparent;
            cursor: pointer.
        }
        .add-event:hover {
            opacity: 1;
        }
        .add-event i {
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-pink-30 text-gray-500">
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

        <!-- Calendar Section -->
        <section class="bg-white shadow-md p-8">
            <div class="container-calendar">
                <div class="left">
                    <div class="calendar">
                        <div class="month">
                            <i class="fa fa-angle-left prev"></i>
                            <div class="date"></div>
                            <i class="fa fa-angle-right next"></i>
                        </div>
                        <!--div dos meses-->
                        <div class="weekdays">
                            <div>dom</div>
                            <div>seg</div>
                            <div>ter</div>
                            <div>qua</div>
                            <div>qui</div>
                            <div>sex</div>
                            <div>sáb</div>
                        </div>
                        <!--div dos dias-->
                        <div class="days">
                            <!--days adicionado no JS-->
                        </div>
                        <div class="goto-today">
                            <div class="goto">
                                <input type="text" placeholder="mm/yyyy" class="date-input">
                                <button class="goto-btn">Pesquisar</button>
                            </div>
                            <button class="today-btn">Hoje</button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="today-date">
                        <div class="event-day">Qua</div>
                        <div class="event-date">16 November 2024</div>
                    </div>
                    <div class="events">
                        <!--add eventos no JS-->
                    </div>
                    <div class="add-event-wrapper">
                        <div class="add-event-header">
                            <div class="title">Adicionar Evento</div>
                            <i class="fas fa-times close"></i>
                        </div>
                        <!--inicio da div eventos-->
                        <div class="add-event-body">
                            <div class="add-event-input">
                                <input type="text" placeholder="Nome do Evento" class="event-name"/>
                            </div>
                            <div class="add-event-input">
                                <input 
                                type="text" 
                                placeholder="Horário inicial" 
                                class="event-time-from"
                                />
                            </div>
                            <div class="add-event-input">
                                <input 
                                type="text" 
                                placeholder="Horário final" 
                                class="event-time-to"
                                />
                            </div>
                            <!--fim da div eventos-->
                        </div>
                        <div class="add-event-footer">
                            <button class="add-event-btn">salvar evento</button>
                        </div>
                    </div>
                </div>
                <button class="add-event">
                    <i class="fas fa-plus"></i>
                </button>
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
    <script src="script-calendar.js"></script>
</body>
</html>
