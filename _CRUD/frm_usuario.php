<form action="" class="form-control" method="POST">
    <div class="row">
        <div class="col-sm-12">
            <h1>Formulário de cadastro de Usuários</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID Usuario">
        </div>
        <div class="col-sm-6"></div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtData" id="txtData" placeholder="Data Cadastro">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome Completo">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login do usuário">
        </div>
        <div class="col-sm-3">
            <input type="password" class="form-control" name="txtSenha" id="txtSenha" placeholder="Informe a senha">
        </div>
        <div class="col-sm-3">
            <select name="txtStatus" id="txtStatus" class="form-control">
                <option value="" selected>-- Selecione o status --</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <textarea name="txtObs" id="txtObs" class="form-control" rows="5" placeholder="Insira a observação do cadastro (campo não obrigatório)"></textarea>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-sm-12">
            <button name="btoPesquisa" class="btn btn-primary">Pesquisar</button>
            <button name="btoCadastrar" class="btn btn-success" formaction="usuario_cadastrar.php">Cadastrar</button>
            <button name="btoAlterar" class="btn btn-warning" formaction="usuario_alterar.php">Alterar</button>
            <a name="btoLimpar" class="btn btn-dark" href="index.php">Limpar</a>
            <button name="btoExcluir" class="btn btn-danger" formaction="usuario_excluir.php">Excluir</button>
        </div>
    </div>
</form>
