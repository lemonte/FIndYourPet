<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {//Verificar se a sessão não já está aberta.
        session_start();
    }
    include_once "funcoesUteis.php";
    
    $email = $_POST["email"]; 
    $pass = $_POST["pass"];
    $msgErro = validarLogin($email, $pass);
    $anterior = $_SERVER['HTTP_REFERER']; //retorna a página anterior
    $proximo= "../home_administrativo.php";
    

    if ( empty($msgErro) ) {            
        include_once './administrativo/loginSQL.php';

        $validacao = logar($email);

        if (mysqli_num_rows($validacao)!=1){
            setcookie("PHPSESSID", null);
            session_destroy();
            echo"<script language='javascript' type='text/javascript'>
                    alert('Login e/ou senha incorretos!');
                    window.location.href='$anterior';
                </script>";
            exit("Login e/ou senha incorretos!");
    
        }else{
        while ( $registro = mysqli_fetch_assoc($validacao) ) {
            $idConta = $registro["idConta"];
            $sessao = $registro["senha"];

            if ($pass == $sessao){
                $_SESSION["id"] = $idConta;
            }else{
                setcookie("PHPSESSID", null);
                session_destroy();
                echo"<script language='javascript' type='text/javascript'>
                        alert('Login e/ou senha incorretos!');
                        window.location.href='$anterior';
                    </script>";
                exit("Login e/ou senha incorretos!");
            }
        }
        /*$arr_cookie_options = array (
            'expires' => time() + 3600,
            'path' => '/'
            );
            
        setcookie("id",$idConta, $arr_cookie_options);
        setcookie("sessao", $sessao, $arr_cookie_options);*/
        header("Location:$proximo");
          
        }
    } else {
        setcookie("PHPSESSID", null);
        session_destroy();
        echo"
       <script language='javascript' type='text/javascript'>
            alert('$msgErro');
            window.location.href='../index.php';
        </script>";               
    }
 ?>