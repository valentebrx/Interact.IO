
<div class="card  mt-4 mx-4 border-0" data-bs-spy="scroll" style="height: 85vh; width: 85vw; ">

       

          <?php

          $id = $_POST["id_empresa"];


          // $id = 32801;
          $conn = new PDO('sqlite:banco/vend.db');
          $sql = "SELECT * FROM db_empresas WHERE id_empresa = '$id'";
          $res = $conn->query($sql);

          foreach ($res as $row) {

            $id_empresa = $row["ID_EMPRESA"];
            $nome_empresa = $row["CLIENTE"];
            $cnpj = $row["CEP"];
            $rua = $row["RUA"];
            $numero = $row["N"];
            $bairro = $row["UF"];
            $cidade = $row["BAIRRO"];
            $uf = $row["CIDADE"];
          }

          ?>

          <div class="card-header m-3 bg-primary text-white row align-items-start">
            <div class="col">
            <h1><?php echo $nome_empresa ?></h1>
            </div>
          </div>

          <div class="card-body overflow-auto m-3">
          <div class="row align-items-center my-3">
            <h5>Dados Cadastrais</h5>
            <?php echo $cnpj ?>
          </div>
          <div class="row align-items-center my-3">
            <h5>Endereço</h5>
            Rua: <?php echo $rua ?>
            N: <?php echo $numero ?>
            <br>
            Bairro: <?php echo $bairro ?>
            Cidade: <?php echo $cidade ?>
            UF: <?php echo $uf ?>
          </div>


          <?php

          include "buscarResponsavel.php";
          $id_usuario = buscarResponsavel($id_empresa);
          if ($id_usuario != null) {
            $dados_usuario = buscarUsuario($id_usuario);
          } else {

            $dados_usuario = array("", "Sem Cadastro", "https://thumbs.dreamstime.com/b/vetor-de-%C3%ADcone-perfil-do-avatar-padr%C3%A3o-foto-usu%C3%A1rio-m%C3%ADdia-social-183042379.jpg");
          }


          ?>
          <div class="col-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" id="<?php echo $id_empresa ?>" data-bs-toggle="modal" data-bs-target="#novo_responsavel" onclick="button()">
              Novo Responsavel +
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

          <?php
          include "novo_responsavel.php";


          ?>

          <div class="row text-center align-middle py-2">
            <div class="col-1  p-3">
              <img class="img-fluid rounded-circle" src="<?php echo $dados_usuario[2] ?>">
            </div>
            <div class="col-1">
              <span class="align-middle"><?php echo $dados_usuario[1] ?></span>
            </div>
          </div>

          <a href="?page=novoContato" class="btn btn-primary role=" button">Novo Contato +</a>


          <div class="row align-items-center my-3">
            <h5 class="bg-dark text-white text-center">Contatos</h5>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Cargo</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $conn = new PDO('sqlite:banco/vend.db');
                $sql = "SELECT * from contatos  WHERE id_empresa = '$id'";
                $res = $conn->query($sql);
                foreach ($res as $row) {
                  echo "<tr>";
                  echo "<td>";
                  echo ($row['ID_CONTATO']);
                  echo "</td>";
                  echo "<td>";
                  echo ($row['NOME']);
                  echo "</td>";
                  echo "<td>";
                  echo ($row['TELEFONE']);
                  echo "</td>";
                  echo "<td>";
                  echo ($row['E-MAIL']);
                  echo "</td>";
                  echo "<td>";
                  echo ($row['CARGO']);
                  echo "</td>";
                  echo "<td>";
                  echo "<a href='deletarContato.php?id=";
                  echo ($row['ID_CONTATO']);
                  echo "'class='btn btn-danger role=button'>Excluir</a>";
                  echo "</td>";
                  echo "<tr>";
                }
                ?>

              </tbody>
            </table>
          </div>
          <div class="row align-items-center">
            <h5 class="bg-dark text-white text-center">Notas</h5>
            <table class="table table-striped"">
      <thead>
        <tr>
          <th scope=" col">NF</th>
              <th scope="col">PORTADOR</th>
              <th scope="col">DATA EMISSÃO</th>
              <th scope="col">DATA VENCIMENTO</th>
              <th scope="col">VALOR</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  $conn = new PDO('sqlite:banco/vend.db');
                  $sql = "SELECT * from notas  WHERE CNPJ = '$cnpj' ORDER by DATA_VENCIMENTO";
                  $res = $conn->query($sql);
                  foreach ($res as $row) {
                    echo "<tr>";
                    echo "<td>";
                    echo ($row['NF']);
                    echo "</td>";
                    echo "<td>";
                    echo ($row['PORTADOR']);
                    echo "</td>";
                    echo "<td>";
                    echo ($row['DATA_EMISSAO']);
                    echo "</td>";
                    echo "<td>";
                    echo ($row['DATA_VENCIMENTO']);
                    echo "</td>";
                    echo "<td>";
                    echo ($row['VALOR']);
                    echo "</td>";
                    echo "<tr>";
                  }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row align-items-end">
            <h5 class="bg-dark text-white text-center">Tarefas</h5>

            <?php

            include "nova_tarefa.php";
            ?>

            <section>

              <button type="button" class="btn btn-primary" id="<?php echo $id_empresa ?>" data-bs-toggle="modal" data-bs-target="#nova_tarefa" onclick="button1()">
                Nova Tarefa +
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

            <table class="table table-striped"">
      <thead>
        <tr>
          <th scope=" col">FORMA CONTATO</th>
              <th scope="col">STATUS</th>
              <th scope="col">DATA</th>
              <th scope="col">DESCRIÇÃO</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  $conn = new PDO('sqlite:banco/vend.db');
                  $sql = "SELECT * from tarefas  WHERE id_empresa = '$id' ORDER by data_cadastro";
                  $res = $conn->query($sql);
                  foreach ($res as $row) {
                    echo "<tr>";
                    echo "<td>";
                    echo ($row['forma_contato']);
                    echo "</td>";
                    echo "<td>";
                    echo ($row['status_negociacao']);
                    echo "</td>";
                    echo "<td>";
                    echo ($row['data_cadastro']);
                    echo "</td>";
                    echo "<td>";
                    echo ($row['desc_negociacao']);
                    echo "</td>";
                    echo "<tr>";
                  }
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
