<?php
    function lista(){
        require './DAO/administrativo/listarAdmSQL.php';
        $listagem = listar();

        return $listagem;
    }
    
 ?>