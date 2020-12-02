<?php
    function excluir($idPet){
        require './conexao.php';
        $conexao = conectar();
        
        $sql = "DELETE FROM pet WHERE idPet = '$idPet'";

        mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );
        
        
    }
    
 ?>