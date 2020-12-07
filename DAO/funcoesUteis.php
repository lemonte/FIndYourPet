<?php
function validarCampos($nome, $dono, $breve_descricao, $sobre, $idade, $sexo, $imagem, $telefone, $animal) {
    $msgErro = "";
    
    if ( empty($nome) ) {
        $msgErro = $msgErro . "Nome inválido!, ";
    }
    if ( strlen( $nome ) > 100 ) {
        $msgErro = $msgErro . "Nome inválido!, ";
    }
    if ( empty($dono) ) {
        $msgErro = $msgErro . "Dono inválido!, ";
    }
    if ( strlen( $dono ) > 100 ) {
        $msgErro = $msgErro . "Dono inválido!, ";
    }
    if ( empty($breve_descricao) ) {
        $msgErro = $msgErro . "Descrição inválida!, ";
    }
    if ( strlen( $breve_descricao ) > 500 ) {
        $msgErro = $msgErro . "Descrição inválido!, ";
    }
    
    if ( is_numeric ( $telefone ) == false ) {
        $msgErro = $msgErro . "Telefone inválido!, ";
    }
    if ( strlen( $telefone ) > 11 ) {
        $msgErro = $msgErro . "Telefone inválido!, ";
    }
    
    if ( empty($sexo)){
        $msgErro = $msgErro . "Sexo inválido!, ";
    }
    if ( strlen( $sexo ) > 1 ) {
        $msgErro = $msgErro . "Sexo inválido!, ";
    }
    if ( empty($animal)){
        $msgErro = $msgErro . "Animal inválido!, ";
    }
    if ( strlen( $animal ) > 100 ) {
        $msgErro = $msgErro . "Animal inválido!, ";
    }

    if ( empty($sobre)){
        $msgErro = $msgErro . "Sobre inválido!, ";
    }
    if ( strlen( $sobre ) > 500 ) {
        $msgErro = $msgErro . "Sobre inválido!, ";
    }
    
    if ( is_numeric($idade) == false ){
        $msgErro = $msgErro . "Idade inválida!, ";
    }
    if ( strlen( $idade ) > 11 ) {
        $msgErro = $msgErro . "Idade inválido!, ";
    }
    if ( $imagem["error"] != 0 ) {
        $msgErro = $msgErro . "Erro no upload do arquivo!, ";
        }

    if ( $imagem["size"] > 1000000 ) {
        $msgErro = $msgErro . "Arquivo muito grande!, ";
        }
    
    if ( ( $imagem["type"] != "image/gif" ) &&
    ( $imagem["type"] != "image/jpeg" ) &&
    ( $imagem["type"] != "image/pjpeg" ) &&
    ( $imagem["type"] != "image/png" ) &&
    ( $imagem["type"] != "image/x-png" ) &&
    ( $imagem["type"] != "image/bmp" ) ) {
        $msgErro = $msgErro . "Tipo não permitido!";
    }
    
    return $msgErro;
}


function validarLogin($email, $pass) {
    $msgErro = "";
    
    if ( empty($email) ) {
        $msgErro = $msgErro . "Email inválido!, ";
    }
    if ( empty($pass) ) {
        $msgErro = $msgErro . "Senha inválido! ";
    }
    
    return $msgErro;
}


function validarCadastro($email, $pass, $nome, $imagem, $telefone){

    $msgErro = "";


    if ( empty($email) ) {
        $msgErro = $msgErro . "Email inválido!, ";
    }
    if ( strlen( $email ) > 100 ) {
        $msgErro = $msgErro . "Email inválido!, ";
    }
    if ( empty($pass) ) {
        $msgErro = $msgErro . "Senha inválida!, ";
    }
    if ( strlen( $pass ) > 1000 ) {
        $msgErro = $msgErro . "senha inválida!, ";
    }
    if ( empty($nome) ) {
        $msgErro = $msgErro . "Nome inválido!, ";
    }
    if ( strlen( $nome ) > 100 ) {
        $msgErro = $msgErro . "Nome inválido!, ";
    }
    if ( is_numeric ( $telefone ) == false ) {
        $msgErro = $msgErro . "Telefone inválido!, ";
    }
    if ( strlen( $telefone ) > 11 ) {
        $msgErro = $msgErro . "Telefone inválido!, ";
    }
    if ( ( $imagem["type"] != "image/gif" ) &&
    ( $imagem["type"] != "image/jpeg" ) &&
    ( $imagem["type"] != "image/pjpeg" ) &&
    ( $imagem["type"] != "image/png" ) &&
    ( $imagem["type"] != "image/x-png" ) &&
    ( $imagem["type"] != "image/bmp" ) ) {
        $msgErro = $msgErro . "Imagem não permitida!";
    }

    return $msgErro;
}

?>