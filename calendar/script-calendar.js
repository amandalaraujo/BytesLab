//CALENDARIO -> JS
const calendar = document.querySelector(".calendar"),
    date = document.querySelector(".date"),
    daysContainer = document.querySelector(".days"),
    prev = document.querySelector(".prev"),
    next = document.querySelector(".next"),
    todayBtn = document.querySelector(".today-btn"),
    gotoBtn = document.querySelector(".goto-btn"),
    dateInput = document.querySelector(".date-input"),
    eventDay = document.querySelector(".event-day"),
    eventDate = document.querySelector(".event-date"),
    eventsContainer = document.querySelector(".events"),
    addEventSubmit = document.querySelector(".add-event-btn");

let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

const months = [
    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", 
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
];

const daysOfWeek = [
    "Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"
];

// Array de eventos entrada padrão para teste:
// const eventsArr = [
//     {
//         day: 26,
//         month: 5,
//         year: 2024,
//         events: [
//             {
//                 title: "Event 1 loren ipsun dolar sit tersad dasrs ",
//                 time: "10:00 AM",
//             },
//             {
//                 title: "Event 2",
//                 time: "11:00 AM",
//             },
//         ],
//     },
//     {
//         day: 28,
//         month: 5,
//         year: 2024,
//         events: [
//             {
//                 title: "Event 1 loren ipsun dolar sit tersad dasrs ",
//                 time: "10:00 AM",
//             },
//         ],
//     },
// ];

//set a empty array
let eventsArr = [];

//then call get
getEvents();

//Funcao para adicionar os dias: 
function initCalendar() {
    //para obter os dias do mes e o mes atual todos os dias e os dias do proximo mes
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const prevLastDay = new Date(year, month, 0);
    const prevDays = prevLastDay.getDate();
    const lastDate = lastDay.getDate();
    const day = firstDay.getDay();
    const nextDays = 7 - lastDay.getDay() - 1;

    //atualizar data no topo do calendario
    date.innerHTML = months[month] + " " + year;

    //adicionando dias
    let days = "";

    //dias do mes anterior
    for(let x = day; x > 0; x--){
        days += <div class="day prev-date">${prevDays - x + 1}</div>;
    }

    //dias do mes atual
    for(let i = 1; i <= lastDate; i++){
        //verificar se o evento esta presente no dia atual
        let event = false;
        eventsArr.forEach((eventObj) => {
            if (
                eventObj.day === i &&
                eventObj.month === month + 1 &&
                eventObj.year === year
            ) {
                //if -> evento encontrado 
                event = true;
            }
        });

        if (
            i === new Date().getDate() && 
            year === new Date().getFullYear() && 
            month === new Date().getMonth()
        ) {
            activeDay = i;
            getActiveDay(i);
            updateEvents(i);
            
            //se o evento for encontrado também adiciona a classe do evento
            //adiciona o dia ativo na inicialização
            if (event){
                days += <div class="day today active event">${i}</div>;
            } else {
                days += <div class="day today active">${i}</div>;
            }
        }
        //adicione o restante
        else {
            if (event){
                days += <div class="day event">${i}</div>;
            } else {
                days += <div class="day">${i}</div>;
            }
        }
    }

    //dias do proximo mes
    for(let j = 1; j <= nextDays; j++){
        days += <div class="day next-date">${j}</div>;
    }

    daysContainer.innerHTML = days;

    //adicionar listner apos inicializacao do calendario
    addListner();
}

initCalendar();

//mes anterior
function prevMonth(){
    month--;
    if(month < 0){
        month = 11;
        year--;
    }
    initCalendar();
}

//proximo mes
function nextMonth(){
    month++;
    if(month > 11){
        month = 0;
        year++;
    }
    initCalendar();
}

//adicione evento Listnner no dia anterior e no proximo
prev.addEventListener("click", prevMonth);
next.addEventListener("click", nextMonth);

//permite ir para a data (busca de pesquisa), e ir para o dia de hoje
todayBtn.addEventListener("click", () => {
    today = new Date();
    month = today.getMonth();
    year = today.getFullYear();
    initCalendar();
});

dateInput.addEventListener("input", (e) => {
    //permiti apenas numeros, remove qualquer outra coisa
    dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
    if(dateInput.value.length === 2){
        //add uma barra entre os 2 numeros
        dateInput.value += "/";
    }
    if(dateInput.value.length > 7){
        //nao permita mais de 7 caracteres
        dateInput.value = dateInput.value.slice(0, 7);
    }
    //if -> retrocesso pressionado
    if(e.inputType === "deleteContentBackward"){
        if(dateInput.value.length === 3){
            dateInput.value = dateInput.value.slice(0, 2);
        }
    }
});

