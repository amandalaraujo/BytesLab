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
    <link rel="stylesheet" href="css/style.css">
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
            margin-bottom: 200px; /* Adicionado */
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
            margin-bottom: 200px; /* Adicionado */
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
        .texto-calendar {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            color: black; /* Mude a cor para preto */
            margin-bottom: 20px;
        }
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
            margin-bottom: 150px; /* Adicionado */
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
            font-size: 1.5rem;
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
        font-size: 1.5rem;
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
            color: #545454;
            cursor: pointer;
            background: linear-gradient(90deg, #f591b2, transparent);
        }
        .events .event:nth-child(even){
            background: linear-gradient(90deg, #FFA3BE, transparent);;

        }
        .events .event:hover{
            background: linear-gradient(90deg, #fff, transparent);
        }
        .events .event .title{
            display: flex;
            align-items: center;
            pointer-events: none;
        }
        .events .event .title .event-title{
            font-size: 1.2rem;
            font-weight: 400;
            margin-left: 20px;
        }
        .events .event .title i{
            color: var(--primary-clr);
            font-size: 0.5rem;
        }
        .events .event:hover .title i,
        .events .event:hover .event-time{
            color: #171821;
        }
        .events .event .event-time{
            font-size: 0.8rem;
            font-weight: 400;
            color: #171821;
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
        /* Estilos para a galeria de imagens */
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

        /* CSS -> Logo fim da pagina */
        .logo {
            margin-top: 100px; /* Ajusta a margem superior para mover a imagem para baixo */
            display: flex;
            justify-content: center; /* Centraliza a imagem horizontalmente */
        }

        .logo img {
            width: 200px; /* Aumenta o tamanho da imagem */
            height: auto;
        }

        /* Estilos para o conteúdo principal */
        .main-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh; /* Centraliza o conteúdo no meio da tela */
        }

        .text-content {
            text-align: center;
            margin-top: 10px; /* Espaço entre a imagem e o texto */
            margin-bottom: 10px; /* Espaço acima da linha */
        }

        h1 {
            font-family: 'Emilia', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 28px; /* Diminui o tamanho do texto */
            line-height: 40px;
            letter-spacing: -0.02em;
            background: linear-gradient(188.52deg, rgba(244, 106, 139, 0.84) 60.26%, rgba(142, 62, 81, 0.84) 160.59%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            margin: 10px 0 5px;
        }

        .subtitle {
            font-family: 'Emilia', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 14px; /* Diminui o tamanho do texto */
            line-height: 20px;
            letter-spacing: -0.02em;
            color: rgba(244, 106, 139, 0.85);
        }

        /* Estilos para a linha divisória */
        .divider {
            width: 95%; /* Aumenta o tamanho da linha */
            height: 1px;
            background-color: #d64075;
            margin: 20px auto 0; /* Ajusta a margem */
        }

        /* Estilos para o rodapé */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Mantém os itens centralizados verticalmente */
            padding: 20px; /* Ajusta o padding para posicionar os itens */
            width: 100%; /* Garante que o footer ocupe a largura total */
            box-sizing: border-box; /* Inclui padding e bordas no cálculo da largura */
            background-color: #f8d7e4;
        }

        .footer p {
            margin: 5px 27px; /* Ajusta as margens para aproximar as escritas */
            font-size: 16px; /* Aumenta o tamanho da fonte */
            color: #d64075;
            display: flex;
            align-items: center; /* Alinha o texto verticalmente com o ícone */
        }

        .footer p svg {
            margin-right: 5px; /* Espaço entre o ícone e o texto */
        }

        .footer p:first-child {
            justify-content: flex-start; /* Alinha o primeiro parágrafo à esquerda */
            flex: 1; /* Ocupa o espaço necessário */
        }

        .footer p:nth-child(2) {
            justify-content: center; /* Centraliza o segundo parágrafo */
            flex: 1; /* Ocupa o espaço necessário */
        }

        .footer p:last-child {
            justify-content: flex-end; /* Alinha o terceiro parágrafo à direita */
            flex: 1; /* Ocupa o espaço necessário */
            text-align: right; /* Garante que o texto está alinhado à direita */
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
        <section class="bg-white shadow-md p-8 flex flex-col md:flex-row items-center justify-between mb-150">
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
        <section style="height: 500px;" class=" bg-white shadow-md p-8 mb-150">
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
        <section style="height: 500px;" class="new-section mb-150">
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
        <section>
            <div class="texto-calendar text-center mb-8">
                <h1>AGENDAMENTO</h1>
            </div>
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
                        <div class="event-day"></div>
                        <div class="event-date"></div>
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
        <section class="products-section mb-150">
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
        
        <!-- Image Gallery Section -->
        <section class="products-section mb-150">
            <h2>GALERIA DE IMAGENS</h2>
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
        </section>

        <!-- Logo Section -->
        <section>
                    <figure class="logo">
                    <img src="images/logo.svg" alt="Logo Joelma Alpino" id="logo">
                </figure>
                <!-- Conteúdo principal da página -->
                <main class="main-content">
                    <!-- Título da página -->
                    <div class="text-content">
                        <h1>Joelma Alpino</h1>
                        <p class="subtitle">Nail Designer</p>
                    </div>
                </main>
                <!-- Linha divisória entre o conteúdo principal e o rodapé -->
                <div class="divider"></div>
                <!-- Rodapé da página com informações pessoais -->
                <footer class="footer">
                    <p>Contato: (16) 992023956</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        @joelmaalpinooficial
                    </p>
                    <p>Endereço: Rua Daniel Kujawski - 309 - Ribeirão Preto</p>
                </footer>
                <script src="js/script.js"></script>
            </body>
            </html>
        </section>
    </main>
    <script src="script-calendar.js"></script>
</body>
</html>
