<?php
function conectar() {
    $conexao = mysqli_connect("localhost", "root", "admin", "id15573888_findyourpet") or
                    die("Erro ao conectar com o banco de dados");
    mysqli_select_db($conexao, "id15573888_findyourpet");
    mysqli_query($conexao, "SET NAMES 'utf8'");
    mysqli_query($conexao, "SET character_set_connection=utf8");
    mysqli_query($conexao, "SET character_set_client=utf8");
    mysqli_query($conexao, "SET character_set_results=utf8");

    return $conexao;
}
 ?>