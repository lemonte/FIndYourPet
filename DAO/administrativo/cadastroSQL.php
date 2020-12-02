<?php
    function cadastrar($email, $senha, $nome, $foto, $telefone){
        require_once "./conexao.php";
        $conexao = conectar();
        $anterior = $_SERVER['HTTP_REFERER'];

        $sql = "INSERT INTO adm (senha, email, nome, telefone, imagem) 
                VALUES ('$senha', '$email', '$nome', '$telefone', '$foto')";
        
        if (mysqli_query($conexao, $sql)) {
    
            header("Location:$anterior?msg=Conexão realizada com sucesso.") ;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
        }


        }
 ?>