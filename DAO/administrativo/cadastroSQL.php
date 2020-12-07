<?php
    function cadastrar($email, $senha, $nome, $foto, $telefone){
        require_once "./conexao.php";
        $conexao = conectar();
        
        
        $sql = "SELECT * FROM adm WHERE email = '$email'";
        $resposta = mysqli_query($conexao, $sql) or die("Erro ao conectar");
        if(mysqli_num_rows($resposta)>0){
            return false;
        }else{

            $sql = "INSERT INTO adm (senha, email, nome, telefone, imagem) 
                    VALUES ('$senha', '$email', '$nome', '$telefone', '$foto')";
            
            if (mysqli_query($conexao, $sql)) {
        
                return true;
            } else {
                return false;
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
            }


            }
        }   
 ?>