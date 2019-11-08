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
                                        <label for="file-multiple-input" class=" form-control-label">Selecione o(s) MOD(s) </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="modulos" name="modulos" multiple="" class="form-control-file">
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


                <div class="col-lg-12">
                    
                    <!-- Alerts -->
                    <?php if ($inststatus == 2) { ?>
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <span class="badge badge-pill badge-success">Sucesso</span>
                        <?php echo $message; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>


                    <?php if ($inststatus == 0) { ?>
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <span class="badge badge-pill badge-danger">Erro</span>
                        <?php echo $message; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>


                    <?php if ($inststatus == 1) { ?>
                    <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                        <span class="badge badge-pill badge-warning">Atenção</span>
                        <?php echo $message; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>

                </div>


            </div>
        </div>
    </div>
</div>