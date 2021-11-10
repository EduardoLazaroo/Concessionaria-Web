<?php

include 'conexao.php';

if (isset($_REQUEST['btnFinalizar'])) {
    $erro = 0;
    $automoveis = $_REQUEST ["btnFinalizar"];
    $cliente = $_REQUEST['cliente'];
    $vendedor = $_REQUEST['vendedor'];
    $data_venda = date("Y-m-d");
       
        $sql = "INSERT into vendas SET idautomoveis = '$automoveis', idclientela = '$cliente', idvendedor = '$vendedor', data_venda = '$data_venda'";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: vendas.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }
}

?>