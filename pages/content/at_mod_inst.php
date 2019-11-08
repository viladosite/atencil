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
                        <div class="card-header">Instalar módulo</div>
                        <div class="card-body card-block">
                            <form action="/functions/mod_install.php" enctype="multipart/form-data" method="post">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="modfile" class=" form-control-label">Selecione o(s) MOD(s) </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="modfile" name="modfile" class="form-control-file">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="instperm" class=" form-control-label">Permissão</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="instperm" id="instperm" disabled="" class="form-control">
                                            <option value="0">Selecione a permissão</option>
                                            <option value="1">Para Todos</option>
                                            <option value="2">Para uma Empresa</option>
                                            <option value="3">Para um Usuário</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Instalar
                                    </button>

                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Limpar
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