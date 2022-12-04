const botao_logout = document.querySelector(".btn-logout");

botao_logout.addEventListener("click", e=>{
    const vaiFazerLogout = confirm(`Deseja fazer logout?`);

    if (vaiFazerLogout === false) {
        e.preventDefault();
    }
})