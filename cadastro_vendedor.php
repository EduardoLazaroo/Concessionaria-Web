<?php

include 'conexao.php';

if (isset($_REQUEST['btnCadastrar'])) {
    
    $erro = 0;

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
        $sql = "INSERT INTO vendedor (nome, email, setor_trabalho, data_nascimento) VALUES ('$nome','$email','$setor_trabalho','$data_nascimento')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/teste/vendedor.php");
        } else {
            echo "Erro ao executar o SQL";
        }
    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>

<!DOCTYPE html>
<html lang="ptBR">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- inicio link fonts google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;600&display=swap" rel="stylesheet">
        <!-- inicio link fonts google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <!--inicio link bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Cadastro do Vendedor</title>
        <style>                   
        body {
            width: 100vw;
            height: 100vh;
            background: linear-gradient(-35deg, #d1f0eb, #d5dbda, #d1f0eb);
            background-size: 400% 400%;
            position: relative;
            animation: change 5s ease-in-out infinite;
        }
        @keyframes change{
            0%{
                background-position:0 50%;
            }
            5%{
                background-position:100% 50%;
            }
            100%{
                background-position:0 50%;
            }
        }
        .gg {
            font-family: 'Poppins', sans-serif;
            width: 300px;
            height: 650px;
            border: 2px solid #000;
            color: #fff;
            background-color: rgba(0,0,5,0.8);
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 20px 35px;
            border-radius:20px;
            }
    </style>  
    <style> 
        .form-input {
            margin: 15px;
        }

        .form-input input {
            padding: 5px;
            border-radius: 4px;
            border: 2px solid #8f8f8f;
        }

        .form-input input:focus {
            outline: none !important;
            border: 2px solid #3064ff;
        }

        .form-input label {
            display: block;
            position: relative;

        }

        .form-input input[type=submit] {
            padding: 10px 25px 10px 25px;
            color: black;
            background-color: #62d158;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 25px 10px 25px;
            background-color: #9bc997;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <header>
    <div class="gg">
        <h1>Cadastro Vendedor</h1>
        <form action="cadastro_vendedor.php" method="post">
            <div class="form-input">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-input">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-input">
                <label for="setor_trabalho">Setor do Vendedor</label>
                <input type="text" id="setor_trabalho" name="setor_trabalho" required>
            </div>

            <div class="form-input">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
            </div>

            <div class="form-input">
                <input type="submit" value="Cadastrar" id="btnCadastrar" name="btnCadastrar">
            </div>
        </form>
    </div>
    </header>
</body>
</html>