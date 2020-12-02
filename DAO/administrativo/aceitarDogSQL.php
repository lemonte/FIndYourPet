<?php
    function aceitar($idPet){
        require './conexao.php';
        $conexao = conectar();
        
        $sql = "UPDATE pet SET aceito = '1' WHERE pet.idPet = '$idPet'";

        mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );
        
        
    }
    
 ?>