<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Dados do <strong>Cadastro</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Data de Registro:</strong></p>
                            <p><?php echo $_SESSION['UserRegDate'] ?></p>
                            <br>

                            <p><strong>Nome:</strong></p>
                            <p><?php echo $_SESSION['UserFname'], " ", $_SESSION['UserLname']; ?></p>
                            <br>

                            <p><strong>Email:</strong></p>
                            <p><?php echo $_SESSION['UserEmail'] ?></p>
                            <br>

                            <p><strong>Empresa:</strong></p>
                            <p><?php compinfo_byid($_SESSION['UserCompany'], 'companyname'); ?></p>
                            <br>

                            <p><strong>ID do Usuário:</strong>
                            <?php echo $_SESSION['UserID'] ?></p>

                            <p><strong>Login:</strong>
                            <?php echo $_SESSION['UserLogin'] ?></p>

                            <p><strong>Status:</strong>
                            <?php echo $_SESSION['UserActive'] ?></p>

                            <p><strong>Permissão no Atencil:</strong>
                            <?php echo $_SESSION['UserPermLvl'] ?></p>

                            <p><strong>Permissão na Empresa:</strong>
                            <?php echo $_SESSION['UserCompanyLvl'] ?></p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Minha Conta</h4>
                        </div>
                        <div class="card-body">
                            <div class="default-tab">
                                
                                <!-- Orelhas das abas -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                                         aria-selected="true">Minha Conta</a>
                                        
                                        <?php if (perm_check($perm_edit_owncomp) == true){ ?>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Minha Empresa</a>
                                        <?php } ?>

                                        <a class="nav-item nav-link" id="nav-perm-tab" data-toggle="tab" href="#nav-perm" role="tab" aria-controls="nav-perm" aria-selected="false">Minhas Permissões</a>

                                    </div>
                                </nav>
                                <!-- Orelhas das abas -->


                                <!-- Conteúdo das abas -->
                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                    
                                    <!-- Aba Minha Conta -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div>
                                            <br>
                                            <p>
                                                Informe a <strong>senha atual</strong> para salvar as alterações.
                                            </p>
                                            <p>
                                                Informe a <strong>senha nova tambem</strong> caso deseje trocar sua senha.
                                            </p>
                                            <br>
                                        </div>
                                        <form action="/functions/acc_edit.php" method="post">
                                            
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="respnomecomp" name="respnomecomp" placeholder='<?php echo $_SESSION['UserLogin'] ?>' class="form-control" disabled="" alt="Login">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email" class="form-control" value='<?php echo $_SESSION['UserEmail'] ?>'>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="senhaatual" name="senhaatual" placeholder="Senha Atual" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="senhanova" name="senhanova" placeholder="Senha Nova" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Aba Minha Conta -->

                                    <!-- Aba Minha Empresa -->
                                    <?php if (perm_check($perm_edit_owncomp) == true){ ?>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Código</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">
                                                        <?php echo $_SESSION['UserCompany'] ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="input_compname" class=" form-control-label">Empresa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input_compname" name="input_compname" placeholder="Nome da Empresa" class="form-control" value='<?php compinfo_byid($_SESSION['UserCompany'], 'companyname'); ?>'>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="input_comptel" class=" form-control-label">Telefone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input_comptel" name="input_comptel" placeholder="Nome da Empresa" class="form-control" value='<?php compinfo_byid($_SESSION['UserCompany'], 'companytel'); ?>'>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="input_compemail" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="input_compemail" name="input_compemail" placeholder="Email da Empresa" class="form-control" value='<?php compinfo_byid($_SESSION['UserCompany'], 'companymail'); ?>'>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="input_compsite" class=" form-control-label">Telefone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input_compsite" name="input_compsite" placeholder="Nome da Empresa" class="form-control" value='<?php compinfo_byid($_SESSION['UserCompany'], 'companysite'); ?>'>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="input_compaddress" class=" form-control-label">Endereço</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="input_compaddress" id="input_compaddress" rows="9" placeholder="Fale um pouco sobre a sua empresa" class="form-control"><?php compinfo_byid($_SESSION['UserCompany'], 'companyaddress'); ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="input_compsector" class=" form-control-label">Setor de Atuação</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="input_compsector" name="input_compsector" placeholder="Categoria da Empresa" class="form-control" value='<?php compinfo_byid($_SESSION['UserCompany'], 'companysector'); ?>'>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Estado</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Selecione um Estado</option>
                                                        <option value="RJ">RJ</option>
                                                        <option value="SP">SP</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MG">MG</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabledSelect" class=" form-control-label">Categoria</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                                                        <option value="0">Selecione a Categoria</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="multiple-select" class=" form-control-label">Multiple select</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                        <option value="4">Option #4</option>
                                                        <option value="5">Option #5</option>
                                                        <option value="6">Option #6</option>
                                                        <option value="7">Option #7</option>
                                                        <option value="8">Option #8</option>
                                                        <option value="9">Option #9</option>
                                                        <option value="10">Option #10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Radios</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio3" class="form-check-label ">
                                                                <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Inline Radios</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                                                        </label>
                                                        <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                                                        </label>
                                                        <label for="inline-radio3" class="form-check-label ">
                                                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Checkboxes</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox2" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Inline Checkboxes</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                                        </label>
                                                        <label for="inline-checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                                        </label>
                                                        <label for="inline-checkbox3" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Senha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="password-input" placeholder="Senha da Conta" class="form-control">
                                                </div>
                                            </div>

                                        </form>
                                        
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>

                                    </div>
                                    <?php } ?>
                                    <!-- Aba Minha Empresa -->

                                    <!-- Aba Minhas Permissões -->
                                    <div class="tab-pane fade" id="nav-perm" role="tabpanel" aria-labelledby="nav-perm-tab">
                                        
                                        <p class="text-muted m-b-15">
                                            Confira abaixo as permissões de seu usuário:
                                        </p>
                                        <br>

                                        <p>Painel:  
                                        <?php badges($perm_view_dashboard, $perm_edit_dashboard); ?>
                                        </p>
                                        
                                        <p>Minha Conta:  
                                        <?php badges($perm_view_editacc, $perm_edit_editacc); ?>
                                        </p>

                                        <p>Atendimentos:  
                                        <?php badges($perm_view_attendance, $perm_edit_attendance); ?>
                                        </p>

                                        <p>Empresas:  
                                        <?php badges($perm_view_comps, $perm_edit_comps); ?>
                                        </p>

                                        <p>Sua Empresa:  
                                        <?php badges($perm_view_owncomp, $perm_edit_owncomp); ?>
                                        </p>

                                        <p>Clientes:  
                                        <?php badges($perm_view_clients, $perm_edit_clients); ?>
                                        </p>

                                        <p>Usuários:  
                                        <?php badges($perm_view_users, $perm_edit_users); ?>
                                        </p>

                                        <p>Sistema Atencil:  
                                        <?php badges($perm_view_sys, $perm_edit_sys); ?>
                                        </p>

                                        <p>Pesquisa:  
                                        <?php badges($perm_view_search, $perm_edit_search); ?>
                                        </p>

                                        <p>Módulos:  
                                        <?php badges($perm_view_modules, $perm_edit_modules); ?>
                                        </p>

                                        <p>Permissões:  
                                        <?php badges($perm_view_perms, $perm_edit_perms); ?>
                                        </p>

                                    </div>
                                    <!-- Aba Minhas Permissões -->
                                    
                                </div>
                                <!-- Conteúdo das abas -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carregamento do rodapé -->
            <?php include '../includes/at_footer.php'; ?>
            
        </div>
    </div>
</div>