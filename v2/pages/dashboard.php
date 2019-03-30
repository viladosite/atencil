<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as configurações para funcionamento do sistema
require 'config.php';

// Carrega as funções para funcionamento do sistema
require "../functions/functions.php";

// Caso o usuário não tenha as permissões de acesso, direciona para o index
if (perm_check($perm_view_dashboard) == false) {header("Location: ../index.php"); exit;}
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Carregamento do head -->
        <?php require '../includes/at_head.php'; ?>
    </head>

<!-- Tentativa de carregar conteúdos numa div
    <script>
    $(document).ready(function() {
            $(document).on('click', '#menu a', function( e ){ 
            e.preventDefault();
            var href = $( this ).attr('href');
            $("#content").load( href +" #content", null, function(){componentHandler.upgradeAllRegistered();});
            });
    });
    </script>
-->

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
                <?php require 'content/at_dashboard.php'; ?>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- Carregamento dos scripts -->
        <?php require '../includes/at_scripts.php'; ?>
    </body>
</html>