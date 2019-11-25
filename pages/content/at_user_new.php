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
                            <p>Este usuário será cadastrado como um usuário vinculado à sua empresa e poderá ver detalhes de sua empresa como </p>
                            <p>Em breve</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    
                    <div class="card">
                        <div class="card-header">Dados do Usuário</div>
                        <div class="card-body card-block">
                            <form action="../functions/user_create.php" method="post">

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="group" class=" form-control-label">Grupo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="group" id="group" class="form-control">
                                            <?php
                                            // Monta os parâmetros da query
                                            $sqlgr = "SELECT * FROM `at_usergroups` WHERE (`usergroupcomp` = '".$_SESSION['UserCompany'] ."')";

                                            // Monta a query para execução
                                            $usergrs = mysqli_query($mysql, $sqlgr);

                                            // Executa o loop com a query
                                            foreach ($usergrs as $usergr) { ?>
                                            
                                            <option value="<?php echo $usergr['usergroupid']; ?>">
                                                <?php echo $usergr['usergroupname']; ?>
                                            </option>
                                            
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>

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

                                <div class="form-group">
                                    <label class="switch switch-3d switch-success mr-3">
                                        <input type="checkbox" class="switch-input" checked="true" name="status" value="ativo">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                    <label for="status">Ativar este usuário?</label>
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