<div class="modal fade" id="novo_responsavel" tabindex="-1" aria-labelledby="novo_responsavel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="novo_responsavel">Cadastrar Responsável</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?page=salvarResponsavel" method="POST">
                    <input type="hidden" name="acao" value="salvar">
                    <div class="mb-3">
                        <input type="hidden" name="id_empresa" id="id_empresa"></input>
                        <select class="form-select" name="id_usuario" aria-label="Default select example">
                            <?php
                            $dados_usuarios = buscarTodosUsuario();

                            foreach ($dados_usuarios as $row) {

                                echo '<option value=' . $row["id_usuario"] . '>' . $row["nome"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>