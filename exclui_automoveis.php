<?php
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM automoveis WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('automovel {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir automovel {$id}');</script>";
    }
}
echo "<script>window.location.replace('automoveis.php');</script>";
?>