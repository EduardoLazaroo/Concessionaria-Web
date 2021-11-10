<?php

include 'conexao.php';

if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM clientela WHERE id = {$id}";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $clientelas = $res->fetch_assoc();
    } else {
        echo "<p>cliente não encontrado, volte a listagem</p>";
        echo "<a href='clientela.php'>Lista de clientes</a>";
    }

} else {
    header("Location: clientela.php");
}

?>
<!DOCTYPE html>
<html lang="pt">
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <style>
        body{
            background-color: #d5dbdb;
        }
    
        .gg {
            font-family: 'Poppins', sans-serif;
            width: 300px;
            height: 550px;
            border: 2px solid #000;
            color: #fff;
            background-color: rgba(0,0,5,0.8);
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 20px 35px;
            border-radius:16px;
            }
   
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
    <form action="salvar_clientela.php?id=<?php echo $id; ?>" method="post">
        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value=<?php echo $clientelas['nome'] ?> required>
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value=<?php echo $clientelas['email'] ?> required>
        </div>

        <div class="form-input">
            <label for="celular">Celular</label>
            <input type="text" id="celular" name="celular" value=<?php echo $clientelas['celular'] ?> required>
        </div>

        <div class="form-input">
            <label for="Cpf">CPF</label>
            <input type="text" id="Cpf" name="Cpf" value=<?php echo $clientelas['Cpf'] ?> required>
        </div>

        <div class="form-input">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value=<?php echo $clientelas['data_nascimento'] ?> required>
        </div>

    
        <div class="form-input">
            <input type="submit" value="Editar" class=" --button-register btn btn-success" id="btnEditar" name="btnEditar">
        </div>
    </form>
    </header>
    </div>
</body>
</html>