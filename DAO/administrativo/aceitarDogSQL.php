<?php
    function aceitar($idPet){
        require './conexao.php';
        $conexao = conectar();
        $um = true;
        $idPet = intval("$idPet");
        $sql = "UPDATE pet SET aceito='$um' WHERE pet.idPet='$idPet'";

        mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );
        
        
    }
    
 ?>