<?php
include 'conexao.php';
$result = mysqli_query($connection, "SELECT * FROM clientela");
$clientelas = $result->fetch_all(MYSQLI_ASSOC);
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
        <title>Clientes</title>
        <style>                   
            body {
                width: 100vw;
                height: 100vh;
                background: linear-gradient(-60deg, #9ea3a8, #c5ccd4,  #c5ccd4, #9ea3a8);
                background-size: 400% 400%;
                position: relative;
                animation: change 6s ease-in-out infinite;
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
            .--logout{
                color:#f44;
                font-family: 'Dosis', sans-serif;
                border:thin solid black;
                border-color: #f44;
                border-radius: 5px;
            }
            .--logout:hover{
                color:#f44;
                font-family: 'Dosis', sans-serif;
            }
            .table td, .table th {
                border-top: none;
            }
            .table thead th {
                vertical-align: bottom;
                border-bottom: none;
            }
            .--style-content{
                margin: 0px 100px 0px 50px;
            }
            .--list{
                font-size:40px;
                font-family: 'Ubuntu', sans-serif;
            }
            .--button-delete a{
                color:white;
                text-decoration: none;
            }
            .--button-edit a{
                color: white;
                text-decoration: none;
            }
            .--style-tr{
                border: solid #1e4b4e;
            }
            .--button-edit{
                margin: 5px 3px 5px 3px;
            }
            .--button-delete {
                margin: 5px 3px 5px 3px;
            }
            .--style-th{
                background-color: #193f42;
                color:white;
                border: solid #193f42;
            }
            .--button-register{
                margin: 10px 0px 10px 0px;
            }
        </style> 
    </head>
    <body>
        <nav id="" class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                    <a class="navbar-brand"> StartCar </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="start.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vendedor.php">Vendedor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clientela.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="automoveis.php">Automoveis</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="vendas.php">Vendas</a>
                    </li>
                    </ul>
                </div>
                    <li method="POST" action="valida.php" name="logoutli" id="logout" class="d-flex justify-content-right nav-item">
                        <a name="logoutt" class="--logout nav-link" href="Index.php">Sair do Sistema</a>
                    </li>
            </div>
        </nav>
        <section class="--style-content">
            <div>
                <a class="--list d-flex justify-content-start">Lista de Clientes</a>            
            </div>
           <a type="button" class=" --button-register btn btn-success" href="cadastro_clientela.php">Cadastrar Clientes</a>
            

            <table class="table ">
                <thead>
                    <tr>
                        <th class="--style-th" >#</th>
                        <th class="--style-th" >Nome</th>
                        <th class="--style-th" >Email</th>
                        <th class="--style-th" >Celular</th>
                        <th class="--style-th" >Cpf</th>
                        <th class="--style-th" >Data de Nascimento</th>
                        <th class="--style-th" >Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientelas as $clientela) { ?>
                        <tr class="--style-tr">
                            <td><?php echo $clientela["id"]; ?></td>
                            <td><?php echo $clientela["nome"]; ?></td>
                            <td><?php echo $clientela["email"]; ?></td>
                            <td><?php echo $clientela["celular"]; ?></td>
                            <td><?php echo $clientela["Cpf"]; ?></td>
                            <td><?php echo date("d/m/Y", strtotime($clientela["data_nascimento"])); ?></td>
                            <td class="--button-edit btn btn-primary">
                                <?php echo "<a href='edita_clientela.php?id={$clientela['id']}'>Editar</a>"; ?>
                            </td>
                            <td class="--button-delete btn btn-danger">
                                <?php echo "<a href='exclui_clientela.php?id={$clientela['id']}'>Excluir</a>"; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </body>
</html>