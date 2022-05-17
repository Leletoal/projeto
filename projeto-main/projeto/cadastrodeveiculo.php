<?php
session_start();

?>




<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf8">
    <title>CRUD - Cadastrar Veiculos</title>
</head>

<body>
    <h1>Cadastrar Veículo</h1>
 <?php

 if(isset($_SESSION['msg'])){
     echo $_SESSION['msg'];
     unset($_SESSION['msg']);
 }
 ?>
</body>