gotoBtn.addEventListener("click", gotoDate);

//funcao para ir para a data inserida
function gotoDate(){
    const dateArr = dateInput.value.split("/");
    //validacao da data
    if(dateArr.length === 2){
        if(dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4){
            month = dateArr[0] - 1;
            year = dateArr[1];
            initCalendar();
            return;
        } 
    }
    //if -> data invalida
    alert("data inválida");
}

//Eventos:
const addEventBtn = document.querySelector(".add-event"),
    addEventContainer = document.querySelector(".add-event-wrapper"),
    addEventCloseBtn = document.querySelector(".close"),
    addEventTitle = document.querySelector(".event-name"),
    addEventFrom = document.querySelector(".event-time-from"),
    addEventTo = document.querySelector(".event-time-to");

addEventBtn.addEventListener("click", () => {
    addEventContainer.classList.toggle("active");
});
addEventCloseBtn.addEventListener("click", () => {
    addEventContainer.classList.remove("active");
});

document.addEventListener("click", (e) => {
    //if -> clique fora
    if(e.target !== addEventBtn && !addEventContainer.contains(e.target)){
        addEventContainer.classList.remove("active");
    }
});

//permitir apenas 50 caracteres no titulo
addEventTitle.addEventListener("input", (e) => {
    addEventTitle.value = addEventTitle.value.slice(0, 50);
});

//formato de hora -> De e Ate hora
addEventFrom.addEventListener("input", (e) => {
    //remover qualquer outro numero
    addEventFrom.value = addEventFrom.value.replace(/[^0-9:]/g, "");
    //se dois numeros forem inseridos, adicao automatica:
    if(addEventFrom.value.length === 2){
        addEventFrom.value += ":";
    }
    //nao deixe o usuario inserir mais de 5 caracteres
    if(addEventFrom.value.length > 5){
        addEventFrom.value = addEventFrom.value.slice(0, 5);
    }
});


addEventTo.addEventListener("input", (e) => {
    //remover qualquer outro número
    addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
    //if -> dois numeros inseridos na adicao automatica:
    if(addEventTo.value.length === 2){
        addEventTo.value += ":";
    }
    //nao deixe o usuario inserir mais de 5 caracteres
    if(addEventTo.value.length > 5){
        addEventTo.value = addEventTo.value.slice(0, 5);
    }
});

addEventSubmit.addEventListener("click", () => {
    const eventTitle = addEventTitle.value;
    const eventTimeFrom = addEventFrom.value;
    const eventTimeTo = addEventTo.value;

    //validacao
    if(eventTitle === "" || eventTimeFrom === "" || eventTimeTo === ""){
        alert("Por favor, preencha todos os campos");
        return;
    }

    //validacao de tempo correto
    const timeFromArr = eventTimeFrom.split(":");
    const timeToArr = eventTimeTo.split(":");
    if(timeFromArr.length !== 2 || timeToArr.length !== 2 || timeFromArr[0] > 23 || timeFromArr[1] > 59 || timeToArr[0] > 23 || timeToArr[1] > 59){
        alert("Formato de hora inválido");
        return;
    }

    //verifica a hora 
    const timeFrom = convertTime(eventTimeFrom);
    const timeTo = convertTime(eventTimeTo);

    const newEvent = {
        title: eventTitle,
        time: timeFrom + " - " + timeTo,
    };

    let eventAdded = false;
    if(eventsArr.length > 0){
        eventsArr.forEach((item) => {
            if(
                item.day === activeDay &&
                item.month === month + 1 &&
                item.year === year
            ){
                item.events.push(newEvent);
                eventAdded = true;
            }
        });
    }

    //if -> evento nao encontrado, adicionar novo evento no array de eventos
    if(!eventAdded){
        eventsArr.push({
            day: activeDay,
            month: month + 1,
            year: year,
            events: [newEvent],
        });
    }

    addEventContainer.classList.remove("active");
    addEventTitle.value = "";
    addEventFrom.value = "";
    addEventTo.value = "";

    //atualizar o evento no localStorage
    localStorage.setItem("events", JSON.stringify(eventsArr));

    //exibir evento adicionado
    updateEvents(activeDay);

    //adicionar a classe de evento
    const activeDayEl = document.querySelector(".day.active");
    if(!activeDayEl.classList.contains("event")){
        activeDayEl.classList.add("event");
    }
});

