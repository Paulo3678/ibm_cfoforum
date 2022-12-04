
  $(document).ready(function () {
    $(".telefone").mask("90000-0000");
    $(".cep").mask("00000-000");
    $(".ddd").mask("00");
  });

$("#formulario-inscricao").validate({
    errorClass: "is-invalid",
    rules: {
        nome: {
            required: true
        },
        sobrenome: {
            required: true
        },
        cargo: {
            required: true
        },
        empresa: {
            required: true
        },
        pais: {
            required: true
        },
        estado: {
            required: true
        },
        cidade: {
            required: true
        },
        cep: {
            required: true
        },
        ddd: {
            required: true,
            minlength: 2
        },
        telefone: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        pais: {
            required: true
        },
        relacionamento:{
            required: true
        },
        privacidade: {
            required: true
        },

    },
})