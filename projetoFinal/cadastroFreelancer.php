<!DOCTYPE html>
<html class="cor-fundo" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Freelancer</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="src/img/comentarios.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/jquery.steps.css" rel="stylesheet">
    <link href="css/cadastro.css" rel="stylesheet" />

</head>

<body>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-register-image"><img class="masthead-avatar mb-5 imagem-freelancer" src="src/img/freelancer.jpg" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4  mb-4">Cadastre-se!</h1>
                                <hr>
                                <p>Seja um Freelancer em nossa plataforma!</p>
                                <hr>
                            </div>
                            <!--form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-6">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirme a Senha">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-6">
                                        <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" id="mySelect">
                                            <option>Escolha Categoria</option>
                                            <option value="evento">Evento</option>
                                            <option value="reparo">Reparo & Reforma</option>
                                            <option value="saude">Saúde</option>
                                            <option value="domestico">Serviço Doméstico</option>
                                            <option value="tecnologia">Tecnologia & Design</option>
                                            <option value="assistencia">Assistência Técnica</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div id="reparoReforma">
                                            <div class="col-sm-12 mb-3 mb-sm-12">
                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                    <option selected value="S">Reparo & Reforma</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div id="ServicoEvento">
                                            <div class="col-sm-12 mb-3 mb-sm-12">
                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                    <option selected value="S">Evento</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div id="ServicoDomenstico">
                                            <div class="col-sm-12 mb-3 mb-sm-12">
                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                    <option selected value="S">Serviços Domésticos</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div id="ServicoSaude">
                                            <div class="col-sm-12 mb-3 mb-sm-12">
                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                    <option selected value="S">Saúde</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div id="tecDesign">
                                            <div class="col-sm-12 mb-3 mb-sm-12">
                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                    <option selected value="S">Tecnologia & Design</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div id="assTecnica">
                                            <div class="col-sm-12 mb-3 mb-sm-12">
                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                    <option selected value="S">Assistência Técnica</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row justify-content-center">
                                    <div class="col-sm-6 col-lg-4 mb-3">
                                        <a href="loginFreelancer.php" class="btn btn-success btn-user btn-block ">
                                            Registrar Conta
                                        </a>
                                    </div>
                                </div>


                            </form-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                                            <div>
                                                <h4>Informações Da Conta</h4>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="password" name="confirmeSenha" class="form-control" placeholder="Confirmar Senha" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" data-mask="(00) 00000-0000" class="form-control" placeholder="Telefone" id="telefone" name="telefone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h4>Categoria/Serviços</h4>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-sm-12 mb-3 mb-sm-6">
                                                            <select class="form-select form-select-md mb-3" aria-label=".form-select-md example" id="mySelect">
                                                                <option>Escolha Categoria</option>
                                                                <option value="evento">Evento</option>
                                                                <option value="reparo">Reparo & Reforma</option>
                                                                <option value="saude">Saúde</option>
                                                                <option value="domestico">Serviço Doméstico</option>
                                                                <option value="tecnologia">Tecnologia & Design</option>
                                                                <option value="assistencia">Assistência Técnica</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div id="reparoReforma">
                                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                                    <option selected value="S">Reparo & Reforma</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div id="ServicoEvento">
                                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                                    <option selected value="S">Evento</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div id="ServicoDomenstico">
                                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                                    <option selected value="S">Serviços Domésticos</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div id="ServicoSaude">
                                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                                    <option selected value="S">Saúde</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div id="tecDesign">
                                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                                    <option selected value="S">Tecnologia & Design</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div id="assTecnica">
                                                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                                                    <option selected value="S">Assistência Técnica</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h4>Pagamento</h4>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <input class="form-control" type="number" name="numCartao" placeholder="Número Cartão">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <input class="form-control" type="month" name="data" placeholder="Data Validade">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" name="nomeCartao" placeholder="Nome Impresso no Cartão">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input class="form-control" type="number" name="codSeguranca" placeholder="CVC">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cardPg">
                                                        <div class="card-footer">
                                                            <h6>Total </h6> <hr> R$ 90,00                                                         
                                                        </div>
                                                    </div>
                                                </section>
                                                <h4>Confirmação</h4>
                                                <section>
                                                    <div class="row h-100">
                                                        <div class="col-12 h-100 d-flex flex-column justify-content-center align-items-center">
                                                            <h4>Cadastro e Pagamento efetuados com Sucesso!</h4>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     Core plugin JavaScript
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    Custom scripts for all pages-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/freelancer.js"></script>

    <script src="js/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="js/jquery.steps.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery-steps-init.js"></script>
</body>

</html>