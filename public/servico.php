<?php
require_once '../src/conexao.php';
require_once '../src/function.php';


if (isset($_GET['ACAO'])) {

    if ($_POST['ACAO'] == "CadastrarTIPO") {

        $retorno = salvarTipo($_POST);
        echo json_encode($retorno);
        exit;

    }
}