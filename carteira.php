<h1 class="my-2">Carteira</h1>

<link rel="stylesheet" href="css/style.css" />


<div class="tudo">
    <div class="kanban">
        <div class="column" style="padding:0; ">
            <div class="head">
                <div class="fase bg-dark" style="background-color: gray; height: 50px; color:aliceblue;   display: flex; align-items: center; justify-content: center ">
                    <h5>Aguardando Ação</h5>
                </div>
            </div>

            <div class="body overflow-auto">

                <?php

                include "buscarNotas.php";
                include "buscarTarefa.php";

                $conn = new PDO('sqlite:banco/vend.db');
                $sql = "SELECT *
                        FROM notas
                        INNER JOIN db_empresas on db_empresas.CEP = notas.CNPJ
                        INNER JOIN responsavel on db_empresas.ID_EMPRESA = responsavel.id_empresa
                        LEFT JOIN status on status.id_empresa = db_empresas.ID_EMPRESA
                        WHERE id_usuario = '$dados_usuario[0]' AND status is NULL
                        GROUP BY db_empresas.CEP";
                $res = $conn->query($sql);

                foreach ($res as $row) {

                    $nome_empresa = $row["CLIENTE"];
                    $id_empresa = $row["ID_EMPRESA"];
                    $tarefas = buscarTarefa($id_empresa);
                    $CNPJ = $row["CEP"];
                    $somavalornotas = somarValoresnotas($CNPJ);

                    if ($tarefas != null) {
                        $tarefas = buscarTarefa($id_empresa);
                    } else {
                        $tarefas = array("", "", "", "", "Sem Tarefas", "", "sem");
                    }

                    include "cardzin.php";
                }

                ?>
            </div>

        </div>
        <div class="column" style="padding:0; ">
            <div class="head">
                <div class="fase bg-dark" style="background-color: gray; height: 50px; color:aliceblue;   display: flex; align-items: center; justify-content: center ">
                    <h5>Em Negociação</h5>
                </div>
            </div>

            <div class="body overflow-auto">

                <?php

                $conn = new PDO('sqlite:banco/vend.db');
                $sql = "SELECT *
            FROM notas
            INNER JOIN db_empresas on db_empresas.CEP = notas.CNPJ
            INNER JOIN responsavel on db_empresas.ID_EMPRESA = responsavel.id_empresa
            LEFT JOIN status on status.id_empresa = db_empresas.ID_EMPRESA
            WHERE id_usuario = '$dados_usuario[0]' AND status = 'em negociação'
            GROUP BY db_empresas.CEP";
                $res = $conn->query($sql);

                foreach ($res as $row) {

                    $nome_empresa = $row["CLIENTE"];
                    $id_empresa = $row["ID_EMPRESA"];
                    $tarefas = buscarTarefa($id_empresa);
                    $CNPJ = $row["CEP"];
                    $somavalornotas = somarValoresnotas($CNPJ);

                    if ($tarefas != null) {
                        $tarefas = buscarTarefa($id_empresa);
                    } else {
                        $tarefas = array("", "", "", "", "Sem Tarefas", "", "sem");
                    }

                    include "cardzin.php";
                }

                ?>
            </div>

        </div>
        <div class="column" style="padding:0; ">
            <div class="head">
                <div class="fase bg-dark" style="background-color: gray; height: 50px; color:aliceblue;   display: flex; align-items: center; justify-content: center ">
                    <h5>Fechamento</h5>
                </div>
            </div>

            <div class="body overflow-auto">
                <?php

                $conn = new PDO('sqlite:banco/vend.db');
                $sql = "SELECT *
                        FROM notas
                        INNER JOIN db_empresas on db_empresas.CEP = notas.CNPJ
                        INNER JOIN responsavel on db_empresas.ID_EMPRESA = responsavel.id_empresa
                        LEFT JOIN status on status.id_empresa = db_empresas.ID_EMPRESA
                        WHERE id_usuario = '$dados_usuario[0]' AND status = 'fechamento'
                        GROUP BY db_empresas.CEP";
                $res = $conn->query($sql);

                foreach ($res as $row) {

                    $nome_empresa = $row["CLIENTE"];
                    $id_empresa = $row["ID_EMPRESA"];
                    $tarefas = buscarTarefa($id_empresa);
                    $CNPJ = $row["CEP"];
                    $somavalornotas = somarValoresnotas($CNPJ);

                    if ($tarefas != null) {
                        $tarefas = buscarTarefa($id_empresa);
                    } else {
                        $tarefas = array("", "", "", "", "Sem Tarefas", "", "sem");
                    }

                    include "cardzin.php";
                }

                ?>

            </div>

        </div>
        <div class="column" style="padding:0; ">
            <div class="head">
                <div class="fase bg-dark" style="background-color: gray; height: 50px; color:aliceblue;   display: flex; align-items: center; justify-content: center ">
                    <h5>Cartório</h5>
                </div>
            </div>

            <div class="body overflow-auto">

                <?php

                $conn = new PDO('sqlite:banco/vend.db');
                $sql = "SELECT *
                    FROM notas
                    INNER JOIN db_empresas on db_empresas.CEP = notas.CNPJ
                    INNER JOIN responsavel on db_empresas.ID_EMPRESA = responsavel.id_empresa
                    LEFT JOIN status on status.id_empresa = db_empresas.ID_EMPRESA
                    WHERE id_usuario = '$dados_usuario[0]' AND status = 'cartório'
                    GROUP BY db_empresas.CEP";
                $res = $conn->query($sql);

                foreach ($res as $row) {

                    $nome_empresa = $row["CLIENTE"];
                    $id_empresa = $row["ID_EMPRESA"];
                    $tarefas = buscarTarefa($id_empresa);
                    $CNPJ = $row["CEP"];
                    $somavalornotas = somarValoresnotas($CNPJ);

                    if ($tarefas != null) {
                        $tarefas = buscarTarefa($id_empresa);
                    } else {
                        $tarefas = array("", "", "", "", "Sem Tarefas", "", "sem");
                    }

                    include "cardzin.php";
                }

                ?>
            </div>
        </div>
        <div class="column" style="padding:0; ">
            <div class="head">
                <div class="fase bg-dark" style="background-color: gray; height: 50px; color:aliceblue;   display: flex; align-items: center; justify-content: center ">
                    <h5>Jurídico</h5>
                </div>
            </div>

            <div class="body overflow-auto">

                <?php

                $conn = new PDO('sqlite:banco/vend.db');
                $sql = "SELECT *
                        FROM notas
                        INNER JOIN db_empresas on db_empresas.CEP = notas.CNPJ
                        INNER JOIN responsavel on db_empresas.ID_EMPRESA = responsavel.id_empresa
                        LEFT JOIN status on status.id_empresa = db_empresas.ID_EMPRESA
                        WHERE id_usuario = '$dados_usuario[0]' AND status = 'jurídico'
                        GROUP BY db_empresas.CEP";
                $res = $conn->query($sql);

                foreach ($res as $row) {

                    $nome_empresa = $row["CLIENTE"];
                    $id_empresa = $row["ID_EMPRESA"];
                    $tarefas = buscarTarefa($id_empresa);
                    $CNPJ = $row["CEP"];
                    $somavalornotas = somarValoresnotas($CNPJ);

                    if ($tarefas != null) {
                        $tarefas = buscarTarefa($id_empresa);
                    } else {
                        $tarefas = array("", "", "", "", "Sem Tarefas", "", "sem");
                    }

                    include "cardzin.php";
                }

                ?>
            </div>

        </div>
    </div>

</div>

<?php
include "nova_tarefa.php";
include "novo_status.php";
?>


<script src="js/script.js"></script>