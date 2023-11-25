"use strict";

const datetimeBox = document.querySelector("#datetime-js");

function getDate(){
    return (new Date()).toLocaleString("en-FR", {
        weekday: "long",
        day: "numeric",
        month: "long",
        year: "numeric"
    });
}

function getTime(){
    return (new Date()).toLocaleString("en-FR", {
        hour: "numeric",
        minute: "numeric",
        second: "numeric"
    });
}

function updateDateTime(){
    datetimeBox.innerHTML = `
        <p class="date-js">${getDate()}</p>
        <p class="time-js">${getTime()}</p>
    `;
}
updateDateTime();
setInterval(updateDateTime, 1000);