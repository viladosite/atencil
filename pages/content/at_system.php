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
                            <p><?php echo $_SESSION['UserRegDate']; ?></p>
                            <br>

                            <p><strong>Endereço do Servidor:</strong></p>
                            <p><?php echo $_SERVER['SERVER_ADDR']; ?></p>
                            <br>

                            <p><strong>Nome do Servidor:</strong></p>
                            <p><?php echo $_SERVER['SERVER_NAME']; ?></p>
                            <br>

                            <p><strong>Software do Servidor:</strong></p>
                            <p><?php $_SERVER['SERVER_SOFTWARE'] ?></p>
                            <br>

                            <p><strong>ID do Usuário:</strong>
                            <?php echo $_SESSION['UserID'] ?></p>

                            <p><strong>Login:</strong>
                            <?php echo $_SESSION['UserLogin'] ?></p>

                            <p><strong>Status:</strong>
                            <?php echo $_SESSION['UserActive'] ?></p>

                            <p><strong>Permissão no Atencil:</strong>
                            <?php echo $_SESSION['UserPermLvl'] ?></p>

                            <p><strong>Grupo do Usuário:</strong>
                            <?php groupinfo_byid($_SESSION['UserGroup'], 'usergroupname') ?></p>

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
                                    <div class="tab-pane fade show active" id="nav-paths" role="tabpanel" aria-labelledby="nav-paths-tab">
                                        
                                        <p class="text-muted m-b-15">
                                            Confira abaixo os caminhos de seu sistema:
                                        </p>
                                        <br>

                                        <p><strong>Website:</strong><br> <?php
                                        badge_onoff(SITE_URL);
                                        echo " " . SITE_URL;
                                        ?></p>

                                        <p><strong>Home:</strong><br> <?php
                                        badge_onoff(HOME_DIR);
                                        echo " " . HOME_DIR;
                                        ?> </p>

                                        <p><strong>Directory Path:</strong><br> <?php
                                        badge_onoff(DIR_PATH);
                                        echo " " . DIR_PATH;
                                        ?> </p>

                                        <p><strong>Modules Dir:</strong><br> <?php
                                        badge_onoff(MODS_DIR);
                                        echo " " . MODS_DIR;
                                        ?> </p>

                                        <p><strong>Functions Dir:</strong><br> <?php
                                        badge_onoff(FUNC_DIR);
                                        echo " " . FUNC_DIR;
                                        ?> </p>

                                        <p><strong>Includes Dir:</strong><br> <?php
                                        badge_onoff(INC_DIR);
                                        echo " " . INC_DIR;
                                        ?> </p>

                                        <p><strong>Pages Dir:</strong><br> <?php
                                        badge_onoff(PAGES_DIR);
                                        echo " " . PAGES_DIR;
                                        ?> </p>

                                        <p><strong>Contents Dir:</strong><br> <?php
                                        badge_onoff(CONTENT_DIR);
                                        echo " " . CONTENT_DIR;
                                        ?> </p>

                                        <p><strong>Authentication Dir:</strong><br> <?php
                                        badge_onoff(AUTH_DIR);
                                        echo " " . AUTH_DIR;
                                        ?> </p>

                                        <p><strong>Plugins Dir:</strong><br> <?php
                                        badge_onoff(PLUGINS_DIR);
                                        echo " " . PLUGINS_DIR;
                                        ?> </p>

                                        <p><strong>Connection File:</strong><br> <?php
                                        badge_onoff(CONN_FILE);
                                        echo " " . CONN_FILE;
                                        ?> </p>


                                    </div>
                                    <!-- Aba Caminhos de Sistema -->


                                    <!-- Aba Servidor -->
                                    <div class="tab-pane fade" id="nav-server" role="tabpanel" aria-labelledby="nav-server-tab">
                                        
                                        <p class="text-muted m-b-15">
                                            Confira abaixo as informações do PHPInfo:
                                        </p>
                                        
                                        <br>
                                        
                                        <p> Em breve </p>

                                        <p> <?php // phpinfo() ?> </p>
                                                                                
                                    </div>
                                    <!-- Aba Servidor -->


                                    <!-- Aba Minhas Permissões -->
                                    <div class="tab-pane fade" id="nav-perm" role="tabpanel" aria-labelledby="nav-perm-tab">
                                        
                                        <p class="text-muted m-b-15">
                                            Confira abaixo as permissões de seu usuário:
                                        </p>
                                        <br>

                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                            
                                                <p>Painel:</p>
                                                <?php badges('viewdashboard', 'editdashboard'); ?>
                                                
                                                <p>Minha Conta:</p>
                                                <?php badges('viewaccount', 'editaccount'); ?>

                                                <p>Atendimentos:</p>
                                                <?php badges('viewattendance', 'editattendance'); ?>

                                                <p>Empresas:</p>
                                                <?php badges('viewcompany', 'editcompany'); ?>

                                                <p>Clientes:</p>
                                                <?php badges('viewclients', 'editclients'); ?>

                                            </div>

                                            
                                            <div class="col-md-6">

                                                <p>Usuários:</p>
                                                <?php badges('viewusers', 'editusers'); ?>
                                            
                                                <p>Sistema:</p>
                                                <?php badges('viewsystem', 'editsystem'); ?>

                                                <p>Pesquisa:</p>
                                                <?php badges('viewsearch'); ?>

                                                <p>Módulos:</p>
                                                <?php badges('viewmodules', 'editmodules'); ?>

                                                <p>Permissões:</p>
                                                <?php badges('viewperms', 'editperms'); ?>

                                            </div>

                                        </div>

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