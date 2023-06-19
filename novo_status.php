<div class="modal fade" id="novo_status" tabindex="-1" aria-labelledby="novo_status" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="novo_status">Cadastrar Status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?page=salvarStatus" method="POST">
                    <input type="hidden" name="acao" value="salvar">
                    <div class="mb-3">
                        <input type="hidden" name="id_empresa__" id="id_empresa__"></input>
                        <select class="form-select" name="status" aria-label="Default select example">

                            <option value="null">Aguardando Ação</option>';
                            <option value="em negociação">Em Negociação</option>';
                            <option value="fechamento">Fechamento</option>';
                            <option value="cartório">Cartório</option>';                            
                            <option value="jurídico">Jurídico</option>';

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