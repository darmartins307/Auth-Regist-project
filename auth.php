<?php 
session_start();

include("bd.php");

$name = addslashes($_POST['email']);

$pwd = addslashes($_POST['senha']);


if(empty($name) || empty($pwd) ){
    echo("<script>alert('Preencha os campos')</script>");
    echo("<script>windows.location.href = 'login.php' </script>");
    exit;
} 


$select = pg_query("SELECT email,nome FROM usr");
$row = pg_num_rows($select);

if ($row > 0){
    echo("<script> alert('Logado com sucesso') </script>");
    echo("<script> window.location.href = 'index.php' </script>");
    $_SESSION['logado'] = 1;
   
} else { 
    echo("<script>alert('Usuário ou senha incorreto')</script>");
    echo("<script>window.location.href = 'login.php' </script>");
}

$_SESSION['name'] = $name;


?>




