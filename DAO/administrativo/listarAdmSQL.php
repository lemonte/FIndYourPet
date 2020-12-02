<?php
    function listar(){
        require "./DAO/conexao.php";
        $conexao = conectar();

        $sql = "SELECT * FROM `adm`";
       
        $res = mysqli_query($conexao, $sql) or die ( mysqli_error($conexao) );

        $array = array();
        while ( $registro = mysqli_fetch_assoc($res) ) {
            $idConta = $registro["idConta"];
            $nome= $registro["nome"];
            $imagem = $registro["imagem"];
            $telefone = $registro["telefone"];
            $email = $registro["email"];
           

            $array[] = array(
                "idConta" => $idConta,
                "nome" => "$nome",
                "email" => "$email",
                "imagem" => "$imagem",
                "telefone" => $telefone,
            );
                            
        }

        return $array;
}
 ?>