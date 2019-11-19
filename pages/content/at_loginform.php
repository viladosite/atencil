<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="/index.php">
                        <img src="<?php echo HOME_DIR; ?>/images/logo_atencil_horiz.png" alt="Atencil">
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?php echo HOME_DIR; ?>/auth/at_login.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="au-input au-input--full" type="email" name="fieldemail" placeholder="Digite seu Email">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input class="au-input au-input--full" type="password" name="fieldpass" placeholder="Digite sua senha">
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="remember">Lembrar de mim
                            </label>
                            <label>
                                <a href="/pages/forgot_pass.php">Esqueci Minha Senha</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Acessar</button>
                        
                    </form>
                    <div class="register-link">
                        <p>
                            Não possui uma conta?
                            <a href="/pages/register.php">Cadastre-se</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>