<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/cad.css">
    <title>Cadastro Aluno</title>
</head>
<body>
<header>
    <div class="head">
    <h1 id="title">Cadastro Aluno</h1>
</div>
</header>

<div class="form">
<div id="perfil">
<img src="imagens/perfil.png">
</div> 
    <button id="fc" class="social" >Facebook</button>
    <br>
    <br>
    <button id="gl" class="social">Google</button>
<form action='regist.php' method="post">
    <input type="text" placeholder="Nome completo" name="name">
<br>
    <input type="email" placeholder="E-mail" name="email" >
<br>
    <input type="password" placeholder="Senha" name="pwd" >
    <br>
    <input type="password" placeholder="Repita a senha" name="rp-pwd">
<br>
    <input type="submit" value="Enviar">
</form>
</div>
</body>
</html>