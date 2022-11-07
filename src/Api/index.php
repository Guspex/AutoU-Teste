<?php
include("ClassFuncionarios.php");
$Funcionarios = new ClassFuncionarios();
$Funcionarios->exibeFuncionarios();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
?>