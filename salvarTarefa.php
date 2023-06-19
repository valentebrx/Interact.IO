<?php
    switch ($_REQUEST["acao"]) {
        case 'salvar':

            // $id_usuario = $_POST["id_usuario"]; 
            $id_empresa = $_POST["id_empresa"];           
            $forma_contato = $_POST["forma_contato"];
            $status_negociacao = $_POST["status_negociacao"];        
            $desc_negociacao = $_POST["desc_negociacao"]; 
            $data_cadastro = date('d-m-Y');

            $conn = new PDO('sqlite:banco/vend.db');    
            $sql = "INSERT INTO tarefas('t_id_usuario','id_empresa','forma_contato','status_negociacao','desc_negociacao','data_cadastro') VALUES('$id_usuario','$id_empresa','$forma_contato','$status_negociacao','$desc_negociacao','$data_cadastro')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Tarefa cadastrada com Sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            else{
                print "<script>alert('Não foi possível cadastrar')</script>";
                print "<script>location.href='index.php'</script>";
            }     

        break;
        }