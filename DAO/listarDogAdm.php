<?php
    function lista(){
        require './DAO/todos/listarDogSQL.php';
        $res = listar(true);

        $array = array();
        while ( $registro = mysqli_fetch_assoc($res) ) {
            $idPet = $registro["idPet"];
            $nome= $registro["nome"];
            $dono = $registro["dono"];
            $breve_descricao = $registro["breve_descricao"];
            $sobre = $registro["sobre"];
            $idade = $registro["idade"];
            $sexo = $registro["sexo"];
            $imagem = $registro["imagem"];
            $telefone = $registro["telefone"];
            $animal = $registro["animal"];
            $tipo_doacao = $registro["tipo_doacao"];

            $array[] = array(
                "idPet" => $idPet,
                "nome" => "$nome",
                "dono" => "$dono",
                "breve_descricao" => "$breve_descricao",
                "sobre" => "$sobre",
                "idade" => $idade,
                "sexo" => "$sexo",
                "imagem" => "$imagem",
                "telefone" => $telefone,
                "animal" => "$animal",
                "tipo_doacao" => "$tipo_doacao",
            );
                            
        }

        return $array;
    }
    
 ?>
 