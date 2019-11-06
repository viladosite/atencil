<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <strong>Server Info</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Data de Registro:</strong></p>
                            <p><?php echo $_SESSION['UserRegDate'] ?></p>
                            <br>

                            <p><strong>Nome:</strong></p>
                            <p><?php echo $_SESSION['UserFname'], " ", $_SESSION['UserLname']; ?></p>
                            <br>

                            <p><strong>Email:</strong></p>
                            <p><?php echo $_SESSION['UserEmail'] ?></p>
                            <br>

                            <p><strong>Empresa:</strong></p>
                            <p><?php compinfo_byid($_SESSION['UserCompany'], 'companyname'); ?></p>
                            <br>

                            <p><strong>ID do Usuário:</strong>
                            <?php echo $_SESSION['UserID'] ?></p>

                            <p><strong>Login:</strong>
                            <?php echo $_SESSION['UserLogin'] ?></p>

                            <p><strong>Status:</strong>
                            <?php echo $_SESSION['UserActive'] ?></p>

                            <p><strong>Permissão no Atencil:</strong>
                            <?php echo $_SESSION['UserPermLvl'] ?></p>

                            <p><strong>Permissão na Empresa:</strong>
                            <?php echo $_SESSION['UserCompanyLvl'] ?></p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Informações do Sistema</h4>
                        </div>
                        <div class="card-body">
                            <div class="default-tab">
                                
                                <!-- Orelhas das abas -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        
                                        <a class="nav-item nav-link active" id="nav-paths-tab" data-toggle="tab" href="#nav-paths" role="tab" aria-controls="nav-paths"
                                         aria-selected="true">Caminhos de Sistema</a>
                                        
                                        <?php if (perm_check($perm_edit_owncomp) == true){ ?>
                                        <a class="nav-item nav-link" id="nav-server-tab" data-toggle="tab" href="#nav-server" role="tab" aria-controls="nav-server" aria-selected="false">Servidor</a>
                                        <?php } ?>

                                        <a class="nav-item nav-link" id="nav-perm-tab" data-toggle="tab" href="#nav-perm" role="tab" aria-controls="nav-perm" aria-selected="false">Permissões</a>

                                    </div>
                                </nav>
                                <!-- Orelhas das abas -->


                                <!-- Conteúdo das abas -->
                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                    


                                    <!-- Aba Caminhos de Sistema -->
                                    <div class="tab-pane fade" id="nav-paths" role="tabpanel" aria-labelledby="nav-paths-tab">
                                        
                                        <p class="text-muted m-b-15">
                                            Confira abaixo os caminhos de seu sistema:
                                        </p>
                                        <br>

                                        <p> Website:<br>
                                        <?php echo $website_path; ?></p>

                                        <p> Home:<br>
                                        <?php echo $home_dir; ?> </p>

                                        <p> Index 1:<br>
                                        <?php echo $index_path; ?> </p>

                                        <p> Index 2:<br>
                                        <?php echo $index_dir1; ?> </p>

                                        <p> Index 3:<br>
                                        <?php echo $index_dir2; ?> </p>

                                        <p> Index 4:<br>
                                        <?php echo $index_dir3; ?> </p>

                                        <p> Modules Dir:<br>
                                        <?php echo $mods_dir; ?> </p>

                                        <p> Functions Dir:<br>
                                        <?php echo $func_dir; ?> </p>

                                        <p> Includes Dir:<br>
                                        <?php echo $inc_dir; ?> </p>

                                        <p> Assets Dir:<br>
                                        <?php echo $assets_dir; ?> </p>

                                        <p> Pages Dir:<br>
                                        <?php echo $pages_dir; ?> </p>

                                        <p> Contents Dir:<br>
                                        <?php echo $contents_dir; ?> </p>

                                        <p> Connection File:<br>
                                        <?php echo $con_file; ?> </p>


                                    </div>
                                    <!-- Aba Caminhos de Sistema -->


                                    <!-- Aba Servidor -->
                                    <?php if (perm_check($perm_edit_sys) == true){ ?>
                                    <div class="tab-pane fade" id="nav-server" role="tabpanel" aria-labelledby="nav-server-tab">
                                        
                                        <p class="text-muted m-b-15">
                                            Confira abaixo as informações do PHPInfo:
                                        </p>
                                        
                                        <br>
                                        
                                        <p> Em breve </p>

                                        <p> <?php // phpinfo() ?> </p>
                                                                                
                                    </div>
                                    <?php } ?>
                                    <!-- Aba Servidor -->


                                    <!-- Aba Minhas Permissões -->
                                    <div class="tab-pane fade" id="nav-perm" role="tabpanel" aria-labelledby="nav-perm-tab">
                                        
                                        <p class="text-muted m-b-15">
                                            Confira abaixo as permissões de seu usuário:
                                        </p>
                                        <br>

                                        <p>Painel:  
                                        <?php badges($perm_view_dashboard, $perm_edit_dashboard); ?>
                                        </p>
                                        
                                        <p>Minha Conta:  
                                        <?php badges($perm_view_editacc, $perm_edit_editacc); ?>
                                        </p>

                                        <p>Atendimentos:  
                                        <?php badges($perm_view_attendance, $perm_edit_attendance); ?>
                                        </p>

                                        <p>Empresas:  
                                        <?php badges($perm_view_comps, $perm_edit_comps); ?>
                                        </p>

                                        <p>Sua Empresa:  
                                        <?php badges($perm_view_owncomp, $perm_edit_owncomp); ?>
                                        </p>

                                        <p>Clientes:  
                                        <?php badges($perm_view_clients, $perm_edit_clients); ?>
                                        </p>

                                        <p>Usuários:  
                                        <?php badges($perm_view_users, $perm_edit_users); ?>
                                        </p>

                                        <p>Sistema Atencil:  
                                        <?php badges($perm_view_sys, $perm_edit_sys); ?>
                                        </p>

                                        <p>Pesquisa:  
                                        <?php badges($perm_view_search, $perm_edit_search); ?>
                                        </p>

                                        <p>Módulos:  
                                        <?php badges($perm_view_modules, $perm_edit_modules); ?>
                                        </p>

                                        <p>Permissões:  
                                        <?php badges($perm_view_perms, $perm_edit_perms); ?>
                                        </p>

                                    </div>
                                    <!-- Aba Minhas Permissões -->
                                    
                                </div>
                                <!-- Conteúdo das abas -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carregamento do rodapé -->
            <?php include '../includes/at_footer.php'; ?>
            
        </div>
    </div>
</div>