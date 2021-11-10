<?php
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM vendas WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('venda {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir venda {$id}');</script>";
    }
}

echo "<script>window.location.replace('vendas.php');</script>";
?>