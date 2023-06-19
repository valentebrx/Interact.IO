<div class="card mb-3 mx-3 px-0 gx-0" style="max-width: 17rem;">

    <div class="card-header text-center bg-primary mx-0" ">
        <h5 class=" text-white h-800"><?php echo $nome_empresa ?> </h5>
    </div>



    <div class="card-body mt-0 pt-4" style=" height: 4.4rem;">
        <div class="row mb-3">
            <div class="col-3">
                <h5 style="display: flex; align-items: center; justify-content: center">
                    <?php
                    if ($tarefas[3] == "WhatsApp") {
                        echo  '<i class="bi bi-whatsapp"></i>';
                    }
                    if ($tarefas[3] == "Telefone") {
                        echo  '<i class="bi bi-telephone"></i>';
                    }
                    if ($tarefas[3] == "E-mail") {
                        echo  '<i class="bi bi-envelope"></i>';
                    }
                    if ($tarefas[3] == "Outro") {
                        echo  '<i class="bi bi-asterisk"></i>';
                    }
                    ?></i></h5>
            </div>
            <div class="col-5 text-center">
                <h5>R$ <?php echo $somavalornotas ?></h5>
            </div>
            <div class="col-4">
                <h5>
                    <?php
                    if ($tarefas[6] == "sem") {
                        echo  '';
                    } else {
                        $data = $tarefas[6];
                        $data1 = DateTime::createFromFormat("d-m-Y", $data);
                        echo $data1->format("d/m");
                    }
                    ?>
                </h5>
            </div>

        </div>
    </div>

    <div class=" card-footer bg-white border-0 m-0 t-0">
        <div class="gap-2 justify-content-evenly d-flex">
        <form class="form-control border-0 justify-content-evenly d-flex m-o p-0"" action="painel.php?page=detalhesEmpresa" method="POST">
        

                <section>

                    <button type="button" class="btn btn-sm btn-outline-primary" id="<?php echo $row["ID_EMPRESA"] ?>" data-bs-toggle="modal" data-bs-target="#novo_status" onclick="button1()">
                        + S
                    </button>

                    <script>
                        document.querySelectorAll("section > button").forEach(function(button) {
                            button.addEventListener("click", function(event) {
                                const el = event.target || event.srcElement;
                                const id = el.id;
                                var id_empresa = id
                                document.getElementById('id_empresa__').value = id_empresa;
                            });
                        });
                    </script>
                </section>

                <div>

                    <button type="button" class="btn btn-sm btn-outline-primary" id="<?php echo $row["ID_EMPRESA"] ?>" data-bs-toggle="modal" data-bs-target="#nova_tarefa" onclick="button1()">
                        + T
                    </button>

                    <script>
                        document.querySelectorAll("div > button").forEach(function(button) {
                            button.addEventListener("click", function(event) {
                                const el = event.target || event.srcElement;
                                const id = el.id;
                                var id_empresa = id
                                document.getElementById('id_empresa_').value = id_empresa;
                            });
                        });
                    </script>
                </div>
            
                <input id='id_empresa' type='hidden' class='form-control' name='id_empresa' value=<?php echo $id_empresa ?>>
                <button class="btn btn-sm btn-outline-primary" type="submmit">+ Detalhes</button>
            </form>


        </div>
    </div>
</div>