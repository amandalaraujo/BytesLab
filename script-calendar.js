const calendar = document.querySelector(".calendar"),
    date = document.querySelector(".date"),
    daysContainer = document.querySelector(".days"),
    prev = document.querySelector(".prev"),
    next = document.querySelector(".next");

let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

const months = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
];

//Funcao para add days

function initCalendar() {
    //para obter os dias do mes e o mes atual todos os dias e os dias do proximo mes
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const prevLastDay = new Date(year, month, 0);
    const prevDays = prevLastDay.getDate();
    const lastDate = lastDay.getDate();
    const day = firstDay.getDay();
    const nextDays = 7 - lastDay.getDay() - 1;

    //update date top of calendar
    date.innerHTML = `${months[month]} ${year}`;

    //adding days on dom
    let days = "";

    //prev month days
    for(let x = day; x > 0; x--){
        days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
    }

    //current month days
    for(let i = 1; i <= lastDate; i++){
        //if day is today add class today
        if(
            i === new Date().getDate() && 
            year === new Date().getFullYear() && 
            month === new Date().getMonth()
        ) {
            days += `<div class="day today">${i}</div>`;
        }
        //add remaing as it is
        else {
            days += `<div class="day">${i}</div>`;
        }
    }
    //next month days
    for(let j = 1; j <= nextDays; j++){
        days += `<div class="day next-date">${j}</div>`;
    }

    daysContainer.innerHTML = days;
}

initCalendar();