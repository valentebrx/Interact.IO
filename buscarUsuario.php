<?php
    
    function buscarUsuario($id_usuario){
        
        $conn = new PDO('sqlite:banco/vend.db');       
        $sql = "SELECT * FROM usuario WHERE id_usuario = {$id_usuario}";
        $res = $conn->query($sql);
        
        foreach ($res as $row){      
           
            $dados_usuario = array($row["id_usuario"], $row["nome"], $row["img"]);

            return $dados_usuario;
        }         

    }


    function buscarTodosUsuario (){

        $conn = new SQLite3('./banco/vend.db');
        $sql = "SELECT * FROM usuario ORDER BY nome DESC";
        $result = $conn->query($sql);//->fetchArray(SQLITE3_ASSOC);

        $row = array();

        $i = 0;

         while($res = $result->fetchArray(SQLITE3_ASSOC)){

            //  if(!isset($res['id_usuario'])) continue;

              $row[$i]['id_usuario'] = $res['id_usuario'];
              $row[$i]['nome'] = $res['nome'];

              $i++;

          }

        return $row;

}





