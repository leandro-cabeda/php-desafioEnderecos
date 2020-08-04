<?php

require_once('ClassEnderecos.php');

$endereco = new Enderecos();

$acao = '';

if (isset($_REQUEST['acao'])) {
    $acao = $_REQUEST['acao'];
}

switch ($acao) {
    case '':
        echo $endereco->listaEnderecos();
        break;
    case 'add':
        echo $endereco->addEnderecos($_REQUEST);
        break;
    case 'getCep':
        echo $endereco->getCep($_REQUEST['cep']);
        break;
}
