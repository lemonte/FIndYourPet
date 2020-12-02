<?php
    function listar($adm){
        require "./DAO/conexao.php";
        $conexao = conectar();

        if($adm){
            $sql = "SELECT * FROM `pet` WHERE aceito = 0";
        }else{
            $sql = "SELECT * FROM `pet` WHERE aceito = 1";
        }

        $res = mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );

        return $res;

        
}
 ?>