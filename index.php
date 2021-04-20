<?php
session_start();
setcookie("ck_authorized", "true", 0, "/");

if(!isset($_SESSION["name"])):
	header("location: login.php");
else:
	$name = $_SESSION["name"];
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta language="ptbr" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>alert("Você está cadastrado!!")</script>



    
</body>
</html>
