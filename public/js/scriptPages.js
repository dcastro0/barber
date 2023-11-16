/* NAVBAR */

const sideBar = document.querySelector(".sideBar");
const nav = document.querySelector("nav");

sideBar.addEventListener("click", () => nav.classList.toggle("active"));

/* HORÁRIOS */
function botaoClicado(id){
    const horario = document.getElementById(id);
    horario.classList.toggle('active');

    const idCancConf = id + '_2';

    const canConf = document.getElementById(idCancConf);
    canConf.classList.toggle('active');
}

/* BOTÃO CANCELAR E CONFIRMAR */

function cancelar(id){
    const horario = document.getElementById(id);
    horario.classList.remove("active");

    const idCancConf = id + '_2';

    const canConf = document.getElementById(idCancConf);
    canConf.classList.remove("active");
}

function confirmar(id){
    const idCancConf = id + '_2';

    const canConf = document.getElementById(idCancConf);
    canConf.classList.remove("active");

    addAgendamento(id);
}

