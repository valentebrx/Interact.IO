<?php

    function buscarResponsavel($id_empresa){

        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT * FROM responsavel WHERE id_empresa = {$id_empresa} ORDER BY id_responsavel DESC";
        $res = $conn->query($sql);
        
        foreach ($res as $row){

            $id_usuario = $row["id_usuario"];
           
            return $id_usuario;     
        }

    }









    

