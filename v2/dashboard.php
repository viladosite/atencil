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