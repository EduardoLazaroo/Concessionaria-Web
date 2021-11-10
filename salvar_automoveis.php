<?php

include 'conexao.php';

if (isset($_REQUEST['btnEditar'])) {

    $erro = 0;

    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    } else {
        $erro = 1;
    } 
    if (isset($_REQUEST['valor']) && !empty($_REQUEST['valor'])) {
        $valor = $_REQUEST['valor'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['fabricacao']) && !empty($_REQUEST['fabricacao'])) {
        $fabricacao = $_REQUEST['fabricacao'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['modelo']) && !empty($_REQUEST['modelo'])) {
        $modelo = $_REQUEST['modelo'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['marca']) && !empty($_REQUEST['marca'])) {
        $marca = $_REQUEST['marca'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['placa']) && !empty($_REQUEST['placa'])) {
        $placa = $_REQUEST['placa'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['cor']) && !empty($_REQUEST['cor'])) {
        $cor = $_REQUEST['cor'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['portas']) && !empty($_REQUEST['portas'])) {
        $portas = $_REQUEST['portas'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE automoveis SET valor = '$valor', fabricacao = '$fabricacao', modelo = '$modelo', marca= '$marca', placa = '$placa', cor = '$cor', portas = '$portas' WHERE id = $id";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: automoveis.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>