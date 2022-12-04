const form_aprovar_inscricao = document.querySelectorAll(".form-aprovar-inscricao");
const form_reprovar_inscricao = document.querySelectorAll(".form-reprovar-inscricao");
const form_revogar_inscricao = document.querySelectorAll(".form-revogar-inscricao");


form_aprovar_inscricao.forEach(botao => {
    botao.addEventListener("submit", e => {
        e.preventDefault();
        const form_clicado = e.target;

        const inscricaoId = form_clicado.getAttribute("data-inscAprov");
        const vaiExcluir = confirm(`Deseja aprovar a inscrição com id: ${inscricaoId}?`);

        if (vaiExcluir === true) {

            let formData = new FormData(e.target);
            fetch(`/observacao/inscricao/aprovar/${inscricaoId}`, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(response => {
                    if (response.type !== true) {
                        alert("Erro ao aprovar inscrição! Tente novamente mais tarde")
                        window.location.reload();
                    }
                    let mensagem = response.message;
                    
                    window.location.reload();
                    alert(mensagem)

                });
        } else {
            e.preventDefault();
            console.log("NÃO QUERO");
        }
    })
});


form_reprovar_inscricao.forEach(botao => {
    botao.addEventListener("submit", e => {
        e.preventDefault();
        const form_clicado = e.target;

        const inscricaoId = form_clicado.getAttribute("data-inscAprov");
        const vaiExcluir = confirm(`Deseja recusar a inscrição com id: ${inscricaoId}?`);

        if (vaiExcluir === true) {

            let formData = new FormData(e.target);
            fetch(`/observacao/inscricao/recusar/${inscricaoId}`, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(response => {
                    if (response.type !== true) {
                        alert("Erro ao recusar inscrição! Tente novamente mais tarde")
                        window.location.reload();
                    }
                    let mensagem = response.message;
                    
                    window.location.reload();
                    alert(mensagem)

                });
        } else {
            e.preventDefault();
            console.log("NÃO QUERO");
        }
    })
});


form_revogar_inscricao.forEach(botao => {
    botao.addEventListener("submit", e => {
        e.preventDefault();
        const form_clicado = e.target;

        const inscricaoId = form_clicado.getAttribute("data-inscAprov");
        const vaiExcluir = confirm(`Deseja revogar a inscrição com id: ${inscricaoId}?`);

        if (vaiExcluir === true) {

            let formData = new FormData(e.target);
            fetch(`/observacao/inscricao/aprovar/${inscricaoId}`, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(response => {
                    if (response.type !== true) {
                        alert("Erro ao aprovar inscrição! Tente novamente mais tarde")
                        window.location.reload();
                    }
                    let mensagem = response.message;
                    
                    window.location.reload();
                    alert(mensagem)

                });
        } else {
            e.preventDefault();
            console.log("NÃO QUERO");
        }
    })
});

