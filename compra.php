<?php

include 'conexao.php';
$id = $_REQUEST["id"];
    $result = mysqli_query($connection, "SELECT * FROM automoveis WHERE id = '$id' LIMIT 1") -> fetch_assoc();
    $vendedores = mysqli_query($connection, "SELECT * FROM vendedor")-> fetch_all(MYSQLI_ASSOC);
    $cliente = mysqli_query($connection, "SELECT * FROM clientela")-> fetch_all(MYSQLI_ASSOC);
if (isset($_REQUEST['btnFinalizar'])) {
    
    $erro = 0;
    
    if (isset($_REQUEST['automovel']) && !empty($_REQUEST['automovel'])) {
        $automovel = $_REQUEST['automovel'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['cliente']) && !empty($_REQUEST['cliente'])) {
        $cliente = $_REQUEST['cliente'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['vendedor']) && !empty($_REQUEST['vendedor'])) {
        $vendedor = $_REQUEST['vendedor'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['data_venda']) && !empty($_REQUEST['data_venda'])) {
        $data_venda = $_REQUEST['data_venda'];
    } else {
        $erro = 1;
    }


    if (!$erro) {
        $sql = "INSERT INTO compra (automovel, vendedor, cliente, data_venda) VALUES ('$automovel','$vendedor','$cliente','$ata_venda')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/teste/vendas.php");
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
        <title>Realizar Compra</title>
    <style>
        body{
            background-color: #d5dbdb;
        }
        .gg {
            font-family: 'Poppins', sans-serif;
            width: 300px;
            height: 650px;
            border: 2px solid #000;
            color: #fff;
            background-color: rgba(0,0,5,0.8);
            top: 45%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 20px 38px;
            border-radius:15px;
            }
        .form-input input {
            margin: 20px 0px 0px 0px;
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
        .--input-margin{
            margin-top:16px;
        }
        .btn-compra{
            margin-top:16px;
        }
    
    </style>
</head>
<body>
<header>
<div class="gg">
    <h1>Realizar Compra</h1>
    <form action="salvar_venda.php" method="post">
        <div class="form-input">
            <label for="automovel">Automovel</label>
            <input type="text" id="automovel" name="automovel" value = <?php echo($result["modelo"])?>  required>
        </div>

        <div class="--input-margin input-group mb-3">
      <div class="input-group-prepend">
         <label class="input-group-text" for="inputGroupSelect01">Vendedor</label>
      </div>
      <select name="vendedor" class="custom-select">
              <option selected>Escolha</option>
              <?php foreach($vendedores as $valor){ ?>
                <option value="<?php echo($valor["id"]) ?>"><?php echo($valor["nome"]) ?></option>
              <?php }?>
      </select>
</div>
<div class="input-group mb-3">
      <div class="input-group-prepend">
         <label class="input-group-text" for="inputGroupSelect01">Cliente</label>
      </div>
      <select name="cliente" class="custom-select">
              <option selected>Escolha</option>
              <?php foreach($cliente as $valor){ ?>
                <option value="<?php echo($valor["id"]) ?>"><?php echo($valor["nome"]) ?></option>
              <?php }?>
      </select>
</div>
        <div class="form-input">
            <label for="data_venda">Data da Venda</label>
            <input type="date" id="data_venda" name="data_venda" required>
        </div>
         
        <button name="btnFinalizar" value="<?php echo($id) ?>" type="submit" class="btn-compra btn btn-success">Finalizar</button>
       
    </form>
    </header>
</div>
</body>
</html>