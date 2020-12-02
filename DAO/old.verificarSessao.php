<?php
if(!isset($_COOKIE["PHPSESSID"])){
    header("Location:../index.php");
}


/*if (session_status() !== PHP_SESSION_ACTIVE) {
    header("Location:../index.php");
}
if (isset($_GET["msg"])) { 
    $anterior = $_GET["msg"];
}else{
    header("Location:../index.php");
}

    
if(isset($_COOKIE["sessao"]) && isset($_COOKIE["id"])){
    $cookiesessao = $_COOKIE["sessao"];
    $cookieid = $_COOKIE["id"];
    
    require_once './administrativo/verificarSessaoSQL.php';

    if(verificacao($cookiesessao, $cookieid)){
        header("Location:$anterior");
    }else{
            $arr_cookie_options = array (
                'expires' => time() - 3600,
                'path' => '/'
            );
            setcookie("sessao", "", $arr_cookie_options);
            setcookie("id", "", $arr_cookie_options);
            header("Location:../index.php");
    }
    
}else{
    header("Location:../index.php");
}*/



?>