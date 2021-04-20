<?php 
session_start();
include ('bd.php');

$name = stripslashes($_POST['name']);
$email =stripslashes( $_POST['email']);
$password = stripslashes($_POST['pwd']);
$rp_password = stripslashes($_POST['rp-pwd']);


if(empty($name) || empty($email) || empty($password) || empty($rp_password)){
    echo("<script>alert('Preencha todos os campos')</script>");
    echo(" <script>window.location.href = 'cad.php'</script>");
    exit;

} elseif($password !== $rp_password) {
       
    echo("<script>alert('As senhas não correspondem ')</script>");
    echo(" <script>window.location.href = 'cad.php'</script>");

} else{
$insert = ("INSERT INTO usr (nome,email,pwd) VALUES ('$name', '$email', '$password');");
    pg_query($conexao, $insert);
    echo("<script>alert('Conta cadastrada')</script>");
    echo("<script>window.location.href = 'login.php' </script>");
}
?>