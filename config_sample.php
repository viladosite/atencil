<?php


// -----------------------------------------------------
// CONEXÃO COM O BANCO DE DADOS (Database connection)
// -----------------------------------------------------

// Define as variáveis com dados para acesso ao banco de dados
$dbserver = 'nomedoserver';
$dbname = 'nomedobanco';
$dbuser = 'nomedousuario';
$dbpass = 'senhadousuario';



// -----------------------------------------------------
// Caminhos de arquivo e acesso (Paths)
// -----------------------------------------------------

/*
Abaixo se definem os caminhos para os principais diretórios do sistema.
Below you can set the main paths to the system directories
*/


// Caminho do website (websites http path)
global $website_path;
$website_path = "https://www.seusite.com.br";

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
$index_dir3 = '/atencil';

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
$perm_view_dashboard = 1;
$perm_view_editacc = 1;
$perm_view_attendance = 1;
$perm_view_clients = 1;
$perm_view_users = 1;
$perm_view_sys = 3;
$perm_view_search = 1;


// Define as permissões de visualização para as funções secundárias
// Set the permissions to visualize the secundary functions
$perm_view_modules = 2;
$perm_view_perms = 2;




// -----------------------------------------------------
// PERMISSÕES DE EDIÇÃO (Edit Permissions)
// -----------------------------------------------------

// Define as permissões de edição para as funções primárias
// Set the permissions to edit the primary functions
$perm_edit_dashboard = 2;
$perm_edit_editacc = 1;
$perm_edit_attendance = 2;
$perm_edit_clients = 2;
$perm_edit_users = 3;
$perm_edit_sys = 3;
$perm_edit_search = 1;


// Define as permissões de edição para as funções secundárias
// Set the permissions to edit the secundary functions
$perm_edit_modules = 3;
$perm_edit_perms = 3;



?>