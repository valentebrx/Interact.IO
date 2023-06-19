<?php

$id = $_GET["id"];
echo $id;

$conn = new PDO('sqlite:banco/vend.db');    
$sql = "DELETE FROM 'contatos' WHERE ID_CONTATO = '$id'";
$res = $conn->query($sql);


if($res==true){
    print "<script>alert('Cadastrado deletado com Sucesso')</script>";
    print "<script>location.href='painel.php?page=detalhesEmpresa'</script>";
}
else{
    print "<script>alert('Não foi possível deletar')</script>";
    print "<script>location.href='detalhes_empresa.php'</script>";
}
