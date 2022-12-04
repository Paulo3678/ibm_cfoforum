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
    <link rel="stylesheet" href="/assets/css/style.css">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
    <title>IBM</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo-ibm-black.png">

    {{-- VALIDATE --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_pt_BR.min.js"
        integrity="sha512-PHX1u45elKeOnEy2N3H1tVwyKDD8EQtnmNqNQ8LfMXj09a+JjfX9wWSwr61nvRzJZsLt1/YRkhUyJmv/sbRuCA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- MASK --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    {{-- HEADER --}}
    <section id="area-banner">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="/assets/images/ibef-logo.png" alt="">
                </div>
                <div class="col-12 conteudo">
                    <h1>CFO Forum <span class="bl">2022</span></h1>
                    <h2>
                        Experiências além da tecnologia
                        <span class="seta"></span>
                    </h2>

                    <div class="textos">
                        <p class="destaque">
                            16 a 18 de setembro
                        </p>
                        <p>
                            Bendito Cacao Resort & Spa
                            <br>
                            Campos do Jordão/SP
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </section>

    {{-- CONTADOR --}}
    <section id="area-contador">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 style="font-weight: 300">
                        Participe dessa jornada <br>
                        de transformações <span id="seta"></span>
                    </h2>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card-contador">
                        <div>
                            <h3 id="dias"></h3>
                            <h6>dias</h6>
                        </div>
                        <div>
                            <h3 id="horas"></h3>
                            <h6>horas</h6>
                        </div>
                        <div>
                            <h3 id="minutos"></h3>
                            <h6>minutos</h6>
                        </div>
                        <div>
                            <h3 id="segundos"></h3>
                            <h6>segundos</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- AGENDA E FORMULÁRIO --}}
    <section id="agenda-form">

        <div id="formulario-inscricao">
            <div class="container" id="area-agenda-inputs">
                <div class="row">

                    {{-- CAMPOS PREECHIVEIS --}}
                    <div class="col-12 col-md-6">
                        <div class="texto-inicio" id="inscricao-agenda">
                            @if (session()->has('message'))
                                <div class="alert alert-{{ session()->get('message')['type'] }}" role="alert">
                                    {{ session()->get('message')['message'] }}
                                </div>
                            @endif
                            <p class="p-md-0 p-2">
                                Vamos discutir como a tecnologia, além de transformar negócios, molda uma nova
                                sociedade.
                                Cibersegurança, novas formas de trabalho, operações mais eficientes. Estes e outros
                                assuntos estarão em debate no <strong>CFO Forum 2022</strong>.
                            </p>
                            <p class="p-md-0 p-2">
                                Você está preparado para atender às novas demandas da área financeira?
                            </p>

                            <div>
                                <div class="form-row" id="area-formulario-home">
                                    <div class="col-12">
                                        <h2>INSCRIÇÕES ENCERRADAS</h2>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                    {{-- AGENDA --}}
                    <div class="col-12 col-md-6">
                        <div id="area-card-agenda">
                            <h2>Agenda</h2>
                            <div class="card-agenda">
                                <h4>Dia 16 de setembro</h4>
                                <div class="horarios">
                                    <p>
                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Check In/Tarde livre
                                        </span>
                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Welcome Dinner
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div class="card-agenda">
                                <h4>Dia 17 de setembro</h4>
                                <div class="horarios">
                                    <p>
                                        <span class="opcao">
                                            Abertura IBM e IBEF
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Host: Chris Pelajo
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Keynote Speaker: Samy Dana
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Painel: Você está preparado para lidar com as novas exigências na área
                                            financeira?
                                            <br>
                                            Convidadas:
                                            <br>
                                            Carolina Leal: Partner, Americas Finance Practice Leader
                                            <br>
                                            Flavia Schlesinger: Vice President, GM Business Services LA e NA Consulting
                                        
                                        </span>


                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            A jornada evolutiva de FP&A Jean Luca, IBM LA Partner IBM Consulting
                                        </span>


                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Segurança como base da inovação  Gabriel Catropa, Partner IBM Security LATAM IBM
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Almoço
                                        </span>
                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            FinOps: controle e automação que reduzem custos e maximizam negócios
                                            <br>
                                            Marcela Vairo, Diretora Data, AI & Automation IBM
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Monetização de dados - Drumwave André Vellozo
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Tecnologias transformando modelos de negócios
                                            <br>
                                            Rubens Oliveira, Partner IBM Consulting
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Dinâmica Interativa
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Apresentação Dinâmica Interativa
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Jantar CFO Forum
                                        </span>

                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            CFO Forum After Lounge com atração musical - Luiza Possi
                                        </span>



                                    </p>
                                </div>
                            </div>

                            <div class="card-agenda">
                                <h4>Dia 18 de setembro</h4>
                                <div class="horarios">
                                    <p>
                                        <span class="opcao">
                                            <span class="enter">↳</span>
                                            Manhã livre + Check out
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PRIVACIDADE --}}
            <div id="area-privacidade">


                <div class="container">
                    <div class="row">
                        <div class="col-12 pl-0">
                            <div class="container p-0 m-0 mt-5">
                               
                                <div class="" id="area-contato-form">
                                    <h5>Contato:</h5>
                                    <p>
                                        <i class="fa-brands fa-whatsapp"></i> <span>(11) 99358-1107</span>
                                        <br>
                                        <i class="fa-regular fa-envelope"></i> <span>atendimento.ibm@mcm.br.com</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- RODAPÉ --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr>
                    <div class="patrocinio">
                        <p>Patrocínio Exclusivo: </p>
                        <img src="/assets/images/logo-ibm-black.png" alt="">
                    </div>
                </div>

                <div class="col-12 conteudo pl-0">
                    <hr>
                    <p class="pl-0 pr-0">
                        Esperamos que goste de receber as comunicações da IBM. Caso você não queira mais recebê-las <a
                            href="">clique aqui</a>.
                        O logo IBM, ibm.com e o ícone planeta são marcas de propriedade da International Business
                        Machines Corp, registrada em diversos países em todo o mundo. Outros nomes de produtos e
                        serviços podem ser marcas registradas da IBM ou de
                        outras companhias. Uma lista atualizada de marcas registradas da IBM está disponível oara
                        cibsykta pela web em <a
                            href="www.ibm.com/legal/copytrade.shtml">www.ibm.com/legal/copytrade.shtml</a>
                        International Business Machine 2017.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    {{-- BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    {{-- CUSTOM --}}
    <script src="/assets/js/form-validate.js"></script>
    <script src="/assets/js/contador.js"></script>

</body>

</html>
