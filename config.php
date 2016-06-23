<?php

// Define as variáveis com a configuração do banco de dados
$dbserver = 'mysql524.umbler.com';
$dbname = 'atencil';
$dbuser = 'atencil';
$dbpass = 'gPpN1357';

// Abaixo define-se a permissão de visualização e de edição para cada uma das áreas e recursos do sistema.
// Below you can set the permissions.

// Define as permissões de visualização para as funções primárias
$perm_view_dashboard = 1;
$perm_view_editacc = 1;
$perm_view_attendance = 1;
$perm_view_clients = 1;
$perm_view_users = 1;
$perm_view_sys = 3;
$perm_view_search = 1;


// Define as permissões de visualização para as funções secundárias
$perm_view_modules = 2;
$perm_view_perms = 2;


// Define as permissões de edição para as funções primárias
$perm_edit_dashboard = 2;
$perm_edit_editacc = 1;
$perm_edit_attendance = 2;
$perm_edit_clients = 2;
$perm_edit_users = 3;
$perm_edit_sys = 3;
$perm_edit_search = 1;


// Define as permissões de edição para as funções secundárias
$perm_edit_modules = 3;
$perm_edit_perms = 3;




?>