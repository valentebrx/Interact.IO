<?php
switch ($_REQUEST["acao"]) {
    case 'salvar':

        $status = $_POST["status"];
        $id_empresa = $_POST["id_empresa__"];

        function verificarCadastro($id_empresa){
        
            $conn = new PDO('sqlite:banco/vend.db');       
            $sql = "SELECT * FROM status WHERE id_empresa = {$id_empresa}";
            $res = $conn->query($sql);
            
            foreach ($res as $row){      
               
                $dados_usuario = array($row["id_empresa"], $row["status"]);
    
                return $dados_usuario;
            }         
    
        }


        $verifica  = verificarCadastro($id_empresa);

        if ($verifica != null) {

            if($status = 'null'){

                    
                $conn = new PDO('sqlite:banco/vend.db');    
                $sql = "UPDATE status SET status = $status WHERE id_empresa = '$id_empresa'";

                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Status salvo com Sucesso')</script>";
                    print "<script>location.href='?page=carteira'</script>";
                }
                else{
                    print "<script>alert('Não foi possível cadastrar')</script>";
                    print "<script>location.href='painel.php'</script>";
                };

            }
            else{

                    
                $conn = new PDO('sqlite:banco/vend.db');    
                $sql = "UPDATE status SET status = '$status' WHERE id_empresa = '$id_empresa'";
                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Status salvo com Sucesso')</script>";
                    print "<script>location.href='?page=carteira'</script>";
                }
                else{
                    print "<script>alert('Não foi possível cadastrar')</script>";
                    print "<script>location.href='painel.php'</script>";
                };
            }
        }
        else{
            $conn = new PDO('sqlite:banco/vend.db');    
            $sql = "INSERT INTO status('id_empresa','status') VALUES('$id_empresa','$status')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Status salvo com Sucesso')</script>";
                print "<script>location.href='?page=carteira'</script>";
            }
            else{
                print "<script>alert('Não foi possível cadastrar')</script>";
                print "<script>location.href='painel.php'</script>";
            };
        }





        break;
}
