<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
//conexão com o banco
// Faz a conexão com o banco
require "../auth/at_connect.php";
if ($_SESSION['UserPermLvl'] >= $perm_edit_clients):
?>

<?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$userid = $_POST ["userid"];    
$userlogin  = $_POST ["userlogin"]; 
$userpass  = $_POST ["userpass"]; 
$userfname  = $_POST ["userfname"];  
$userlname = $_POST ["userlname"];  
$usermail = $_POST ["usermail"];  
$userpermlvl = $_POST ["userpermlvl"]; 
$companyid = $_POST ["companyid"];  
$userstatus = $_POST ["userstatus"];    
//Gravando no banco de dados !

$query = "INSERT INTO `at_users` ( `userid` , `userlogin` , `userpass` , `userfname` , `userlname` , `usermail` , `userpermlvl` , `companyid` , `userstatus` ) 
VALUES ('$userid', '$userlogin', '$userpass', '$userfname', '$userlname', '$usermail', '$userpermlvl', '$companyid', '$userstatus' )";

echo "

<!-- Início do Grid -->
<div class=\"mdl-grid\">
  
    <div class=\"mdl-cell mdl-cell--12-col\">
        <div id=\"atd_title\">
        <h3>Novo Usuário</h3>
        </div>

    </div>

    <div class=\"mdl-cell mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--8-col-tablet\">
        
        <!-- Início do Card -->
          <div class=\"mdl-card mdl-shadow--4dp at-card at-cardatd\" >

              <div class=\"mdl-card__title\">
                <span>Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.</span>
              </div>


            

              </div>   

          </div>
        <!-- Fim do Card -->

    </div>



</div>"

?>
<!-- Fim do Grid -->

<script type="text/javascript" language="javascript">

    $(document).ready(function() {
        /// Quando usuário clicar em salvar será feito todos os passo abaixo
        $('#add').click(function() {

            var data = $('#atten-add').serialize();

            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '../includes/atten_add.php',
                async: true,
                data: data,
                success: function(response) {
                    location.reload();
                }
            });

            return false;
        });

</script>




<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>