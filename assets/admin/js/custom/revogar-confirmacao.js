


const botoes_revogar_confirmacao = document.querySelectorAll(".botao-revogar-confirmacao");

botoes_revogar_confirmacao.forEach(botao => {
    botao.addEventListener("click", e => {
        let clicado = e.target.parentNode;
        let pai = clicado.parentNode;

        let formulario = pai.querySelector(".form-revogar-confirmacao");


        if (formulario.classList.contains("hidden")) {
            formulario.classList.remove("hidden");
        } else {
            formulario.classList.add("hidden");
        }

        // ENVIADO DADOS PARA O BD
        formulario.addEventListener("submit", e => {
            e.preventDefault();

            let formData = new FormData(e.target);
            let botaoSubmit = formulario.querySelector("button");
            let inscricaoId = botaoSubmit.getAttribute("data-insc");

            fetch(`/observacao/confirmacao/revogar/${inscricaoId}`, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(response => {
                    if (response.type !== true) {
                        alert("Erro ao revogar confirmação! Tente novamente mais tarde")
                        window.location.reload();
                    }
                    let observacao = response.message;
                    pai.parentNode.querySelector(".observacao").textContent = observacao;
                    formulario.classList.add("hidden");

                    window.location.reload();
                    alert("Confirmação revogada com sucesso!")

                });
        });

    })
});