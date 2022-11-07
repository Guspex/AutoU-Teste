<?php
include("ClassConexao.php");

class ClassFuncionarios extends ClassConexao
{
    public function exibeFuncionarios()
    {
        echo "<table class=\">";
        $strcon = mysqli_connect('localhost','root','','autou') or die("Erro ao conectar DB");
        $sql = "SELECT * FROM sheet1";
        $result = mysqli_query($strcon,$sql) or die("Erro ao buscar DB");

        while ($registro = mysqli_fetch_array($result)) {
                $matricula = $registro['matricula'];
                $email = $registro['email'];
                $nome = $registro['nome'];
                $sobrenome = $registro['sobrenome'];
                $departamento = $registro['departamento'];
                $cargo = $registro['cargo'];
                $foto_colaborador = $registro['foto_colaborador'];
                $reputacao = $registro['reputacao'];
                echo "<tr>";
                echo "<td>".$matricula."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$nome."</td>";
                echo "<td>".$sobrenome."</td>";
                echo "<td>".$departamento."</td>";
                echo "<td>".$cargo."</td>";
                echo "<td>".$foto_colaborador."</td>";
                echo "<td>".$reputacao."</td>";
                echo "</tr>";
        }
        mysqli_close($strcon);
        echo "</table>";
    }
}
?>