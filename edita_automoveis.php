<?php

include 'conexao.php';

if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM automoveis WHERE id = {$id}";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $automoveiss = $res->fetch_assoc();
    } else {
        echo "<p>automóvel não encontrado, volte a listagem</p>";
        echo "<a href='automoveis.php'>Lista de automoveis</a>";
    }

} else {
    header("Location: automoveis.php");
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
    <title>Automóvel</title>
    <style>                   
        body {
            width: 100vw;
            height: 100vh;
            background-color: #d5dbdb;
            background-size: 400% 400%;
            position: relative;
            animation: change 6s ease-in-out infinite;
        }
        
 
        .gg {
            font-family: 'Poppins', sans-serif;
            width: 300px;
            height: 700px;
            border: 2px solid #000;
            color: #fff;
            background-color: rgba(0,0,5,0.8);
            top: 48%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 5px 35px;
            border-radius:16px;
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
    <form action="salvar_automoveis.php?id=<?php echo $id; ?>" method="post">
        <div class="form-input">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" value=<?php echo $automoveiss['valor'] ?> required>
        </div>
        <div class="form-input">
            <label for="fabricacao">Fabricação</label>
            <input type="date" id="Fabricacao" name="fabricacao" value=<?php echo $automoveiss['fabricacao'] ?> required>
        </div>

        <div class="form-input">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value=<?php echo $automoveiss['modelo'] ?> required>
        </div>

        <div class="form-input">
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca" value=<?php echo $automoveiss['marca'] ?> required>
        </div>

        <div class="form-input">
            <label for="placa">Placa</label>
            <input type="text" id="placa" name="placa" value=<?php echo $automoveiss['placa'] ?> required>
        </div>

        <div class="form-input">
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor" value=<?php echo $automoveiss['cor'] ?> required>
        </div>

        <div class="form-input">
            <label for="portas">Portas</label>
            <input type="text" id="portas" name="portas" value=<?php echo $automoveiss['portas'] ?> required>
        </div>

        <div class="form-input">
            <input type="submit" value="Editar" class=" --button-register btn btn-success" id="btnEditar" name="btnEditar">
        </div>
    </form>
    </header>
    </div>
</body>
</html>