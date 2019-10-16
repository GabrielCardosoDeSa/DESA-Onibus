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
                                <p class="lead">Recuperar minha senha</p>
                            </div>
                            <div class="body">
                                <p>Por favor, digite seu endereço de e-mail para receber instruções para redefinir a senha.</p><br>
                                <form class="form-auth-small" action="index.php">
                                    <div class="form-group">                                    
                                        <input type="email" class="form-control" id="signup-email" placeholder="E-mail">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">RECUPERAR SENHA</button>
                                    <div class="bottom">
                                        <span class="helper-text">Sabe sua senha? <a href="login.php">Conecte-se</a></span>
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
    