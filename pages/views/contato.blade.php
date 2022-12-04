<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/layout/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/assets/lineicons/icon-font/lineicons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,700&display=swap"
        rel="stylesheet">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">

    {{-- CUSTOM --}}
    <link href="/assets/css/layout/style.css" rel="stylesheet">
    <link href="/assets/css/layout/custom.css" rel="stylesheet">

    <title>Nome Franquia RE/MAX</title>
</head>

<body>

    <!-- LOADER -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <header class="p-fixed fixed-top">
        <!-- MENU -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
            <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img src="/assets/images/logo-planos.png" alt="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/#perguntas" class="nav-item nav-link">Perguntas Frequentes</a>
                    <a href="/#galeria" class="nav-item nav-link">Imóveis</a>
                    <a href="/#exclusividades" class="nav-item nav-link">Exclusividades RE/MAX</a>
                </div>
            </div>
        </nav>
    </header>

    <main id="area-pagina-contato">
        <div style="position: relative" class="w-100">
            <div class="container">
                <div class="row area-conteudo">
                    <div class="col-12 col-lg-6 conteudo-col texto">
                        <h1>
                            Vamos conversar!
                        </h1>
                        <p>Venha falar conosco e encontre aquele imóvel tão desejado</p>
                        <p class="formas-contato">
                            <a href="#">
                                <i class="fa-solid fa-location-dot"></i>
                                Av. Endereço Agência 123
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-phone"></i>
                                (35) 51 98888-8888
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-envelope"></i>
                                contato@agencia.com.br
                            </a>
                        </p>
                    </div>

                    <div class="col-12 col-lg-6 conteudo-col form">
                        <div class="area-form">
                            <form action="/contato" method="post">
                                @csrf
                                <div class="row g-3 p-4 pt-0">
                                    <div class="col-12 col-12">
                                        <input type="text" class="form-control" placeholder="Nome" name="nome">
                                    </div>

                                    <div class="col-12 col-12">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email">
                                    </div>
                                    <div class="col-12 col-12">
                                        <input type="text" class="form-control telefone" placeholder="Telefone"
                                            name="telefone">
                                    </div>
                                    <div class="col-12 mt-5">
                                        <button class="btn btn-primary w-100 py-3" type="submit">
                                            ENCONTRAR IMÓVEL DOS SONHOS
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="area-remax">
                  <div class="conteudo">
                    <img src="/assets/images/logo-planos.png" alt="">
                  </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JS PARA ESTILOS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/counterup/counterup.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/layout/main.js"></script>
    <script src="/assets/js/layout/carregar-mais.js"></script>
    <!-- ESSENCIAIS PARA VALIDAÇÔES-->
    <script src="/assets/js/source/mask.js" type="text/javascript"></script>
    <script src="/assets/js/source/validate.js" type="text/javascript"></script>
    <script src="/assets/js/source/main.js" type="text/javascript"></script>

</body>

</html>
