<?php

    switch ($_REQUEST["acao"]) {
        case 'salvar':
         
            $id_empresa = $_POST["id_empresa"]; 
            $nome = $_POST["nome"]; 
            $cargo = $_POST["cargo"];  
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];

            $conn = new PDO('sqlite:banco/vend.db');    
            $sql = "INSERT INTO contatos('NOME','CARGO','E-MAIL','TELEFONE', 'ID_EMPRESA') VALUES('$nome','$cargo','$email','$telefone', '$id_empresa')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com Sucesso')</script>";
                print "<script>location.href='?page=detalhesEmpresa'</script>";
            }
            else{
                print "<script>alert('Não foi possível cadastrar')</script>";
                print "<script>location.href='index.php'</script>";
            }
     

        break;
        }