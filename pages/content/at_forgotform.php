<?php
// Processamento do pedido

  if( !empty($_POST) ){

    $user = mysqli_real_escape_string($mysql, $_POST['email']);
    $q = mysqli_query($mysql, "SELECT * FROM at_users WHERE usermail = '$user'");
 
    // Se o utilizador existe, inicia o processo
    if( mysqli_num_rows($q) == 1 ){

      // Gerar a chave (exemplo adaptado de http://snipplr.com/view/20236/)
      $chave = sha1(uniqid( mt_rand(), true));
 
      // Guardar este par de valores na tabela para confirmar mais tarde
      $conf = mysqli_query($mysql, "INSERT INTO at_passredef VALUES ('$user', '$chave')");
 
      // Caso encontre o usuário, cria o link e envia por e-mail
      if( mysqli_affected_rows($mysql) == 1 ){
 
        $link = "https://atencil.com.br/functions/user_redef.php?user=$user&confirmation=$chave";
        // Recipientes (Para  mais de um recipiente, usar a virgula como na linha comentada abaixo)
        // $to  = 'aidan@example.com' . ', ';
        $to .= $user;

        // Assunto do e-mail
        $subject = 'ATENCIL - Recuperação de senha';

        // Mensagem do e-mail
        $message = '
        <html>
          <head>
            <title>
              Recuperação de senha
            </title>
          </head>
          
          <body>
            <p>Olá!</p>
            <br>
            <br>
            <p> Para redefinir sua senha, acesse o link abaixo e informe uma nova senha. </p>
            <br>
            <br>
            '.$link.'
            <br>
            <br>
            <p>OBS: Uma vez que este link for utilizado para redefinir sua senha ele não poderá mais ser utilizado para esse fim. Caso precise alterar novamente sua senha, será necessário gerar um novo link.</p>
          </body>
        </html>
        ';

        // Para enviar conteúdo HTML é preciso configurar o cabeçalho Content-type
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        // Cabeçalhos adicionais
        $headers .= 'To: '.$user . "\r\n";
        $headers .= 'From: ATENCIL <noreply@atencil.com.br>' . "\r\n";
        $headers .= 'Reply-To: admin@viladosite.com.br';
        // $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        // $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";


        if ( mail($to, $subject, $message, $headers) ) {

          echo '<p>Foi enviado um e-mail para o seu endereço, onde poderá encontrar um link único para alterar a sua senha</p>';

        } else {

          echo '<p>Houve um erro ao enviar o email, entre em contato com nossos administradores.</p>';

        }
 
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