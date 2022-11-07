<?php
abstract class ClassConexao
{
    protected function conectaDB()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=autou", "root", "");
            return $conn;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}
?>