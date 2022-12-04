let deadline = new Date("sept 16, 2022 00:00:00").getTime();


let x = setInterval(function () {
    let now = new Date().getTime();
    let t = deadline - now;
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((t % (1000 * 60)) / 1000);
  

    let dias = document.querySelector("#dias");
    let horas = document.querySelector("#horas");
    let minutos = document.querySelector("#minutos");
    let segundos = document.querySelector("#segundos");
    
    dias.innerHTML = days;
    horas.innerHTML = hours;
    minutos.innerHTML = minutes;
    segundos.innerHTML = seconds;


    if (t < 0) {
        clearInterval(x);
        dias.innerHTML = "00";
        horas.innerHTML = "00";
        minutos.innerHTML = "00";
        segundos.innerHTML = "00";
        // document.getElementById("area-contador").innerHTML = "EXPIRED";
    }
}, 1000);