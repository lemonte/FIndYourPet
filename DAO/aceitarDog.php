<?php
    require './administrativo/aceitarDogSQL.php';

    $idPet = $_POST["idPetAceitar"];

    aceitar($idPet);
    
    $anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior
    header("Location:$anterior");
    
    
 ?>