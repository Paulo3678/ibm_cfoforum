<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IBM - {{ $title }}</title>

    <link rel="stylesheet" href="/assets/admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/assets/admin/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="/assets/admin/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="/assets/images/logo-ibm-dark.png" />

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">

    {{-- CUSTOM --}}
    <link rel="stylesheet" href="/assets/admin/css/custom.css">

    {{-- JQUERY --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="/inscricoes/aprovadas"><img
                            src="/assets/images/ibef-logo.png" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="/inscricoes/aprovadas"><img
                            src="/assets/images/ibef-logo.png" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="typcn typcn-th-menu"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-date dropdown">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                            <h6 class="date mb-0">Data: {{ $data_atual }}</h6>
                            <i class="typcn typcn-calendar"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="btn-logout">
                            Logout <i class="fa-solid fa-right-from-bracket"></i>
                        </a>

                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </nav>


        <div class="container-fluid page-body-wrapper">


            {{-- MENU LATERAL --}}
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/inscricoes/aprovadas">
                            <i class="typcn typcn-input-checked menu-icon"></i>
                            <span class="menu-title">Inscrições Aprovadas</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/inscricoes/aprovar">

                            <i class="typcn typcn-input-checked-outline menu-icon"></i>
                            <span class="menu-title">Inscrições para Aprovar</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/inscricoes/rejeitadas">
                            <i class="typcn typcn-times menu-icon"></i>
                            <span class="menu-title">Inscrições Rejeitadas</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/usuario/adicionar">
                            <i class="fa-solid fa-user-plus ml-1" style="margin-right:0.75rem;"></i>
                            <span class="menu-title">Adicionar Usuário</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/usuario/dados">
                            <i class="fa-solid fa-gear ml-1" style="margin-right:0.75rem;"></i>
                            <span class="menu-title">Meus Dados</span>
                        </a>
                    </li>




                </ul>
            </nav>


            @yield('conteudo')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="/assets/admin/js/custom/logout.js"></script>
    <script src="/assets/admin/js/settings.js"></script>
    <!-- base:js -->
    <script src="/assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="/assets/admin/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/assets/admin/js/off-canvas.js"></script>
    <script src="/assets/admin/js/hoverable-collapse.js"></script>
    <script src="/assets/admin/js/template.js"></script>
    <script src="/assets/admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/assets/admin/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
