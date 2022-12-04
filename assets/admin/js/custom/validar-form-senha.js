
$("#form-senha").validate({
    errorClass: "is-invalid",
    rules: {
        senha_antiga: {
            required: true
        },
        nova_senha: {
            required: true
        },
    },
})