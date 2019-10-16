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
                                <p class="lead">Login</p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" action="">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Email</label>
                                        <input type="email" class="form-control" id="signin-email" value="" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" id="signin-password" value="" placeholder="Senha">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="fancy-checkbox element-left">
                                            <input type="checkbox">
                                            <span>Lembrar-me</span>
                                        </label>								
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">ENTRAR</button>
                                    <div class="bottom">
                                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="recuperar-senha.php">Esqueceu a senha?</a></span>
                                        <span>Não possui uma conta? <a href="criar-conta.php">Registre-se</a></span>
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
