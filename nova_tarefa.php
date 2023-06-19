<div class="modal fade" id="nova_tarefa" tabindex="-1" aria-labelledby="nova_tarefa" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nova_tarefa">Cadastrar nova tarefa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="?page=salvarTarefa" method="POST">
                    <input type="hidden" name="acao" value="salvar">
                    <input type="hidden" name="id_empresa" id="id_empresa_"></input>
                    <div class="mb-3">
                        <div class="container mx-0 px-0">
                            <div class="row">
                                <div class="col-4 mb-3">
                                    <label class="form-label">Forma de Contato</label>
                                    <select class="form-select" name="forma_contato" aria-label="Default select example">
                                        <option>E-mail</option>
                                        <option>Telefone</option>
                                        <option>WhatsApp</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                                <div class="col-8">
                                    <label class="form-label">Status da Negociação</label>
                                    <select class="form-select" name="status_negociacao" id="1" aria-label="Default select example">
                                        <option>Agd. Contato</option>
                                        <option>Sem Previsão</option>
                                        <option>Sem Contato</option>
                                        <option>Boleto Enviado</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrição Completa</label>
                                    <textarea class="form-control" name="desc_negociacao" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>