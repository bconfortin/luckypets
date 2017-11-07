    	<?php /*
        <div id="devMenu" class="hidden" style="padding: 15px; background-color: #ddd; z-index: 300; position: fixed; top: 110px; left: 0; width: 400px;">
    		<ul style="padding-left: 0; list-style-type: none;">
    			<li><a href="<?= $GLOBALS['www']; ?>" style="color: #333; padding-left: 15px;">Página inicial</a></li>
                <li style="margin-bottom: 10px; margin-top: 10px; color: #333; text-transform: uppercase; font-weight: 700;">Cadastro</li>
                <li><a href="formulario-de-cadastro.php" style="color: #333; padding-left: 15px;">Usuário</a></li>
                <li><a href="formulario-de-anuncio-animal.php" style="color: #333; padding-left: 15px;">Doação</a></li>
    			<li><a href="formulario-de-anuncio-animal-encontrado.php" style="color: #333; padding-left: 15px;">Animal encontrado</a></li>
    			<li><a href="formulario-de-anuncio-animal-perdido.php" style="color: #333; padding-left: 15px;">Animal perdido</a></li>
                <li style="margin-bottom: 10px; margin-top: 10px; color: #333; text-transform: uppercase; font-weight: 700;">Editar</li>
                <li><a href="editar-usuario.php" style="color: #333; padding-left: 15px;">Usuário</a></li>
    			<li style="margin-bottom: 10px; margin-top: 10px; color: #333; text-transform: uppercase; font-weight: 700;">Listar</li>
                <li><a href="listar-usuarios.php" style="color: #333; padding-left: 15px;">Usuários</a></li>
    			<li><a href="listar-doacoes.php" style="color: #333; padding-left: 15px;">Doações</a></li>
                <li style="margin-bottom: 10px; margin-top: 10px; color: #333; text-transform: uppercase; font-weight: 700;">Internas</li>
    			<li><a href="anuncio-animal.php" style="color: #333; padding-left: 15px;">Animal</a></li>
    			<li><a href="anuncio-animal-perdido.php" style="color: #333; padding-left: 15px;">Animal perdido</a></li>
    			<li><a href="anuncio-animal-perdido.php" style="color: #333; padding-left: 15px;">Animal encontrado</a></li>
                <li style="margin-bottom: 10px; margin-top: 10px; color: #333; text-transform: uppercase; font-weight: 700;">Outras</li>
    			<li><a href="quem-somos.php" style="color: #333; padding-left: 15px;">Quem somos</a></li>
    		</ul>
    	</div>

        <div id="sessionDesc" class="container-fluid hidden" style="position: fixed; left: -30px; top: 110px; z-index: 30000;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo '<pre class="force-radius-0">' . print_r($_SESSION, TRUE) . "Session ID: " . session_id() . " ||| Session Status: " . session_status() .'</pre>'; ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-333 inline-block mtop-30-xs" style="padding: 18px; position: fixed; top: 30px; left: 0; z-index: 30000;">
            <a href="" class="block white-link" id="toggleDevMenu"><i class="fa fa-bars mright-15"></i>Toggle Dev Menu</a>
            <a href="" class="block white-link" id="toggleSessionDesc"><i class="fa fa-user-circle mright-15"></i>Toggle Session</a>
        </div>

        */ ?>

    	<div class="lucky-right-menu closed">
    		<a href="" class="destino-x">
    			<i class="fa fa-times padhor-10"></i>
    		</a>
    		<div class="ptop-0 padding-20">
				<img src="img/logo/lucky-pets-logo-white-336x98.png" alt="Logo do Lucky Pets" class="img-responsive center-block mbottom-30" style="max-width: 100px;">
                <?php if (isset($_SESSION['nome'])) { ?>
                    <a href="dashboard.php"><img src="<?= $_SESSION['caminhoCompletoImagem']; ?>" alt="" class="img-circle img-responsive center-block mbottom-10 max-width-180"></a>
    				<p class="color-fff text-center">Logado como:<br><?= $_SESSION['nome']; ?></p>
    				<p class="text-center"><a href="" class="inline-block white-link" data-toggle="modal" data-target="#modalLocalizacao">Foz do Iguaçu - PR<br>(clique para mudar)</a></p>
    				<hr class="hr-white-shadow marver-15">
                    <ul class="mbottom-30">
                        <li><h4 class="font-1em font-700 text-uppercase color-fff">Menu de Navegação</h4></li>
                        <li><a href="<?= $GLOBALS['www']; ?>">Página inicial</a></li>
                        <li><a href="dashboard.php">Meu perfil</a></li>
                        <li><a href="" class="btnSair">Sair</a></li>
                <?php } else { ?>
                    <ul class="mbottom-30">
                        <li><a href="<?= $GLOBALS['www']; ?>">Página inicial</a></li>
                        <li><a href="formulario-de-cadastro.php">Fazer cadastro</a></li>
                        <li><a href="" data-toggle="modal" data-target="#modalLogin">Entrar</a></li>
                <?php } ?>
                    <hr class="hr-white-shadow marver-15 block">
                    <li><h4 class="font-1em font-700 text-uppercase color-fff">Todos os animais</h4></li>
                    <li><a href="animais-para-doacao.php">Para doação</a></li>
                    <li><a href="animais-perdidos.php">Perdidos</a></li>
                    <li><a href="animais-encontrados.php">Encontrados</a></li>
                    <hr class="hr-white-shadow marver-15 block">
                    <li><h4 class="font-1em font-700 text-uppercase color-fff">Anunciar</h4></li>
                    <li><a href="formulario-de-anuncio-animal.php">Doação de animal</a></li>
                    <li><a href="formulario-de-anuncio-animal-perdido.php">Animal perdido</a></li>
                    <li><a href="formulario-de-anuncio-animal-encontrado.php">Animal encontrado</a></li>
                    <hr class="hr-white-shadow marver-15 block">
                    <li><a href="quem-somos.php">Sobre</a></li>
				</ul>
				<p class="text-center mbottom-0">
					<a href=""><i class="fa fa-2x fa-facebook-square color-fff marhor-5"></i></a>
					<a href=""><i class="fa fa-2x fa-twitter-square color-fff marhor-5"></i></a>
					<a href=""><i class="fa fa-2x fa-instagram color-fff marhor-5"></i></a>
				</p>
    		</div>
    	</div>
    	<div class="destino-menu-overlay hidden"></div>
    	<div class="container-fluid bg-fff">
    		<div class="container custom-container-sm-xs">
    			<div class="row">
    				<div class="col-xs-12">
						<a href="<?= $GLOBALS['www']; ?>" class="lucky-nav-left-logo">
							<img src="img/logo/lucky-pets-logo-180x260.png" alt="Logo do Lucky Pets" class="img-responsive hidden-xs" style="max-height: 55px;">
							<img src="img/logo/lucky-pets-logo-336x98.png" alt="Logo do Lucky Pets" class="img-responsive visible-xs-block" style="max-height: 20px;">
						</a>
						<ul class="lucky-nav-left">
							<span class="hidden-xs">
								<!-- <li><a href="<?= $GLOBALS['www']; ?>" class="visible-lg-inline-block">Página inicial</a></li> -->
								<li>
									<div class="dropdown">
										<a id="dLabelAnimais" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											Todos os animais
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" aria-labelledby="dLabelAnimais">
											<li><a href="animais-para-doacao.php">Para doação</a></li>
											<li><a href="animais-perdidos.php">Perdidos</a></li>
											<li><a href="animais-encontrados.php">Encontrados</a></li>
										</ul>
									</div>
								</li>
								<li>
									<div class="dropdown">
										<a id="dLabelAnuncio" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											Anunciar
											<span class="caret"></span>
										</a>
										<ul class="dropdown-menu" aria-labelledby="dLabelAnuncio">
											<li><a href="formulario-de-anuncio-animal.php">Doação de animal</a></li>
											<li><a href="formulario-de-anuncio-animal-perdido.php">Animal perdido</a></li>
											<li><a href="formulario-de-anuncio-animal-encontrado.php">Animal encontrado</a></li>
										</ul>
									</div>
								</li>
								<li><a href="quem-somos.php">Sobre</a></li>
                                <?php if (isset($_SESSION['nome'])) { ?>
                                    <li><a href="dashboard.php">Meu perfil</a></li>
                                    <li><a href="" class="btnSair">Sair</a></li>
                                <?php } else { ?>
                                    <li><a href="" data-toggle="modal" data-target="#modalLogin">Entrar</a></li>
                                <?php } ?>
							</span>
						</ul>
						<ul class="lucky-nav-right">
							<li class="visible-xs-inline-block"><a href="" class="destino-hamburguer"><i class="fa fa-bars fa-lg padhor-10"></i></a></li>
                            <?php if (isset($_SESSION['nome'])) { ?>
                                <li class="mtop-10 font-0-9em hidden-xs">
    								<span class="inline-block pull-right mleft-15"><a href="dashboard.php" class="block"><div class="img-circle header-img-usuario" style="background-image: url('<?= $_SESSION["caminhoCompletoImagem"]; ?>');"></div></a></span>
    								<span class="inline-block pull-right mtop-10 text-default font-400"><?= $_SESSION['nome']; ?><br><a href="" class="font-700" data-toggle="modal" data-target="#modalLocalizacao">Foz do Iguaçu - PR</a></span>
    							</li>
                            <?php } else { ?>
                                <li><a href="formulario-de-cadastro.php" class="hidden-xs">Fazer cadastro</a></li>
                            <?php } ?>
						</ul>
    				</div>
    			</div>
    		</div>
    	</div>

        <!-- Modal -->
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-uppercase text-center font-700" id="modalLoginLabel">Login</h4>
                    </div>
                    <div class="modal-body"><!-- http://31.220.53.123:8080/luckypets-servidor/api/usuario/login -->
                        <form class="" action="" method="POST">
                            <div class="form-group">
                                <label for="formLoginEmail" class="font-300">E-mail</label>
                                <input type="text" name="formLoginEmail" class="form-control" placeholder="maria@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="formLoginSenha" class="font-300">Senha</label>
                                <input type="password" name="formLoginSenha" class="form-control" placeholder="******">
                            </div>
                            <p class="text-center mbottom-0"><button type="button" class="btn btn-gradient text-uppercase force-radius-0 padhor-30" id="btnLogin">Logar</button></p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p class="text-center mbottom-0"><a href="" data-dismiss="modal" data-toggle="modal" data-target="#modalEsqueciSenha">Esqueci minha senha</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalEsqueciSenha" tabindex="-1" role="dialog" aria-labelledby="modalEsqueciSenhaLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-uppercase text-center font-700" id="modalEsqueciSenhaLabel">Esqueci a senha</h4>
                    </div>
                    <div class="modal-body"><!-- http://31.220.53.123:8080/luckypets-servidor/api/usuario/login -->
                        <form class="" action="" method="POST">
                            <div class="form-group">
                                <label for="formLoginEmail" class="font-300">E-mail</label>
                                <input type="text" name="formLoginEmail" class="form-control" placeholder="maria@gmail.com">
                            </div>
                            <p class="text-center mbottom-0"><button type="button" class="btn btn-gradient text-uppercase force-radius-0 padhor-30" id="btnRecuperar">Recuperar senha</button></p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p class="text-center mbottom-0"><a href="" data-dismiss="modal" data-toggle="modal" data-target="#modalLogin">Lembrei minha senha</a></p>
                    </div>
                </div>
            </div>
        </div>

		<!-- Modal -->
		<div class="modal fade" id="modalLocalizacao" tabindex="-1" role="dialog" aria-labelledby="modalLocalizacaoLabel">
		    <div class="modal-dialog modal-sm" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                <h4 class="modal-title text-center" id="modalLocalizacaoLabel">Localização</h4>
		            </div>
		            <div class="modal-body">
		                <p>Não está em <strong id="naoEstaEmLocalizacao">Foz do Iguaçu - PR</strong>?</p>
	                	<form action="" method="POST" class="">
			                <div class="form-group">
								<label for="cidade">Estado</label>
								<select name="estado" id="estado" class="form-control force-radius-0">
									<option value="" disabled="disabled" selected="selected">Escolha o estado</option>
									<option value="">Paraná</option>
								</select>
			                </div>
			                <div class="form-group">
								<label for="cidade">Cidade</label>
								<select name="cidade" id="cidade" class="form-control force-radius-0">
									<option value="" disabled="disabled" selected="selected">Escolha a cidade</option>
									<option value="">Foz do Iguaçu</option>
								</select>
			                </div>
			                <button type="submit" class="btn btn-gradient text-uppercase force-radius-0 width-100per">Salvar</button>
		                </form>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default force-radius-0" data-dismiss="modal">Fechar</button>
		            </div>
		        </div>
		    </div>
		</div>
