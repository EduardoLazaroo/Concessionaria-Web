<!DOCTYPE html>
    <html lang="pt-BR" dir="ltr">
        <head>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
            <meta charset="UTF-8">
            <title>Tela de Login</title>
            <style>                   
                body {
                    width: 100vw;
                    height: 100vh;
                    background: linear-gradient(-60deg, #bfcba8, #5b8a72,  #56776c, #464f41);
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
                .login {
                    font-family: 'Poppins', sans-serif;
                    width: 320px;
                    height: 500px;
                    border: 2px solid #000;
                    border-radius: 80px 0px 80px 0px;
                    color: #fff;
                    background-color: rgba(0,0,5,0.8);
                    top: 50%;
                    left: 50%;
                    position: absolute;
                    transform: translate(-50%, -50%);
                    box-sizing: border-box;
                    padding: 68px 28px;
                }
                .usuario{
                    border-radius: 40%;
                    position: absolute;
                    top: -30px;
                    left: 112px;
                }
                .h1{
                    margin: 0;
                    padding-top: 0;
                    padding-left: 0;
                    padding-bottom: 20px;
                    letter-spacing: 10px;
                    text-transform: uppercase;
                    text-align: center;
                    font-size: 25px;
                }
                .login p{
                    margin: 0;
                    padding: 0;
                    font-weight: bold;
                }
                .login input{
                    width: 100%;
                    margin-bottom: 21px;
                }
                .login input[type="text"], input[type="password"]{
                    border: none;
                    border-bottom: 1px solid white;
                    background: transparent;
                    outline: none;
                    height: 40px;
                    color: white;
                    font-size: 16px;
                }
                .login input[type="submit"]{
                    border:none;
                    outline: none;
                    height: 35px;
                    color: #000;
                    background: #fff;
                    border-radius: 20px;
                    transition: 0.2s;
                }
                .login input[type="submit"]:hover {
                    cursor: pointer;
                    background: #42ad4d;
                    transition: 0.2s;
                }
                .login a {
                    font-weight: bold;
                    text-decoration: none;
                    font-size: 12px;
                    line-height: 20px;
                    color: #4b4b4b;
                    transition: 0.2s;
                }
                .login a:hover{
                transition: 0.2s;
                color:#5079ff;
                }
            </style>

        </head>
        <body>
            <header>
                <div class="login">
                    <img src="./img/user1.png" class="usuario" width="100" height="100" alt="">
                    <h1>Login</h1>
                    <form action="valida.php" method="POST">

                        <p>Usuario</p>
                        <input type="text" id="login" name="login" placeholder="Insira seu nome de usuário">
                        <p>Senha</p>
                        <input type="password" id="senha" name="senha" placeholder="Insira sua senha">
        
                        <input type="submit" id="btnLogin" name="btnLogin" value="Login"><br>
                    </form>
                </div>
            </header>
        </body>
    </html>