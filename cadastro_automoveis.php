<?php

include 'conexao.php';

if (isset($_REQUEST['btnCadastrar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['valor']) && !empty($_REQUEST['valor'])) {
        $valor = $_REQUEST['valor'];
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

    if (isset($_REQUEST['fabricacao']) && !empty($_REQUEST['fabricacao'])) {
        $fabricacao = $_REQUEST['fabricacao'];
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
        $sql = "INSERT INTO automoveis (valor, modelo, marca, fabricacao, placa, cor, portas) VALUES ('$valor','$modelo','$marca','$fabricacao','$placa','$cor','$portas')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/teste/automoveis.php");
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
        <title>Cadastro de Automoveis</title>
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
            height: 778px;
            border: 2px solid #000;
            color: #fff;
            background-color: rgba(0,0,5,0.8);
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 18px 38px;
            border-radius: 25px;
            } 
        .form-input {
            margin: 14px;
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
    <H1>Cadastro Automovel</H1>
    <form action="cadastro_automoveis.php" method="post">
        <div class="form-input">
            <label for="valor">Valor (Mil)</label>
            <input type="text" id="valor" name="valor" required>
        </div>
        <div class="form-input">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" required>
        </div>

        <div class="form-input">
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca" required>
        </div>

        <div class="form-input">
            <label for="fabricacao">Fabricação</label>
            <input type="date" id="fabricacao" name="fabricacao" required>
        </div>

        <div class="form-input">
            <label for="placa">Placa</label>
            <input type="text" id="placa" name="placa" required>
        </div>

        <div class="form-input">
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor" required>
        </div>

        <div class="form-input">
            <label for="portas">Portas</label>
            <input type="text" id="portas" name="portas" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Cadastrar" id="btnCadastrar" name="btnCadastrar">
        </div>
    </form>
    </header>
</div>
</body>
</html>