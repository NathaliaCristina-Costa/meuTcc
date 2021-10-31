<!DOCTYPE html>
<html class="cor-fundo" lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Cliente</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../../assets/img/comentarios.png"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../../assets/css/cadastroCliente.css" rel="stylesheet"/>
</head>

<body>

<div class="container">
    <div class="alert" id="alert" role="alert"></div>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-register-image">
                    <img class="masthead-avatar mb-5 imagem-cliente" src="../../../assets/img/imagem-cliente.jpg"
                         alt=""/>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Cadastro</h1>
                            <hr>
                        </div>
                        <form class="user" method="POST" action="../../controller/CadastroController.php">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-6">
                                    <input type="text" class="form-control form-control-user" name="nome" id="nome"
                                           placeholder="Nome">
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control form-control-user" name="telefone"
                                           id="telefone"
                                           placeholder="Telefone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-6">
                                    <input type="email" class="form-control form-control-user" name="email" id="email"
                                           placeholder="Email">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-6">
                                    <input type="password" class="form-control form-control-user" name="senha"
                                           id="senha"
                                           placeholder="Senha">
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-lg-4 mb-3">
                                    <input type="submit" value="Registrar" class="btn" id="registrar"
                                           name="dados-cliente">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../../../assets/js/jquery.js"></script>
<!--script src="js/salvaCliente.js"></script>-->

</body>

</html>