<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Buscar ..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">

                        <!-- INÍCIO DO ICONE DE MENSAGEM -->
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">2</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>Você tem 2 novas mensagens</p>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                    </div>
                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Enviou uma foto</p>
                                        <span class="time">3 min atrás</span>
                                    </div>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>Agora é possível conversar</p>
                                        <span class="time">Ontem</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">Ver todas as mensagens</a>
                                </div>
                            </div>
                        </div>
                        <!-- FIM DO ICONE DE MENSAGEM -->

                        <!-- INÍCIO DO ICONE DE ATENDIMENTOS -->
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-phone-msg"></i>
                            <span class="quantity">3</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>Você tem 3 novos atendimentos</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="/images/icon/avatar-06.jpg" alt="Diogo Fagundes" />
                                    </div>
                                    <div class="content">
                                        <p>Elogio sobre o sistema</p>
                                        <span>Diogo Fagundes, 5 min atrás</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="/images/icon/avatar-05.jpg" alt="Bruno Braga" />
                                    </div>
                                    <div class="content">
                                        <p>Solicitação de recursos</p>
                                        <span>Bruno Braga, Ontem</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="/images/icon/avatar-04.jpg" alt="Magno Dal Magro" />
                                    </div>
                                    <div class="content">
                                        <p>Reclamação sobre interface</p>
                                        <span>Magno Dal Magro, 12/03/2019</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">Ver todos os atendimentos</a>
                                </div>
                            </div>
                        </div>
                        <!-- FIM DO ICONE DE ATENDIMENTOS -->

                        <!-- INÍCIO DO ICONE DE NOTIFICAÇÕES -->
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Você tem 3 notificações</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>Você tem uma notificação de e-mail</p>
                                        <span class="date">12/03/2019 15:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Sua conta foi suspensa</p>
                                        <span class="date">12/03/2019 18:25</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>Você recebeu um novo arquivo</p>
                                        <span class="date">10/03/2019 11:32</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">Todas as notificações</a>
                                </div>
                            </div>
                        </div>
                        <!-- FIM DO ICONE DE NOTIFICAÇÕES -->

                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="/images/icon/avatar-01.jpg" alt="Diogo Fagundes" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $_SESSION['UserFname'] ?> <?php echo $_SESSION['UserLname'] ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="/images/icon/avatar-01.jpg" alt='<?php echo $_SESSION['UserFname'] ?> <?php echo $_SESSION['UserLname'] ?>' />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $_SESSION['UserFname'] ?> <?php echo $_SESSION['UserLname'] ?></a>
                                        </h5>
                                        <span class="email"><?php echo $_SESSION['UserEmail'] ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="/pages/account.php">
                                            <i class="zmdi zmdi-account"></i>Minha Conta</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="pages/system.php">
                                            <i class="zmdi zmdi-settings"></i>Configurações</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Financeiro</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="/auth/at_logout.php">
                                        <i class="zmdi zmdi-power"></i>Sair</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->