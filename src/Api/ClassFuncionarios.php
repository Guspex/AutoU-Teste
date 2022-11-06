<?php
include("ClassConexao.php");

class ClassFuncionarios extends ClassConexao
{
    public function exibeFuncionarios()
    {
        $BFetch = $this->conectaDB()->prepare("select * from autou");
        $BFetch->execute();

        $J = [];
        $I = 0;

        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
            $J[$I] = [
                "matricula" => $Fetch['matricula'],
                "email" => $Fetch['email'],
                "nome" => $Fetch['nome'],
                "sobrenome" => $Fetch['sobrenome'],
                "departamento" => $Fetch['departamento'],
                "cargo" => $Fetch['cargo'],
                "foto_colaborador" => $Fetch['foto_colaborador'],
                "reputacao" => $Fetch['reputacao'],
            ];

            $I++;
        }
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($J);
    }
}