//função para obter hora formatada
function convertTime(time){
    let timeArr = time.split(":");
    let timeHour = timeArr[0];
    let timeMin = timeArr[1];
    let timeFormat = timeHour >= 12 ? "PM" : "AM";
    timeHour = timeHour % 12 || 12;
    time = timeHour + ":" + timeMin + " " + timeFormat;
    return time;
}

//funcao para adicionar listner de clique nos dias apos renderizar os dias
function addListner() {
    const days = document.querySelectorAll(".day");
    days.forEach((day) => {
        day.addEventListener("click", (e) => {
            //atualizar o evento ativo (remover o evento ativo anterior)
            activeDay = Number(e.target.innerHTML);
            getActiveDay(e.target.innerHTML);
            updateEvents(Number(e.target.innerHTML));

            //remover classe ativa de outros dias
            days.forEach((day) => {
                day.classList.remove("active");
            });

            //se o dia do mes anterior for clicado, mude para o mes anterior
            if(e.target.classList.contains("prev-date")){
                prevMonth();

                //adicionar classe ativa ao dia correto apos mudar de mes
                setTimeout(() => {
                    //selecionar todos os dias atuais
                    const days = document.querySelectorAll(".day");
                    days.forEach((day) => {
                        if(
                            !day.classList.contains("prev-date") && 
                            day.innerHTML === e.target.innerHTML
                        ){
                            day.classList.add("active");
                        }
                    });
                }, 100);
            } 
            //se o dia do proximo mes for clicado, mude para o proximo mes
            else if(e.target.classList.contains("next-date")){
                nextMonth();

                //adicionar classe ativa ao dia correto apos mudar de mes
                setTimeout(() => {
                    //selecionar todos os dias atuais
                    const days = document.querySelectorAll(".day");
                    days.forEach((day) => {
                        if(
                            !day.classList.contains("next-date") && 
                            day.innerHTML === e.target.innerHTML
                        ){
                            day.classList.add("active");
                        }
                    });
                }, 100);
            }
            //adicionar classe ativa ao dia clicado
            else {
                e.target.classList.add("active");
            }
        });
    });
}

//funcao para obter dia ativo:
function getActiveDay(date){
    const day = new Date(year, month, date);
    const dayName = daysOfWeek[day.getDay()];
    eventDay.innerHTML = dayName;
    eventDate.innerHTML = date + " " + months[month] + " " + year;
}

//funcao para atualizar o evento quando outro dia for clicado
function updateEvents(date){
    let events = "";
    eventsArr.forEach((event) => {
        if(
            date === event.day &&
            month + 1 === event.month &&
            year === event.year
        ){
            event.events.forEach((event) => {
                events += `
                <div class="event">
                    <div class="title">
                        <i class="fas fa-circle"></i>
                        <h3 class="event-title">${event.title}</h3>
                    </div>
                    <div class="event-time">
                        <span class="event-time">${event.time}</span>
                    </div>
                </div>
                `;
            });
        }
    });

    //if -> evento não encontrado
    if(events === ""){
        events = `<div class="no-event">
            <h3>Sem eventos</h3>
        </div>`;
    }

    eventsContainer.innerHTML = events;
}

//função para remover o evento ao clicar
eventsContainer.addEventListener("click", (e) => {
    if(e.target.classList.contains("event")){
        const eventTitle = e.target.querySelector(".event-title").innerHTML;
        eventsArr.forEach((event) => {
            if(
                event.day === activeDay &&
                event.month === month + 1 &&
                event.year === year
            ){
                event.events.forEach((item, index) => {
                    if(item.title === eventTitle){
                        event.events.splice(index, 1);
                    }
                });

                //if -> nenhum evento restante no dia, remova o dia inteiro
                if(event.events.length === 0){
                    eventsArr.splice(eventsArr.indexOf(event), 1);

                    //remover classe de evento se nao houver eventos
                    const activeDayEl = document.querySelector(".day.active");
                    if(activeDayEl.classList.contains("event")){
                        activeDayEl.classList.remove("event");
                    }
                }
            }
        });
        //atualizar eventos apos a remoção
        updateEvents(activeDay);

        //atualizar no localStorage
        localStorage.setItem("events", JSON.stringify(eventsArr));
    }
});

//função para armazenar eventos no localStorage
function getEvents() {
    if(localStorage.getItem("events") === null){
        return;
    }
    eventsArr = JSON.parse(localStorage.getItem("events"));
}