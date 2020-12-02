<?php
    require './administrativo/editarAdmSQL.php';

    $idConta = $_POST["idConta"];
    $nome = $_POST["nome"]; 
    $email = $_POST["email"];
    if(isset($_POST["senha"])){
        $pass = $_POST["senha"];
        $senha = password_hash($pass, PASSWORD_DEFAULT);
    }else{
        $senha = null;
    }
    $telefone = $_POST["telefone"];
    

    editar($idConta, $nome, $email, $senha, $telefone);
    
    $anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior
    header("Location:$anterior");
    
    
 ?>