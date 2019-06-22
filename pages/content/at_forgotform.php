<?php
// Processamento do pedido

  if( !empty($_POST) ){

    $user = mysqli_real_escape_string($mysql, $_POST['email']);
    $q = mysqli_query($mysql, "SELECT * FROM at_users WHERE usermail = '$user'");
 
    if( mysqli_num_rows($mysql, $q) == 1 ){
      // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
 
      // gerar a chave
      // exemplo adaptado de http://snipplr.com/view/20236/
      $chave = sha1(uniqid( mt_rand(), true));
 
      // guardar este par de valores na tabela para confirmar mais tarde
      $conf = mysqli_query($mysql, "INSERT INTO at_passredef VALUES ('$user', '$chave')");
      echo "INSERT INTO at_passredef VALUES ('$user', '$chave')";
 
      if( mysqli_affected_rows() == 1 ){
 
        $link = "https://atencil.com.br/functions/user_redef.php?user=$user&confirmation=$chave";
 
        if( mail($user, 'ATENCIL - Recuperação de password', 'Olá '.$user.', para redefinir sua senha visite este link '.$link) ){
          echo '<p>Foi enviado um e-mail para o seu endereço, onde poderá encontrar um link único para alterar a sua password</p>';
 
        } else {
          echo '<p>Houve um erro ao enviar o email, entre em contato com nossos administradores.</p>';
 
        }
 
        // Apenas para testar o link, no caso do e-mail falhar
        echo '<p>Link: '.$link.' (apresentado apenas para testes; nunca expor a público!)</p>';
 
      } else {
        echo '<p>Não foi possível gerar o endereço único</p>';
 
      }
    } else {
      echo '<p>Esse usuário não existe</p>';
    }
  } else { ?>
    
<!-- Visual do formulário -->
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">

                <div class="login-logo">
                    <a href="/index.php">
                        <img src="/images/logo_atencil_horiz.png" alt="Atencil">
                    </a>
                </div>

                <div class="login-form">
                    <form method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="au-input au-input--full" type="email" name="email" id="email" placeholder="Digite o Email Cadastrado">
                        </div>
                        <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Recuperar Senha</button>
                        <div class="register-link">
                            <p><a href='../../index.php'>Voltar</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php  }
?>