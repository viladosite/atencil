<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">Usuários Cadastrados</h3>
            
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="grupo">
                            <option selected="selected">Grupos</option>
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
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="tempo">
                            <option selected="selected">Cadastrado</option>
                            <option value="">Hoje</option>
                            <option value="">Até 7 dias</option>
                            <option value="">Até 30 dias</option>
                            <option value="">Até 365 Dias</option>
                            <option value="">Todos os períodos</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filtrar
                    </button>
                </div>

                <div class="table-data__tool-right">
                    <form action="user_new.php" style="display: inline;">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i> Cadastrar Usuário
                        </button>
                    </form>

                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Exportar</option>
                            <option value="">Todos os Usuários</option>
                            <option value="">Apenas os selecionados</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>

            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">

                    <thead>
                        <tr>
                            <th>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </th>
                            <th>nome</th>
                            <th>email</th>
                            <th>cadastrado</th>
                            <th>grupo</th>
                            <th>ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        // Monta os parâmetros da query
                        $sql = "SELECT * FROM `at_users` WHERE (`usercomp` = '".$_SESSION['UserCompany'] ."')";

                        // Monta a query para execução
                        $usuarios = mysqli_query($mysql, $sql);

                        // Executa o loop com a query
                        foreach ($usuarios as $usuario) { ?>
                            
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td><?php echo $usuario['userfname'] . ' ' . $usuario['userlname']; ?></td>
                            <td><span class="block-email"> <?php echo $usuario['usermail']; ?> </span></td>
                            <td><?php echo $usuario['userregdate']; ?></td>
                            <td><?php echo $usuario['usergroup'];?> </td>
                            <td>
                                <div class="table-data-feature">

                                    <button class="item" title="Editar" name="function" value='edit' type="submit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>

                                    <?php if($usuario['userid'] !== '1') { ?>
                                    <form action="../functions/user_remove.php" method="post">
                                        <button class="item" title="Remover" name="function" value='delete' type="submit"><i class="zmdi zmdi-delete"></i></button>
                                        <input type="hidden" id="user" name="user" value="<?php echo $usuario['userid']; ?>">
                                    </form>
                                    <?php } ?>
                                    
                                </div>
                            </td>
                        </tr>

                        <tr class="spacer"></tr>

                        <?php } ?>
                        






                    </tbody>

                </table>
            </div>
            <!-- END DATA TABLE -->
        	
        </div>
    </div>
</div>