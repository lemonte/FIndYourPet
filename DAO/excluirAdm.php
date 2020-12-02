<?php
    require './administrativo/excluirAdmSQL.php';

    $idConta = $_POST["idContaDeletar"];

    excluir($idConta);
    
    $anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior
    header("Location:$anterior");
    
    
 ?>