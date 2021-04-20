<?php
session_start();
$servidor = 'localhost';
$porta = 5433;
$banco = 'School';
$usuario = 'postgres';
$pwd = 'root';


try { 
    $conexao = pg_connect("host=localhost port=5433 dbname=School user=postgres password=root");

 if(!$conexao){
    die("Não foi possível conectar");
 }
 return $conexao;

} catch (ErrorException $e){
     echo $e->getMessage();
}
