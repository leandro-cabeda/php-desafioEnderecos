<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Endereços</title>
    <script src="https://kit.fontawesome.com/02b6181161.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" media="screen">
    <link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap4.css" rel="stylesheet" media="screen">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
    <link href="../dist/css/style.css" rel="stylesheet" media="screen">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links" aria-controls="links" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="../index.php" class="navbar-brand mr-auto ml-2">
            <i class="fa fa-home"></i> Home
        </a>
        <div class="collapse navbar-collapse" id="links">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="listaEnderecos.php"><i class="fas fa-list"></i>&nbsp;Lista de Endereços</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="cadastroEnderecos.php"><i class="fas fa-plus-square"></i>&nbsp;Cadastro de Endereços</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-3 container-table mb-5">
        <div class="row" id="tableLista">
            <div class="col-12 pl-5">
                <table id="listaEnderecos" class="table table-bordered table-responsive-md text-center color-text" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th class="thTable">CEP</th>
                            <th>Unidade</th>
                            <th>IBGE</th>
                            <th>Complemento</th>
                            <th>Logradouro</th>
                            <th>Bairro</th>
                            <th>Localidade - UF</th>
                            <th>GIA</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <nav class="bg-dark navbar navbar-dark mt-3 navbar-expand-md">
        <div class="container">
            <div class="row justify-content-center w-100">
                <div class="col-md-6 col-12">
                    <h2 class="text-center color-text mt-2">Informações do responsável do site</h2>
                    <ul class="list-group mt-3">
                        <li class="list-group-item">© Copyright 2020 Copyright.com.br - All Rights Reserved - Legal</li>
                        <li class="list-group-item"><i class="fa fa-at"></i> E-mail: leandro.cabeda@hotmail.com</li>
                        <li class="list-group-item">Cidade/Estado: Passo Fundo/RS</li>
                        <li class="list-group-item">Fale direto com responsável pelo WhatsApp >>
                            &nbsp;<a href="https://wa.me/5554999337135?text=Olá%20Leandro" target="_blank"><i style="font-size: 30px;" class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 offset-md-2 col-12">
                    <h2 class="text-center color-text mt-2">Siga-me</h2>
                    <div class="list-group text-center mt-3">
                        <a href="https://www.facebook.com/leandro.cabeda" target="_blank" class="list-group-item list-group-item-action">
                            <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a href="https://www.linkedin.com/in/leandro-cabeda-rigo-b82b2678" target="_blank" class="list-group-item list-group-item-action">
                            <i class="fa fa-linkedin"></i> Linkedin
                        </a>
                        <a href="https://github.com/leandro-cabeda" target="_blank" class="list-group-item list-group-item-action">
                            <i class="fa fa-github"> GitHub</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap4.js"></script>
    <script src="../dist/js/script.js"></script>
</body>

</html>