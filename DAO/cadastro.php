<?php
include_once "funcoesUteis.php";

$email = $_POST["emailCadastro"];
$pass = $_POST["passCadastro"];
$nome = $_POST["nomeCadastro"];
$imagem = $_FILES["imagemCadastro"];
$telefone = $_POST["telefoneCadastro"];
$msgErro = validarCadastro($email, $pass, $nome, $imagem, $telefone);



if ( empty($msgErro) ) {            
    include_once './administrativo/cadastroSQL.php';

    $senha = password_hash($pass, PASSWORD_DEFAULT);
    $anterior = $_SERVER['HTTP_REFERER'];


    $tamanhoImg = $imagem["size"];
    $arqAberto = fopen ( $imagem["tmp_name"], "r" );
    $foto = addslashes( fread ( $arqAberto , $tamanhoImg ) );

    cadastrar($email, $senha, $nome, $foto, $telefone);


    header("Location:$anterior?msg=Cadastrado com sucesso") ;               
} else {
    echo"
    <script language='javascript' type='text/javascript'>
        alert('$msgErro');
        
    </script>";                      
}


?>