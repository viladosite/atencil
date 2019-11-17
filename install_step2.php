<!DOCTYPE html>
<html lang="pt-br">
    <head>

    <!-- Meta Tags Requeridas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Atencil Vila do Site">
    <meta name="author" content="Vila do Site">
    <meta name="keywords" content="viladosite atencil atendimento crm">

    <!-- Title Page-->
    <title>Atencil - V2</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- CSS Principal -->
    <link href="css/atencil.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
        
            <!-- Carregamento do conteúdo da página -->
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            
                            <div class="login-logo">
                                <a href="index.php">
                                    <img src="images/logo_atencil_horiz.png" alt="Atencil">
                                </a>
                            </div>

                            <?php
                            $siteurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
                            $sitedir = dirname($_SERVER['PHP_SELF']);

                            ?>

                            <div class="login-form">
                                <p>
                                    Sua instalação foi concluída com sucesso mas os arquivos de instalação podem representar um risco de segurança
                                </p>
                                <br>
                                <p> Recomendamos APAGA-LOS mas se você preferir, pode optar por move-los. </p>
                                <br>
                                <p> (eles irão para a pasta DELETE em seu servidor) </p>
                                <br><br>
                                <form action="install_move.php" method="post">
                                    <div class="form-group">
                                        <button id="movebtn" type="submit" class="btn btn-lg btn-warning btn-block">
                                            <i class="fa fa-chevron-circle-right fa-lg"></i>&nbsp;
                                            <span id="movebtn-mover">MOVER os arquivos</span>
                                            <span id="movebtn-moving" style="display:none;">Movendo…</span>
                                        </button>
                                    </div>
                                </form>
                                
                                <form action="install_remove.php" method="post">
                                    <div class="form-group">
                                        <button id="delbtn" type="submit" class="btn btn-lg btn-danger btn-block">
                                            <i class="fa fa-trash-alt fa-lg"></i>&nbsp;
                                            <span id="delbtn-mover">APAGAR os arquivos</span>
                                            <span id="delbtn-moving" style="display:none;">Apagando…</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        
            <!-- INÍCIO do modal de Termos e Condições -->
            <div class="modal fade" id="modalterms" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Termos e Condições - Atencil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Se você está instalando o ATENCIL você concorda com estes termos.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM do modal de Termos e Condições -->


        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>

        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js"></script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js"></script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>

        <!-- Main JS-->
        <script src="js/main.js"></script>


    </body>

</html>