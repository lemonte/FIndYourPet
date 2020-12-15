<?php
    function editar($idPet,
$nome,
$dono,
$breve_descricao,
$sobre,
$idade,
$sexo,
$telefone,
$animal,
$imagem,
$tipo_doacao){
        require './conexao.php';
        $conexao = conectar();
        $idPet = intval("$idPet");
        

       if($imagem != null){
       $sql = "UPDATE pet SET nome = '$nome',
            dono = '$dono',
            breve_descricao = '$breve_descricao',
            sobre = '$sobre',
            idade = '$idade',
            sexo = '$sexo',
            imagem = '$imagem',
            telefone = '$telefone',
            animal = '$animal',
            tipo_doacao = '$tipo_doacao'
            WHERE pet.idPet = '$idPet'";
        }else{

        $sql = "UPDATE pet SET nome = '$nome',
            dono = '$dono',
            breve_descricao = '$breve_descricao',
            sobre = '$sobre',
            idade = '$idade',
            sexo = '$sexo',
            telefone = '$telefone',
            animal = '$animal',
            tipo_doacao = '$tipo_doacao'
            WHERE pet.idPet = '$idPet'";
        

        
        }
        mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );
    }
    
 ?>