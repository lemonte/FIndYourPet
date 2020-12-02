<?php
    include_once "funcoesUteis.php";
    
    $nome = $_POST["nome"]; 
    $dono = $_POST["dono"];
    $breve_descricao = $_POST["breve_descricao"];
    $sobre = $_POST["sobre"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $imagem = $_FILES["imagem"];
    $telefone = $_POST["telefone"];
    $animal = $_POST["animal"]; 
    $msgErro = validarCampos($nome, $dono, $breve_descricao, $sobre, $idade, $sexo, $imagem, $telefone, $animal);
    $anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior

    // Transformar imagem em binário (bytes)
    $tamanhoImg = $imagem["size"];
    $arqAberto = fopen ( $imagem["tmp_name"], "r" );
    $foto = addslashes( fread ( $arqAberto , $tamanhoImg ) );

    if ( empty($msgErro) ) {            
        include_once './usuario/cadastrarDogSQL.php';

        cadastrar($nome, $dono, $breve_descricao, $sobre, $idade, $sexo, $foto, $telefone, $animal);


        header("Location:$anterior?msg=Enviado com sucesso, espere a aprovação ou contato") ;               
    } else {
        echo"
        <script language='javascript' type='text/javascript'>
            alert('$msgErro');
            window.location.href='$anterior';
        </script>";                      
    }
 ?>