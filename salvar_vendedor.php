<?php

include 'conexao.php';

if (isset($_REQUEST['btnEditar'])) {

    $erro = 0;

    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['setor_trabalho']) && !empty($_REQUEST['setor_trabalho'])) {
        $setor_trabalho = $_REQUEST['setor_trabalho'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['data_nascimento']) && !empty($_REQUEST['data_nascimento'])) {
        $data_nascimento = $_REQUEST['data_nascimento'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE vendedor SET nome = '$nome', email = '$email', setor_trabalho = '$setor_trabalho', data_nascimento = '$data_nascimento' WHERE id = $id";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: vendedor.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>