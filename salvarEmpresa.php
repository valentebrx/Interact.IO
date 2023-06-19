<?php
    switch ($_REQUEST["acao"]) {
        case 'salvar':

            $nome = $_POST["nome"]; 
            $valor = $_POST["valor"];  
            $desc = $_POST["desc"];
            $cor = $_POST["cor"];    


            $conn = new PDO('sqlite:banco/vend.db');    
            $sql = "INSERT INTO empresas('nome','valor','desc','cor') VALUES('$nome','$valor','$desc','$cor')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com Sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            else{
                print "<script>alert('Não foi possível cadastrar')</script>";
                print "<script>location.href='index.php'</script>";
            }
     

        break;
        }