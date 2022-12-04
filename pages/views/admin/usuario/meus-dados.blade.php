@extends('admin/layout')


@section('conteudo')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- VALIDATE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_pt_BR.min.js"
        integrity="sha512-PHX1u45elKeOnEy2N3H1tVwyKDD8EQtnmNqNQ8LfMXj09a+JjfX9wWSwr61nvRzJZsLt1/YRkhUyJmv/sbRuCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4>Dados Pessoais</h4>
                            <hr>
                            <div>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" value="{{ $usuario['Nome'] }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{ $usuario['Email'] }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4>Alterar Senha</h4>
                            <hr>
                            @if (session()->has('message'))
                                <div class="alert alert-{{ session()->get('message')['type'] }}" role="alert">
                                    {{ session()->get('message')['message'] }}
                                </div>
                            @endif
                            <form action="/usuario/senha/atualizar" method="post" id="form-senha">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input type="password" name="senha_antiga" class="form-control"
                                            style="border-color: #844fc1;" placeholder="Senha Antiga">
                                    </div>
                                    <div class="col">
                                        <input type="password" name="nova_senha" class="form-control"
                                            style="border-color: #844fc1;" placeholder="Nova Senha">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-success" type="submit">Alterar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a
                                href="#" class="text-muted" target="_blank">IBM</a>.
                            Todos direitos reservados.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">
                            Desenvolvido por
                            <a href="" class="text-muted" target="_blank">Luma Digital</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>

    <script src="/assets/admin/js/custom/validar-form-senha.js"></script>
@endsection
