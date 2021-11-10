<?php
    include 'conexao.php';

    if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM vendedor WHERE id = {$id}";
        $res = mysqli_query($connection, $sql);
        if ($res && $res->num_rows == 1) {
            $vendedores = $res->fetch_assoc();
        } else {
            echo "<p>vendedor não encontrado, volte a listagem</p>";
            echo "<a href='vendedor.php'>Lista de vendedor</a>";
        }
    } else {
        header("Location: vendedor.php");
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
        <!--  -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <!--inicio link bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Vendedores</title>
    <style>
        .gg {
            font-family: 'Poppins', sans-serif;
            width: 300px;
            height: 500px;
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
  
        body{
            background-color: #d5dbdb;
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
            border: 2px;
        }

        .form-input label {
            display: block;
            position: relative;

        }

        .form-input input[type=submit] {
            padding: 10px 25px 10px 25px;
            color: black;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 25px 10px 25px;
            transition-duration: 0.5s;
        }
    </style>
    </head>
<body>
<header>
    <div class="gg">
        <section class="section-style">
            <form class="--form-content" action="salvar_vendedor.php?id=<?php echo $id; ?>" method="post">
                <div class="form-input">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value=<?php echo $vendedores['nome'] ?> required>
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $vendedores['email'] ?>" required>
                </div>
                <div class="form-input">
                    <label for="setor_trabalho">Setor de Trabalho</label>
                    <input type="text" id="setor_trabalho" name="setor_trabalho" value=<?php echo $vendedores['setor_trabalho'] ?> required>
                </div>
                <div class="form-input">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" value=<?php echo $vendedores['data_nascimento'] ?> required>
                </div>
                <div class="form-input">
                    <input type="submit" value="Editar" class=" --button-register btn btn-success" id="btnEditar" name="btnEditar">
                </div>
            </form>
        </section>
        </header>
    </div>
    </body>
</html>