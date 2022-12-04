@extends('admin/layout')


@section('conteudo')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="card-title">Inscrições para Aprovar</h4>
                                <a href="/planilhas/inscricoes/aprovar" class="btn btn-warning text-light">Exportar Novas
                                    Inscrições</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped" style="">
                                    <thead>
                                        <tr>
                                            <th>Opções</th>
                                            <th>Id</th>
                                            <th>Observacao</th>
                                            <th>Data e Hora da Inscricao</th>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Cargo</th>
                                            <th>Empresa</th>
                                            <th>Pais</th>
                                            <th>Estado</th>
                                            <th>Cidade</th>
                                            <th>Cep ou Codigo Postal</th>
                                            <th>DDD</th>
                                            <th>Telefone</th>
                                            <th>Email</th>
                                            <th>Relacionamento com IBM</th>
                                            <th>Dados Compartilhados</th>
                                            <th>Forma Contato</th>
                                            <th>Inscricao Aprovada</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inscricoes['inscricoes'] as $key => $inscricao)
                                            <tr>
                                                <td>
                                                    @if (is_null($inscricao->Observacao))
                                                        <form class="form-aprovar-inscricao"
                                                            data-inscAprov={{ $inscricao->Inscricao_Id }}>
                                                            @csrf
                                                            <input type="hidden" value="{{ $inscricao->Email }}"
                                                                name="email">
                                                            <button class="botao-aprovar-inscricao"
                                                                title="Aprovar Inscrição">
                                                                <i class="fa-solid fa-circle-check"></i>
                                                                <span>Aprovar Inscrição</span>
                                                            </button>
                                                        </form>

                                                        <form class="form-reprovar-inscricao"
                                                            data-inscAprov={{ $inscricao->Inscricao_Id }}>
                                                            @csrf
                                                            <input type="hidden" value="{{ $inscricao->Email }}"
                                                                name="email">
                                                            <button class="botao-reprovar-inscricao"
                                                                title="Recusar Inscrição">
                                                                <i class="fa-solid fa-circle-minus"></i>
                                                                <span>Recusar Inscrição</span>
                                                            </button>
                                                        </form>


                                                        <a href="#" class="botao-adicionar-observacao"
                                                            title="Adicionar Observação"style="width: 200px;
                                                            display: block">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                            <span>Adicionar Observação</span>
                                                        </a>

                                                        <form class="form-observador hidden">
                                                            @csrf
                                                            <input type="text" class="form-control" name="observacao"
                                                                placeholder="Observação" required>
                                                            <button type="submit" title="Enviar"
                                                                data-insc="{{ $inscricao->Inscricao_Id }}">
                                                                <i class="fa-solid fa-paper-plane"></i>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form class="form-aprovar-inscricao"
                                                            data-inscAprov={{ $inscricao->Inscricao_Id }}>
                                                            @csrf
                                                            <input type="hidden" value="{{ $inscricao->Email }}"
                                                                name="email">
                                                            <button class="botao-aprovar-inscricao"
                                                                title="Aprovar Inscrição">
                                                                <i class="fa-solid fa-circle-check"></i>
                                                                <span>Aprovar Inscrição</span>
                                                            </button>
                                                        </form>

                                                        <form class="form-reprovar-inscricao"
                                                            data-inscAprov={{ $inscricao->Inscricao_Id }}>
                                                            @csrf
                                                            <input type="hidden" value="{{ $inscricao->Email }}"
                                                                name="email">
                                                            <button class="botao-reprovar-inscricao"
                                                                title="Recusar Inscrição">
                                                                <i class="fa-solid fa-circle-minus"></i>
                                                                <span>Recusar Inscrição</span>
                                                            </button>
                                                        </form>

                                                        <a href="#" class="botao-atualizar-observacao"
                                                            title="Atualizar Observação" style="width: 200px;
                                                            display: block">
                                                            <i class="fa-solid fa-file-pen"></i>
                                                            <span>Atualizar Observação</span>
                                                        </a>

                                                        <form class="form-observador hidden">
                                                            @csrf
                                                            <input type="text" class="form-control" name="observacao"
                                                                placeholder="Observação"
                                                                value="{{ $inscricao->Observacao }}" required>
                                                            <button type="submit" title="Enviar"
                                                                data-insc="{{ $inscricao->Inscricao_Id }}">
                                                                <i class="fa-solid fa-paper-plane"></i>
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>

                                                <td class="py-1">{{ $inscricao->Inscricao_Id }}</td>
                                                <td class="observacao">
                                                    <p style="width: 300px">
                                                        {{ $inscricao->Observacao }}
                                                    </p>
                                                </td>
                                                <td>{{ $inscricao->Data_Hora_Inscricao }}</td>
                                                <td>{{ $inscricao->Nome }}</td>
                                                <td>{{ $inscricao->Sobrenome }}</td>
                                                <td>{{ $inscricao->Cargo }}</td>
                                                <td>{{ $inscricao->Empresa }}</td>
                                                <td>{{ $inscricao->Pais }}</td>
                                                <td>{{ $inscricao->Estado }}</td>
                                                <td>{{ $inscricao->Cidade }}</td>
                                                <td>{{ $inscricao->Cep_ou_Codigo_Postal }}</td>
                                                <td>{{ $inscricao->DDD }}</td>
                                                <td>{{ $inscricao->Telefone }}</td>
                                                <td>{{ $inscricao->Email }}</td>
                                                <td>{{ $inscricao->Relacionamento_com_IBM }}</td>
                                                <td>{{ $inscricao->Dados_Compartilhados }}</td>
                                                <td>
                                                <p style="width: 200px">
                                                    {{ $inscricao->Forma_Contato }}
                                                </p>
                                                </td>
                                                <td>{{ $inscricao->Inscricao_Aprovada }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- PAGINAÇÃO --}}
                        <div class="mt-2 d-flex justify-content-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item prev">
                                        <a class="page-link"
                                            href="/inscricoes/aprovar?page={{ $paginaAtual - 1 <= 0 ? 1 : $paginaAtual - 1 }}">
                                            <i class="fa-solid fa-chevron-left"></i>

                                        </a>
                                    </li>

                                    @for ($i = $inicio; $i <= $paginaAtual + $somatoria; $i++)
                                        <li class="page-item {{ $paginaAtual == $i ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="/inscricoes/aprovar?page={{ $i }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <li class="page-item next">
                                        <a class="page-link"
                                            href="/inscricoes/aprovar?page={{ $paginaAtual + 1 > $totalPaginas ? $totalPaginas : $paginaAtual + 1 }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
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

    <script src="/assets/admin/js/custom/form-observacao.js"></script>
    <script src="/assets/admin/js/custom/inscricoes-para-aprovar.js"></script>
@endsection