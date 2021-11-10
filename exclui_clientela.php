<?php
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM clientela WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('cliente {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir cliente {$id}');</script>";
    }
}

echo "<script>window.location.replace('clientela.php');</script>";
?>