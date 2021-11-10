<?php
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM vendedor WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('vendedor {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir vendedor {$id}');</script>";
    }
}

echo "<script>window.location.replace('vendedor.php');</script>";
?>