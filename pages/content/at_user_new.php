<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <h3 class="title-5 m-b-35">Cadastrar Usuário</h3>

            <form action="../functions/user_create.php" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            
                            <div class="card-header">Grupo e status</div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label class="switch switch-3d switch-success mr-3">
                                        <input type="checkbox" class="switch-input" checked="true" name="status" value="ativo">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                    <label for="status">Ativar este usuário?</label>
                                </div>

                                <div class="form-group">
                                    <label for="group" class=" form-control-label">Grupo</label>
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
                        </div>
                    </div>

                    <div class="col-lg-8">
                        
                        <div class="card">
                            <div class="card-header">Dados Obrigatórios</div>
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Primeiro Nome</div>
                                        <input type="text" id="pnome" name="pnome" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Último Nome</div>
                                        <input type="text" id="unome" name="unome" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Nome de Usuário</div>
                                        <input type="text" id="user" name="user" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Email</div>
                                        <input type="email" id="email" name="email" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Senha</div>
                                        <input type="password" id="senha" name="senha" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Cadastrar
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>