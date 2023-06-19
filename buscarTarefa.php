<?php

    function buscarTarefa($id_empresa){

        $conn = new PDO('sqlite:banco/vend.db');
        $sql = "SELECT * FROM tarefas WHERE id_empresa = {$id_empresa} ORDER BY id_tarefa DESC";
        $res = $conn->query($sql);
        
        foreach ($res as $row){

            $dados_tarefa = array($row["id_tarefa"], $row["t_id_usuario"],$row["id_empresa"], $row["forma_contato"], $row["status_negociacao"], $row["desc_negociacao"], $row["data_cadastro"]);

            return $dados_tarefa;
           
        }
    }

   



