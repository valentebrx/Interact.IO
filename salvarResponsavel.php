<?php
    switch ($_REQUEST["acao"]) {
        case 'salvar':

            $id_usuario = $_POST["id_usuario"]; 
            $id_empresa = $_POST["id_empresa"];  


            $conn = new PDO('sqlite:banco/vend.db');    
            $sql = "INSERT INTO responsavel('id_empresa','id_usuario') VALUES('$id_empresa','$id_usuario')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Responsável com Sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            else{
                print "<script>alert('Não foi possível cadastrar')</script>";
                print "<script>location.href='index.php'</script>";
            }
     

        break;
        }