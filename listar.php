<h1 class="my-2">Inadimplêntes</h1>
<p></p>

<div class="row mx-5 my-5">


<?php

include "buscarResponsavel.php";
// include "buscarUsuario.php";
include "buscarTarefa.php";
include "buscarNotas.php";

$conn = new PDO('sqlite:banco/vend.db');
$sql = "SELECT  db_empresas.CLIENTE, db_empresas.ID_EMPRESA, db_empresas.CEP, db_empresas.COD_CLIENTE, db_empresas.CNPJ_CPF, notas.PORTADOR
        FROM notas 	
        INNER JOIN db_empresas ON db_empresas.CEP=notas.CNPJ        
        WHERE PORTADOR = 'DUPLICATAS A RECEBER'		
        GROUP BY db_empresas.CEP";
$res = $conn->query($sql);



foreach ($res as $row) {


    $id_empresa = $row["ID_EMPRESA"];
    $CNPJ = $row["CEP"];
    $id_usuario = buscarResponsavel($id_empresa);
    $tarefas = buscarTarefa($id_empresa);

    $qtd_notas = buscarQuantidadenotas($CNPJ);
    $somavalornotas = somarValoresnotas($CNPJ);

    $portador = buscarPortador($CNPJ);
    $port = $portador["PORTADOR"];

    if ($qtd_notas != null) {
        $tempo_atraso = tempoAtraso($row["CEP"]) ->format('%R%a');
    } else {
        $tempo_atraso = "";
    }

    if ($id_usuario != null) {
        $dados_usuario = buscarUsuario($id_usuario);
    } else {

        $dados_usuario = array("", "Sem Cadastro", "https://thumbs.dreamstime.com/b/vetor-de-%C3%ADcone-perfil-do-avatar-padr%C3%A3o-foto-usu%C3%A1rio-m%C3%ADdia-social-183042379.jpg");
    }

    if ($tarefas != null) {
        $tarefas = buscarTarefa($id_empresa);
    } 
    else {
        $tarefas = array("", "", "", "","Sem Tarefas","","sem");
    }
    
    include "card.php";
}

include "novo_responsavel.php";
include "nova_tarefa.php";

?>

</div>