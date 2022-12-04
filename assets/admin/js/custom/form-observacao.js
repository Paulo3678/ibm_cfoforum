const botoes_adicionar_observacao = document.querySelectorAll(".botao-adicionar-observacao");
let botoes_atualizar_observacao = document.querySelectorAll(".botao-atualizar-observacao");

botoes_adicionar_observacao.forEach(botao => {
    botao.addEventListener("click", e => {
        let clicado = e.target.parentNode;
        let pai = clicado.parentNode;

        let formulario = pai.querySelector(".form-observador");


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

            fetch(`/observacao/adicionar/${inscricaoId}`, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(response => {
                    if (response.type !== true) {
                        alert("Erro ao adicionar observação! Tente novamente mais tarde")
                        window.location.reload();
                    }
                    let observacao = response.message;
                    pai.parentNode.querySelector(".observacao").textContent = observacao;
                    formulario.classList.add("hidden");

                    window.location.reload();
                    alert("Observação adicionada com sucesso!")

                });
        });

    })
});



botoes_atualizar_observacao.forEach(botao => {
    botao.addEventListener("click", e => {
        let clicado = e.target.parentNode;
        let pai = clicado.parentNode;

        let formulario = pai.querySelector(".form-observador ");


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

            fetch(`/observacao/atualizar/${inscricaoId}`, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(response => {
                    if (response.type !== true) {
                        alert("Erro ao atualizada observação! Tente novamente mais tarde")
                        window.location.reload();
                    }
                    let observacao = response.message;
                    pai.parentNode.querySelector(".observacao").textContent = observacao;
                    formulario.classList.add("hidden");

                    window.location.reload();
                    alert("Observação atualizada com sucesso!")

                });
        });

    })
})