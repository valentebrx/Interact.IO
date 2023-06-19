
<div class="cotainer my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">Cadastro de Contato</div>
                <div class="card-body">
                    <form action="?page=salvarContato" method="POST">
                        <input type="hidden" name="acao" value="salvar">
                        <div class="form-group row my-3">
                            <label for="id_empresa" class="col-md-4 col-form-label text-md-right">Id Empresa</label>
                            <div class="col-md-6">
                                <input type="text" id="id_empresa" class="form-control" name="id_empresa" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>
                            <div class="col-md-6">
                                <input type="text" id="nome" class="form-control" name="nome" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>
                            <div class="col-md-6">
                                <input type="text" id="telefone" class="form-control" name="telefone">
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                            <div class="col-md-6">
                                <input type="e-mail" id="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo</label>
                            <div class="col-md-6">
                                <input type="text" id="password" class="form-control" name="cargo">
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
                            <button type="submit" class="btn btn-primary">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>