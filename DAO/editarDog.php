<?php
    require './administrativo/editarDogSQL.php';

    $idPet = $_POST["idPet"];
    $nome = $_POST["nome"]; 
    $dono = $_POST["dono"];
    $breve_descricao = $_POST["breve_descricao"];
    $sobre = $_POST["sobre"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];
    $animal = $_POST["animal"]; 
    $imagem = $_FILES["imagem"];

    $tamanhoImg = $imagem["size"];
    $arqAberto = fopen ( $imagem["tmp_name"], "r" );
    $foto = addslashes( fread ( $arqAberto , $tamanhoImg ) );
    

    editar($idPet,
$nome,
$dono,
$breve_descricao,
$sobre,
$idade,
$sexo,
$telefone,
$animal,
$foto);
    
    $anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior
    header("Location:$anterior");
    
    
 ?>