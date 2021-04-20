<?php session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos/estilos.css">
        <title>Estilizando Formulários</title>
    </head>
    <body>
        <div id="container">
            <img src="imagens/perfil.png">

            <form action='auth.php' method="post">
                <div>
                    <input class="email" type="email" name="email" id="email" placeholder="Digite seu e-mail aqui">
                </div>
                <div>
                    <input class="senha" type="password" name="senha" id="senha" placeholder="Digite senha aqui">
                </div>
                <div>
                    <input class="submit" type="submit" value="Login">
                </div>
                <a href="cad.php"> Cadastre-se </a>

            </form>
        </div>
            
    </body>

</html>