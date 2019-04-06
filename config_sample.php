<?php


// -----------------------------------------------------
// CONEXÃO COM O BANCO DE DADOS (Database connection)
// -----------------------------------------------------

// Define as variáveis com dados para acesso ao banco de dados
$dbserver = 'server.name.com';
$dbname = 'databasename';
$dbuser = 'username';
$dbpass = 'password';



// -----------------------------------------------------
// Caminhos de arquivo e acesso (Paths)
// -----------------------------------------------------

/*
Abaixo se definem os caminhos para os principais diretórios do sistema.
Below you can set the main paths to the system directories
*/


/*

// Caminho do website (websites http path)
global $website_path;
$website_path = "https://www.atencil.com.br";

// Diretório da home do servidor (Home server directory)
global $home_dir;
$home_dir = $_SERVER['DOCUMENT_ROOT'];

// Caminho do arquivo index (Index file path)
global $index_path;
$index_path = realpath('index.php');

// Diretório do index - com index.php (Index directory - with index.php)
global $index_dir1;
$index_dir1 = str_replace($home_dir, '', $index_path);

// Diretório do index - sem index.php (Index directory - without index.php)
global $index_dir2;
$index_dir2 = str_replace("/index.php", '', $index_dir1);

// Diretório do index - indicação manual (Index directory - manually provided)
global $index_dir2;
$index_dir3 = '/v2';

// Diretório de funções (Functions directory)
global $func_dir;
 $func_dir = '';

// Diretório de includes (Includes directory)
global $inc_dir;
$inc_dir = '';

// Diretório de recursos (Assets directory)
global $assets_dir;
$assets_dir = '';

// Diretório de páginas (Pages directory)
global $pages_dir;
$pages_dir = '';

// Diretório de conteúdos (Content directory)
global $contents_dir;
$contents_dir = '';

// Diretório de plugins (Plugins directory)
global $vendor_dir;
$vendor_dir = '';

// Arquivo de conexão (Connection file)
global $con_file;
$con_file = 'at_connect.php';

*/



// -----------------------------------------------------
// PERMISSÕES (Permissions)
// -----------------------------------------------------

/*
Abaixo define-se as permissões mínimas de visualização e de edição para cada uma das áreas e recursos do sistema.

Below you can set the minimum permissions to view and edit each system area.
*/



// -----------------------------------------------------
// PERMISSÕES DE VISUALIZAÇÃO (View Permissions)
// -----------------------------------------------------


// Define as permissões de visualização para as funções primárias
// Set the permissions to visualize the primary functions

$perm_view_dashboard = 1; // Permissão para ver o dashboard
$perm_view_editacc = 1; // Permissão para ver a própria conta
$perm_view_attendance = 1; // Permissão para ver os atendimentos
$perm_view_comps = 1; // Permissão para ver as empresas
$perm_view_owncomp = 1; // Permissão para ver os dados da própria empresa
$perm_view_clients = 1; // Permissão para ver os clientes
$perm_view_users = 1; // Permissão para ver os usuários e logins
$perm_view_sys = 3; // Permissão para ver as configurações de sistema
$perm_view_search = 1; // Permissão para ver a busca


// Define as permissões de visualização para as funções secundárias
// Set the permissions to visualize the secundary functions

$perm_view_modules = 2; // Permissão para ver os módulos ativos na conta
$perm_view_perms = 2; // Permissão para ver as permissões de usuário da conta




// -----------------------------------------------------
// PERMISSÕES DE EDIÇÃO (Edit Permissions)
// -----------------------------------------------------


// Define as permissões de edição para as funções primárias
// Set the permissions to edit the primary functions

$perm_edit_dashboard = 2; // Permissão para editar o dashboard
$perm_edit_editacc = 1; // Permissão para editar a própria conta
$perm_edit_attendance = 2; // Permissão para editar os atendimentos
$perm_edit_comps = 2; // Permissão para editar as empresas
$perm_edit_owncomp = 3; // Permissão para editar os dados da própria empresa
$perm_edit_clients = 2; // Permissão para editar os clientes
$perm_edit_users = 3; // Permissão para editar os usuários e logins
$perm_edit_sys = 3; // Permissão para editar as configurações de sistema
$perm_edit_search = 1; // Permissão para editar a busca


// Define as permissões de edição para as funções secundárias
// Set the permissions to edit the secundary functions

$perm_edit_modules = 3; // Permissão para manipular os módulos ativos na conta
$perm_edit_perms = 3; // Permissão para alterar as permissões de usuário da conta





// -----------------------------------------------------
// PERMISSÕES DE ADMIN ATENCIL (Atencil Admin Permissions)
// -----------------------------------------------------


// Define as permissões específicas para administração do sistema todo
// Set the especific permissions to administrate the atencil system

$perm_adm_generic = 10; // Permissão para manipular as configurações gerais do sistema
$perm_adm_search = 10; // Permissão para definir e alterar as configurações de busca do sistema
$perm_adm_users = 10; // Permissão para modificar as configurações de usuários do sistema
$perm_adm_comps = 10; // Permissão para modificar as configurações de empresas cadastradas no sistema
$perm_adm_modules = 10; // Permissão configurações de módulos e complementos do sistema
$perm_adm_perm = 10; // Permissão para modificar e definir as permissões de usuários do sistema
$perm_adm_con = 10; // Permissão para manipular as configurações de conexões (inclusive ao banco de dados)
$perm_adm_plans = 10; // Permissão para manipular os planos de usuários e seus membros




?>