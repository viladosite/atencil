<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img src='<?php $website_path . $index_dir3 ?>/images/logo_atencil_horiz.png' alt="Atencil">
                    </a>
                </div>
                <div class="login-form">
                    <form action='<?php $website_path . $index_dir3 ?>/auth/at_login.php' method="post">
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
                                <a href="forgot-pass.php">Esqueci Minha Senha</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Acessar</button>
                        
                        <!--
                        <div class="social-login-content">
                            <div class="social-button">
                                <button class="au-btn au-btn--block au-btn--blue m-b-20">Acessar com Facebook</button>
                                <button class="au-btn au-btn--block au-btn--blue2">Acessar com Google</button>
                            </div>
                        </div>
                        -->

                    </form>
                    <div class="register-link">
                        <p>
                            Não possui uma conta?
                            <a href='<?php $website_path . $index_dir3 ?>/pages/register.php'>Cadastre-se</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>