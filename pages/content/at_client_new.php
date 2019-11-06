<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <h3 class="title-5 m-b-35">Cadastrar Usuário</h3>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong>Atenção:</strong>
                        </div>
                        <div class="card-body">
                            <p>Este cliente será cadastrado como um cliente vinculado à sua empresa e seus funcionários ou usuários podem ter acesso a dados dele como:</p>
                            <p>Em breve</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    
                    <div class="card">
                        <div class="card-header">Dados do Cliente</div>
                        <div class="card-body card-block">
                            <form action="/functions/client_create.php" method="post">

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
                                        <div class="input-group-addon">Email</div>
                                        <input type="email" id="email" name="email" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="status" class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Ativo</option>
                                            <option value="2">Inativo</option>
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