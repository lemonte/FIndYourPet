<?php
    require './administrativo/excluirDogSQL.php';

    $idPet = $_POST["idPetDeletar"];

    excluir($idPet);
    
    $anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior
    header("Location:$anterior");
    
    
 ?>