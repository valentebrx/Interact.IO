<h1 class="my-2">Consultar Empresa</h1>
<p></p>

<div class="cotainer my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header bg-dark text-white">Buscar Empresa</div>

                <div class="card-body mx-3">

                

                <form action="painel.php?page=detalhesEmpresa" method="POST">
                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">ID Empresa</label>
                        </div>
                        <div class="col-1">
                            <input type="text" id="id_empresa" name="id_empresa" class="form-control" aria-describedby="passwordHelpInline">
                        </div>


                        <div class="col-auto">
                            <button class="btn btn-primary" type="submmit">+ Detalhes</button>
                        </div>
                    </div>
                </form>


                <div class="bg-dark my-4 mx-0 px-0 text-white d-flex" style="height: 40px;">
                    <p class="mx-3 mt-2">Buscar uma lista de Empresas por um termo
                    <p>
                </div>



                <form action="painel.php?page=consultar_empresa" method="POST">
                    <input type="hidden" name="acao" value="salvar">
                    <div class="form-group row my-3">
                        <label for="id_empresa" class="col-auto col-form-label text-md-right">Nome da Empresa</label>
                        <div class="col-6">
                            <input type="text" id="texto" class="form-control" name="texto" autofocus>
                        </div>



                        <div class="col-auto d-grid gap-2 d-md-flex justify-content-md-start ">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                    </div>
                    <p>
                    <p>

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            error_reporting(E_ERROR | E_PARSE);

                            if ($_POST['texto'] > 1) {
                                $id = $_POST['texto'];
                            } else {
                                $id = "asdasdasdass";
                            }

                            $conn = new PDO('sqlite:banco/vend.db');
                            $sql = "SELECT * FROM db_empresas WHERE CLIENTE LIKE '%$id%'";
                            $res = $conn->query($sql);
                            foreach ($res as $row) {
                                echo "<tr>";
                                echo "<td id='id_emprsa'>";
                                echo ($row['ID_EMPRESA']);
                                echo "</td>";
                                echo "<td>";
                                echo ($row['CLIENTE']);
                                echo "</td>";
                                echo "<td>";
                                echo ($row['CEP']);
                                echo "</td>";
                                echo "<td>";
                                echo ($row['CIDADE']);
                                echo "</td>";
                                echo "<td>";
                                echo ($row['BAIRRO']);
                                echo "</td>";
                                echo "<td>";
                                echo "<section>";
                                echo "<button type='button' class='btn btn-secondary' id='";
                                echo $row["ID_EMPRESA"];
                                echo "'onclick='button()'>+ V</button>";
                                echo "</section>";
                                echo "</td>";
                                echo "<tr>";
                            }
                            ?>

                        </tbody>
                    </table>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>






<script>
    document.querySelectorAll("section > button").forEach(function(button) {
        button.addEventListener("click", function(event) {
            const el = event.target || event.srcElement;
            const id = el.id;
            var id_empresa = id
            document.getElementById('id_empresa').value = id_empresa;
        });
    });
</script>