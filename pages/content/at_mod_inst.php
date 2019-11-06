<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <h3 class="title-5 m-b-35">Instalar Módulo</h3>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong>Atenção:</strong>
                        </div>
                        <div class="card-body">
                            <p>Este módulo será instalado globalmente no sistema e poderá ser ativado para as empresas individualmente. </p>
                            <p>Não prossiga se não souber o que está fazendo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    
                    <div class="card">
                        <div class="card-header">Dados do Usuário</div>
                        <div class="card-body card-block">
                            <form action="/functions/user_create.php" method="post">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Primeiro Nome</div>
                                        <input type="text" id="pnome" name="pnome" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Último Nome</div>
                                        <input type="text" id="unome" name="unome" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Nome de Usuário</div>
                                        <input type="text" id="user" name="user" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email</div>
                                        <input type="email" id="email" name="email" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Senha</div>
                                        <input type="password" id="senha" name="senha" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="permissao" class=" form-control-label">Permissão</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="permissao" id="permissao" class="form-control">
                                            <option value="1">Ver</option>
                                            <option value="2">Editar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Cadastrar
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>