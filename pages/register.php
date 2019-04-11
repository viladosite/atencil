<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/../includes/at_core.php';

// Caso o usuário já tenha as permissões de credencial, direciona para o dashboard
if (perm_check($perm_view_dashboard) == true) {header("Location: dashboard.php"); exit;}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Carregamento do head -->
        <?php require '../includes/at_head.php'; ?>
    </head>

    <body class="animsition">
        <div class="page-wrapper">
        
            <!-- Carregamento do conteúdo da página -->
            <?php require 'content/at_registerform.php'; ?>
        
            <!-- Carrega os avisos e modais da página -->
            <?php include '../includes/at_modal_terms.php' ?>

        </div>

        <!-- Carregamento dos scripts -->
        <?php require '../includes/at_scripts.php'; ?>
    </body>

</html>