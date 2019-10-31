<?php

namespace onibus\view;

include_once('../../config.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/controller/InitialController.php');



use onibus\InitialController;

?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/view/include/header.php'); ?>


	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="mobile-logo"><a href="#"><img src="../images/logo-icon.svg" alt="IGBus"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                            <a href="#">
                                <img src="../images/logo-icon.svg" alt="IGBus">
                                <span>IGBus</span>
                            </a>
                        </div>
                        <div class="left-slider">
                            <img src="" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="auth-right">
                        <div class="card">
                            <div class="header">
                                <p class="lead">Criar minha conta</p>
                            </div>
                            <div class="body">
                                <p>Por favor, digite seu endereço de e-mail e senha para criar uma nova conta.</p><br>
                                <form class="form-auth-small">
                                    <div class="form-group">
                                        <label for="signup-email" class="control-label sr-only">E-mail</label>
                                        <input type="email" class="form-control" id="signup-email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" id="signup-password" placeholder="Senha">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">CRIAR CONTA</button>
                                    <div class="bottom">
                                        <span class="helper-text">Já tem uma conta? <a href="login.php">Conecte-se</a></span>
                                    </div>
                                </form>                                
                            </div>
                        </div>
                    </div>

				</div>
			</div>
		</div>
	</div>
    

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/view/include/footer.php'); ?>
