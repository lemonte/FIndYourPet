<?php
    function editar($idConta, $nome, $email, $senha, $telefone){
        require './conexao.php';
        $conexao = conectar();

        if($senha != null){
        $sql = "UPDATE adm SET nome = '$nome',
            email = '$email',
            senha = '$senha',
            telefone = '$telefone'
             WHERE adm.idConta = '$idConta'";
        }else{

        $sql = "UPDATE adm SET nome = '$nome',
            email = '$email',
            telefone = '$telefone'
             WHERE adm.idConta = '$idConta'";
        }

        mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );
        
        
    }
    
 ?>