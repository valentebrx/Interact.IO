<div class="card mb-3 mx-2 px-0 gx-5" style="max-width: 17rem;">
    <div class="card-header text-center bg-primary mx-0" style=" height: 3.4rem;">
        <h2 class="text-white h-1000"><?php echo $row["CNPJ_CPF"] ?></h2>
    </div>
    <div class="card-body">
        <h3 class="card-title text-center"><?php echo $row["COD_CLIENTE"] ?></h3>

        <div class="row text-center align-middle py-2">
            <div class="col-3">
                <img class="img-fluid rounded-circle" src="<?php echo $dados_usuario[2] ?>">
            </div>
            <div class="col-6">
                <span class="align-middle"><?php echo $dados_usuario[1] ?></span>
            </div>
            <div class="col-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" id="<?php echo $row["ID_EMPRESA"] ?>" data-bs-toggle="modal" data-bs-target="#novo_responsavel" onclick="button()">
                    @
                </button>

                <script>
                    document.querySelectorAll("div > button").forEach(function(button) {
                        button.addEventListener("click", function(event) {
                            const el = event.target || event.srcElement;
                            const id = el.id;
                            var id_empresa = id
                            document.getElementById('id_empresa').value = id_empresa;
                        });
                    });
                </script>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nf</th>
                    <th scope="col">Total</th>
                    <th scope="col">Dias</th>
                    <th scope="col">Port</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $qtd_notas; ?></td>
                    <td>
                        <h5><?php echo $somavalornotas; ?></h5>
                    </td>
                    <td><?php echo $tempo_atraso; ?></td>
                    <td class="text-info"><?php echo $port; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="row mb-3">
            <div class="col-3">
                <?php                 
                if ($tarefas[3] == "WhatsApp") { echo  '<i class="bi bi-whatsapp"></i>'; } 
                if ($tarefas[3] == "Telefone") { echo  '<i class="bi bi-telephone"></i>'; } 
                if ($tarefas[3] == "E-mail") { echo  '<i class="bi bi-envelope"></i>'; } 
                if ($tarefas[3] == "Outro") { echo  '<i class="bi bi-asterisk"></i>'; } 
                ?>

            </div>
            <div class="col-6 text-center">
                <?php echo $tarefas[4] ?>

            </div>
            <div class="col-3">

                <?php
                if ($tarefas[6] == "sem") {
                    echo  '';
                } else {
                    $data = $tarefas[6];
                    $data1 = DateTime::createFromFormat("d-m-Y", $data);
                    echo $data1->format("d/m");
                }
                ?>
            </div>
        </div>
        <div class="text-center">
            <section>

                <button type="button" class="btn btn-sm btn-primary" id="<?php echo $row["ID_EMPRESA"] ?>" data-bs-toggle="modal" data-bs-target="#nova_tarefa" onclick="button1()">
                    + Nova Tarefa
                </button>

                <script>
                    document.querySelectorAll("section > button").forEach(function(button) {
                        button.addEventListener("click", function(event) {
                            const el = event.target || event.srcElement;
                            const id = el.id;
                            var id_empresa = id
                            document.getElementById('id_empresa_').value = id_empresa;
                        });
                    });
                </script>
            </section>
        </div>
    </div>
</div>