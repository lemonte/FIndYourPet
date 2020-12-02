<?php
function verificacao($cookiesessao, $cookieid){
    
    require_once './conexao.php';

    $conexao = conectar();

    $sql = "SELECT * FROM adm WHERE idConta = '$cookieid'";

    $resposta = mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );

    if(mysqli_num_rows($resposta) != 1){
        return false;
    }else{
        while ( $registro = mysqli_fetch_assoc($resposta) ) {
            $senha = $registro["senha"];

            if ($cookiesessao == $cookiesessao){
                return true;
            }else{
                return false;
            }
        }
    }

}

?>