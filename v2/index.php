<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as funções para funcionamento do sistema
require 'functions/functions.php';

// Caso o usuário não atenda os requisitos de nivel direciona o usuário para outra página
// if (perm_check($perm_view_dashboard) == true) {header("Location: /dashboard.php"); exit;}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Carregamento do head -->
        <?php require 'includes/head.php'; ?>
    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- Carregamento do header mobile -->
            <?php require 'includes/headermobile.php'; ?>
            <!-- Carregamento do menu sidebar -->
            <?php require 'includes/menusidebar.php'; ?>
            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- Carregamento do header desktop -->
                <?php require 'includes/headerdesktop.php'; ?>
                <!-- Carregamento do conteúdo da página -->
                <?php require 'pages/dashboard.php'; ?>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- Carregamento dos scripts -->
        <?php require 'includes/scripts.php'; ?>
    </body>

</html>