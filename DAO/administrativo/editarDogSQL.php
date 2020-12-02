<?php
    function editar(
$idPet,
$nome,
$dono,
$breve_descricao,
$sobre,
$idade,
$sexo,
$telefone,
$animal,
$imagem
    ){
        require './conexao.php';
        $conexao = conectar();

        if($imagem != null){
        $sql = "UPDATE pet SET nome = '$nome',
            dono = '$dono',
            breve_descricao = '$breve_descricao',
            sobre = '$sobre',
            idade = '$idade',
            sexo = '$sexo',
            imagem = '$imagem',
            telefone = '$telefone',
            animal = '$animal' WHERE pet.idPet = '$idPet'";
        }else{

        $sql = "UPDATE pet SET nome = '$nome',
            dono = '$dono',
            breve_descricao = '$breve_descricao',
            sobre = '$sobre',
            idade = '$idade',
            sexo = '$sexo',
            telefone = '$telefone',
            animal = '$animal' WHERE pet.idPet = '$idPet'";
        }

        mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );
        
        
    }
    
 ?>