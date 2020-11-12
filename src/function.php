<?php


function salvarTipo($dados)
{
    $retorno = [
        'dados' => $dados
    ];

    //$db = $db->getConnection();;

    $pdo = conexao::conexao();

    try {

        //$retorno['tipo'] =  $myPDO--query("SELECT * FROM table_name");

        return $retorno;
    } catch (Exception $e) {
        $retorno['error'] = $e;
       // $retorno['sql'] = $db->las;
        return $retorno;
    }
}