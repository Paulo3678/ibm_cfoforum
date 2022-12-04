<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- CUSTOM --}}
    <link rel="stylesheet" href="/assets/admin/css/custom.css">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
    <title>IBM - Login</title>

    {{-- VALIDATE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_pt_BR.min.js"
        integrity="sha512-PHX1u45elKeOnEy2N3H1tVwyKDD8EQtnmNqNQ8LfMXj09a+JjfX9wWSwr61nvRzJZsLt1/YRkhUyJmv/sbRuCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body id="body-form-login">

    <main id="area-form-login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('message'))
                        <div class="alert alert-{{ session()->get('message')['type'] }}" role="alert">
                            {{ session()->get('message')['message'] }}
                        </div>
                    @endif

                    <form action="/admin/login" class="text-center" id="formulario-login-adm" method="POST">
                        @csrf
                        <img src="/assets/images/logo-ibm-black.png" alt="">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <script>
        $("#formulario-login-adm").validate({
            errorClass: "is-invalid",
            email: {
                required: true,
                email: true,
            },
            senha: {
                required: true
            }
        })
    </script>

    {{-- BOOTSTRAP --}}

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>
