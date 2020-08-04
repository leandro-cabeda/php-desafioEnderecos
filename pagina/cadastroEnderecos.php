<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Endereços</title>
    <script src="https://kit.fontawesome.com/02b6181161.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" media="screen">
    <link href="../dist/css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link href="../dist/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
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
    <div class="container mt-3 container-table">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="descricao text-center">Cadastro de Endereço</h1>
                <form id="form" class="row">
                    <div class="col-5">
                        <label class="control-label descricao label-alinhamento">Busque o Endereço informando Cep abaixo:</label>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">CEP:*</label>
                            <input name="cep" id="cep" required class="form-control w-40" type="text">
                        </div>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">Localidade:*</label>
                            <input name="localidade" required class="form-control w-70" type="text">
                        </div>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">UF:*</label>
                            <input name="uf" required class="form-control w-25" type="text">
                        </div>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">Unidade:</label>
                            <input name="unidade" class="form-control w-80" type="text">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="col-12">
                            <label class="control-label label-alinhamento">IBGE:</label>
                            <input name="ibge" class="form-control w-40" type="text">
                        </div>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">Complemento:</label>
                            <input name="complemento" class="form-control w-70" type="text">
                        </div>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">Bairro:</label>
                            <input name="bairro" class="form-control w-70" type="text">
                        </div>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">Logradouro:</label>
                            <input name="logradouro" class="form-control w-80" type="text">
                        </div>
                        <div class="col-12">
                            <label class="control-label label-alinhamento">GIA:</label>
                            <input name="gia" class="form-control w-50" type="text">
                        </div>
                    </div>
                    <div class="text-center col-12">
                        <button type="submit" id="btnSave" class="btn btn-success w-45">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-mensagem" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" id="dialog_Modal_Mensagem">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                    <p role="alert"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
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
    <script src="../dist/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/dataTables.bootstrap.js"></script>
    <script src="../dist/js/script.js"></script>
</body>

</html>