<?php
// Carrega as configurações para funcionamento do sistema
require __DIR__ . '/../config.php';

// Faz a conexão com o banco
require __DIR__ . '/at_connect.php';

// Carrega as funções para funcionamento do sistema
require __DIR__ . '/../functions/functions.php';

//Monta as variáveis
$pass = isset($_POST['fieldpass']) ? $_POST['fieldpass'] : '';
$email = isset($_POST['fieldemail']) ? $_POST['fieldemail'] : '';
$status = 'ativo';

// Verifica se houve POST e se o usuário ou a senha estão vazios
if (empty($_POST['fieldemail']) || empty($_POST['fieldpass'])) { header("Location: ../index.php"); exit; }

// cria o hash da senha
$passwordHash = make_hash($pass);

// Faz a conexão com o banco
$conn = getConnection(DB_HOST, DB_NAME, DB_USER, DB_PASS);

// Monta a query para seleção e localização do usuário
$query = "SELECT * FROM at_users WHERE (usermail = :email) AND (userpass = :password) AND (userstatus = :status)";

// Prepara o query statement
$stmt = $conn->prepare($query);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
$stmt->bindParam(':status', $status);

// Executa a query
$stmt->execute();

// Salva os dados encontados na variável $users
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Pega o primeiro user
$user = $users[0];

if (count($users) <= 0)
{
    echo '<script type="text/javascript"> window.alert("Dados incorretos, tente novamente ou procure o administrador do sistema.");
    window.history.back();</script>';
    exit;

} else {

    // pega o primeiro usuário e inicia a sessão
    session_start();
        
    // Salva os dados encontrados na sessão
    $_SESSION['UserLogged'] = true;
    $_SESSION['UserID'] = $user['userid'];
    $_SESSION['UserFname'] = $user['userfname'];
    $_SESSION['UserLname'] = $user['userlname'];
    $_SESSION['UserLogin'] = $user['userlogin'];
    $_SESSION['UserEmail'] = $user['usermail'];
    $_SESSION['UserCompany'] = $user['usercomp'];
    $_SESSION['UserGroup'] = $user['usergroup'];
    $_SESSION['UserActive'] = $user['userstatus'];
    $_SESSION['UserRegDate'] = $user['userregdate'];

    // Redireciona o visitante
    header("Location: ../pages/dashboard.php"); exit;
}

?>