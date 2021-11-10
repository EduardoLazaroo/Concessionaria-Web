<?php
include "conexao.php";
if(!empty ($_REQUEST["login"]) && !empty ($_REQUEST["senha"])){
    $user = $_REQUEST["login"];
    $pass = $_REQUEST["senha"];
}

if (!empty($_REQUEST["btnLogin"]) && !empty($user) && !empty($pass)) {
    $req = mysqli_query($connection, "SELECT * FROM login WHERE login = '$user' AND senha = '$pass' LIMIT 1");
    if (mysqli_num_rows($req) == 1) {
        session_start();
        $_SESSION["login"] = true;
        header("Location: start.php");
    } else{
        header("Location: Index.php");
        die();
    } 
} 
elseif (!empty($_REQUEST["btnCadastro"]) && !empty($user) && !empty($pass) && !empty($_REQUEST["confirmasenha"]) && $pass == sha1($_REQUEST["confirmasenha"]) && $_REQUEST["email"]) {
    $email = $_REQUEST["email"];
    $req = mysqli_query($connection, "SELECT * FROM login WHERE login = '$user' LIMIT 1");
    if (mysqli_num_rows($req) == 0) {
       mysqli_query($connection, "INSERT INTO login(login, senha, email) values('$user', '$pass', '$email')");
       echo("Usuário criado!");
    } else {
        header("Location: cadastro.html");
    }
} elseif(!isset($_REQUEST["logout"])) {
    session_destroy();
    header("Location: Index.php");
} else{
    echo("error");
    die();
}

?>