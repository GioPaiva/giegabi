<?php

$porta="localhost:3307";
$nBanco="conexao";
$usuario="root";
$senha="";




$conexao=new PDO("mysql:host=$porta;dbname=$nBanco","$usuario","$senha");
?>