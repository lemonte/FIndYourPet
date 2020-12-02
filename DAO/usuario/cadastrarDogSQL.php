<?php
    function cadastrar($nome, $dono, $breve_descricao, $sobre, $idade, $sexo, $imagem, $telefone, $animal){
        require "conexao.php";
        $conexao = conectar();
        

        $aceito = false;
        
        $sql = "INSERT INTO pet (nome, dono, breve_descricao, sobre, idade, sexo, imagem, telefone, aceito, animal) 
        VALUES ('$nome', '$dono', '$breve_descricao', '$sobre', $idade, '$sexo', '$imagem', $telefone, '$aceito', '$animal')";
        if (mysqli_query($conexao, $sql)) {
            
            header("Location:$anterior?msg=Conexão realizada com sucesso.") ;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}
 ?>