<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="../index.php">
            <img src="../images/logo_atencil_horiz.png" alt="Atencil" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-phone"></i>Atendimentos</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">Listar Todos</a>
                        </li>
                        <li>
                            <a href="#">Por Status</a>
                        </li>
                        <li>
                            <a href="#">Por Meio de Contato</a>
                        </li>
                        <li>
                            <a href="#">Por Cliente</a>
                        </li>
                    </ul>
                </li>
                


                <?php
                // Caso o usuário não tenha as permissões corretas, destroi a sessão e direciona para o index
                if (perm_check($perm_adm_comps) == true) { ?>
                    
                <!-- Item de empresas exclusivo para admins -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-briefcase"></i>Empresas</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="#">Listar Empresas</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar Empresa</a>
                        </li>
                        <li>
                            <a href="#">Grupos de Empresas</a>
                        </li>
                    </ul>
                </li>
                <!-- Item de empresas exclusivo para admins -->

                <?php }; ?>



                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-usd"></i>Clientes</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="client_list.php">Listar Clientes</a>
                        </li>
                        <li>
                            <a href="client_new.php">Cadastrar Cliente</a>
                        </li>
                        <li>
                            <a href="client_groups.php">Grupos de Clientes</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>Calendário</a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-chart-bar"></i>Relatórios</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>Usuários</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="user_list.php">Listar Usuários</a>
                        </li>
                        <li>
                            <a href="user_new.php">Cadastrar Usuário</a>
                        </li>
                        <li>
                            <a href="user_groups.php">Grupos de Usuários</a>
                        </li>
                    </ul>
                </li>

                <?php
                // Caso o usuário não tenha as permissões corretas, destroi a sessão e direciona para o index
                if (perm_check($perm_adm_modules) == true) { ?>

                
                <!-- Item de módulos exclusivo para admins -->
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-archive"></i>Módulos</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="mod_list.php">Listar Módulos</a>
                        </li>
                        <li>
                            <a href="mod_inst.php">Instalar Módulo</a>
                        </li>
                    </ul>
                </li>
                <!-- Item de módulos exclusivo para admins -->

                <?php }; ?>



                <li>
                    <a href="help.php">
                        <i class="fas fa-question"></i>Ajuda</a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->