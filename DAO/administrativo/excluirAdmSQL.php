<?php
    function excluir($idConta){
        require './conexao.php';
        $conexao = conectar();
        
        $sql = "DELETE FROM adm WHERE idConta = '$idConta'";

        mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );
        
        
    }
    
 ?>