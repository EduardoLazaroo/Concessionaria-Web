<?php
    include "conexao2.php";
?>

<!DOCTYPE html>
<html lang="ptBR">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- inicio link fonts google -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;600&display=swap" rel="stylesheet">
      <!--inicio link bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <title>StartCar</title>
      <style>                   
        body {
            width: 100vw;
            height: 100vh;
            background: linear-gradient(-35deg, #b6d1cd, #c8deca, #a7b6c7);
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
      </style>
      <style>
          .pp{
            top: 50%;
            left: 50%;
            padding: 210px 170px;
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
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <form action = "valida.php" method="POST">
            <li  name="logoutli" id="logout" class="d-flex justify-content-right nav-item">
                <a  name="logout"  class="--logout nav-link" href="Index.php">Sair do Sistema</a>
            </li>
            </form>
      </div>
    </nav>
    <down>
    <center>
    <div class="pp">
          <img src="./img/abcd.png" width="500" height="300">
    </div>
    <CENTER>
    <down>
  </body>
</html>
