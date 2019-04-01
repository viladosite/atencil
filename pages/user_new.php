<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as configurações para funcionamento do sistema
require '../config.php';

// Carrega as funções para funcionamento do sistema
require "../functions/functions.php";

// Caso o usuário não tenha as permissões corretas, destroi a sessão e direciona para o index
if (perm_check($perm_edit_users) == false) {
    header("Location: error_permission.php"); exit;
}
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
            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- Carregamento do header desktop -->
                <?php require '../includes/at_headerdesktop.php'; ?>
                <!-- Carregamento do conteúdo da página -->
                <?php require 'content/at_user_new.php'; ?>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- Carregamento dos scripts -->
        <?php require '../includes/at_scripts.php'; ?>
    </body>
</html>