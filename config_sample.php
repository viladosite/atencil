<?php


// -----------------------------------------------------
// CONEXÃO COM O BANCO DE DADOS (Database Connection)
// -----------------------------------------------------

// define('DB_HOST', 'server.name.com');
// define('DB_USER', 'databaseuser');
// define('DB_PASS', 'databasepass');
// define('DB_NAME', 'databasename');



// -----------------------------------------------------
// Constantes de endereçamento (Path Constants)
// -----------------------------------------------------

/*
Abaixo se definem os caminhos para os principais diretórios do sistema.
Below you can set the main paths to the system directories
*/


// URL do site na qual o Atencil está publicado
// define('SITE_URL', 'http://site.com.br');

// Nome da pasta interna onde está instalado o Atencil
// define('HOME_DIR', 'homedirpath');

// Caminho completo na qual o Atencil está publicado
// define('HOME_PATH', SITE_URL . HOME_DIR);

// Caminho da pasta na mídia local do servidor
// define('DIR_PATH', $_SERVER['DOCUMENT_ROOT']);





// -----------------------------------------------------
// Pastas de sistema e módulos internos
// (Internal Modules and Directory Paths)
// -----------------------------------------------------


// Diretório de Fontes (Fonts directory)
// define('FONTS_DIR', '/fonts');

// Diretório de CSS (CSS directory)
// define('CSS_DIR', '/css');

// Diretório de Javascript (Javascripts directory)
// define('JS_DIR', '/js');

// Diretório de Imagens (Images directory)
// define('IMGS_DIR', '/images');

// Diretório de módulos (Modules directory)
// define('MODS_DIR', '/modules');

// Diretório de funções (Functions directory)
// define('FUNC_DIR', '/functions');

// Diretório de includes (Includes directory)
// define('INC_DIR', '/includes');

// Diretório de páginas (Pages directory)
// define('PAGES_DIR', '/pages');

// Diretório de conteúdos (Content directory)
// define('CONTENT_DIR', PAGES_DIR . '/content');

// Diretório de autenticação (Auth directory)
// define('AUTH_DIR', '/auth');

// Diretório de Plugins (Plugins directory)
// define('PLUGINS_DIR', '/vendor');

// Arquivo de conexão (Connection file)
// define('CONN_FILE', 'at_connect.php');






// -----------------------------------------------------
// PERMISSÕES (Permissions)
// -----------------------------------------------------

// Abaixo define-se as permissões mínimas de visualização e de edição para cada uma das áreas e recursos do sistema.
// Below you can set the minimum permissions to view and edit each system area.


/* VARIÁVEIS (VARIABLES)


// -----------------------------------------------------
// PERMISSÕES DE VISUALIZAÇÃO (View Permissions)
// -----------------------------------------------------


// Cria as permissões de visualização para as funções primárias
// Create the permissions to visualize the primary functions

global $perm_view_dashboard;
$perm_view_dashboard = 1; // Permissão para ver o dashboard

global $perm_view_editacc;
$perm_view_editacc = 1; // Permissão para ver a própria conta

global $perm_view_attendance;
$perm_view_attendance = 1; // Permissão para ver os atendimentos

global $perm_view_comps;
$perm_view_comps = 1; // Permissão para ver as empresas

global $perm_view_owncomp;
$perm_view_owncomp = 1; // Permissão para ver os dados da própria empresa

global $perm_view_clients;
$perm_view_clients = 1; // Permissão para ver os clientes

global $perm_view_users;
$perm_view_users = 1; // Permissão para ver os usuários e logins

global $perm_view_sys;
$perm_view_sys = 3; // Permissão para ver as configurações de sistema

global $perm_view_search;
$perm_view_search = 1; // Permissão para ver a busca




// Cria as permissões de visualização para as funções secundárias
// Create the permissions to visualize the secundary functions

global $perm_view_modules;
$perm_view_modules = 2; // Permissão para ver os módulos ativos na conta

global $perm_view_perms;
$perm_view_perms = 2; // Permissão para ver as permissões de usuário da conta




// -----------------------------------------------------
// PERMISSÕES DE EDIÇÃO (Edit Permissions)
// -----------------------------------------------------


// Cria as permissões de edição para as funções primárias
// Create the permissions to edit the primary functions

global $perm_edit_dashboard;
$perm_edit_dashboard = 2; // Permissão para editar o dashboard

global $perm_edit_editacc;
$perm_edit_editacc = 1; // Permissão para editar a própria conta

global $perm_edit_attendance;
$perm_edit_attendance = 2; // Permissão para editar os atendimentos

global $perm_edit_comps;
$perm_edit_comps = 2; // Permissão para editar as empresas

global $perm_edit_owncomp;
$perm_edit_owncomp = 3; // Permissão para editar os dados da própria empresa

global $perm_edit_clients;
$perm_edit_clients = 2; // Permissão para editar os clientes

global $perm_edit_users;
$perm_edit_users = 3; // Permissão para editar os usuários e logins

global $perm_edit_sys;
$perm_edit_sys = 3; // Permissão para editar as configurações de sistema

global $perm_edit_search;
$perm_edit_search = 1; // Permissão para editar a busca




// Define as permissões de edição para as funções secundárias
// Set the permissions to edit the secundary functions

global $perm_edit_modules;
$perm_edit_modules = 3; // Permissão para manipular os módulos ativos na conta

global $perm_edit_perms;
$perm_edit_perms = 3; // Permissão para alterar as permissões de usuário da conta





// -----------------------------------------------------
// PERMISSÕES DE ADMIN ATENCIL (Atencil Admin Permissions)
// -----------------------------------------------------


// Define as permissões específicas para administração do sistema todo
// Set the especific permissions to administrate the atencil system

global $perm_adm_generic;
$perm_adm_generic = 10; // Permissão para manipular as configurações gerais do sistema

global $perm_adm_search;
$perm_adm_search = 10; // Permissão para definir e alterar as configurações de busca do sistema

global $perm_adm_users;
$perm_adm_users = 10; // Permissão para modificar as configurações de usuários do sistema

global $perm_adm_comps;
$perm_adm_comps = 10; // Permissão para modificar as configurações de empresas cadastradas no sistema

global $perm_adm_modules;
$perm_adm_modules = 10; // Permissão configurações de módulos e complementos do sistema

global $perm_adm_perm;
$perm_adm_perm = 10; // Permissão para modificar e definir as permissões de usuários do sistema

global $perm_adm_con;
$perm_adm_con = 10; // Permissão para manipular as configurações de conexões (inclusive ao banco de dados)

global $perm_adm_plans;
$perm_adm_plans = 10; // Permissão para manipular os planos de usuários e seus membros


VARIÁVEIS (VARIABLES)  */ 


?>