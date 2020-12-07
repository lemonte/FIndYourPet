<?php
include_once "funcoesUteis.php";

$email = $_POST["emailCadastro"];
$pass = $_POST["passCadastro"];
$nome = $_POST["nomeCadastro"];
$imagem = $_FILES["imagemCadastro"];
$telefone = $_POST["telefoneCadastro"];
$anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior
$msgErro = validarCadastro($email, $pass, $nome, $imagem, $telefone);



if ( empty($msgErro) ) {            
    include_once './administrativo/cadastroSQL.php';

    //$senha = password_hash($pass, PASSWORD_DEFAULT);


    $tamanhoImg = $imagem["size"];
    $arqAberto = fopen ( $imagem["tmp_name"], "r" );
    $foto = addslashes( fread ( $arqAberto , $tamanhoImg ) );

    if(cadastrar($email, $pass, $nome, $foto, $telefone)){
        header("Location:$anterior?msg=Cadastrado com sucesso") ; 
    }else{
        echo"
        <script language='javascript' type='text/javascript'>
            alert('Erro no cadastro, verifique informações ou se o E-mail já está cadastrado');
            window.location.href='$anterior';
        </script>"; 
    }


                  
} else {
    echo"
    <script language='javascript' type='text/javascript'>
        alert('$msgErro');
        window.location.href='$anterior';
    </script>";                      
}


?>