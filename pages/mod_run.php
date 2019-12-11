<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Confere se o grupo do usuário tem permissão
if (perm_group_check('viewmodules') == false) { header("Location: error_permission.php"); exit; }

// Variáveis com dados do formulário
$modrunid = $_POST['modid'];
$modrundir = $_POST['moddir'];
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Carregamento do head -->
        <?php require '../includes/at_head.php'; ?>
    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- Carregamento do header mobile -->
            <?php require '../includes/at_headermobile.php'; ?>
            <!-- Carregamento do menu sidebar -->
            <?php require '../includes/at_menusidebar.php'; ?>
            <!-- INÍCIO DO PAGE CONTAINER-->
            <div class="page-container">
                <!-- Carregamento do header desktop -->
                <?php require '../includes/at_headerdesktop.php'; ?>
                <!-- Carregamento do conteúdo da página -->
                <?php include '../modules/' . $modrundir . '/index.php'; ?>
            </div>
            <!-- FIM DO PAGE CONTAINER-->
            <!-- Carrega os avisos e modais da página -->
            <?php include '../modals/at_modal_moddel_conf.php'; ?>
        </div>
        
        <!-- Carregamento dos scripts -->
        <?php require '../includes/at_scripts.php'; ?>
    </body>
</html>