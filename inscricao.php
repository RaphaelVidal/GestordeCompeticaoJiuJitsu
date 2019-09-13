<!doctype html>
<html lang="pt">
<head>
	
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SisBJJ</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	
	<script>alert("Inscrições Encerradas!");</script>

</head>

<body class="signup-page">
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="https://google.com"><img src="imagens/ifsertao.png"  width="40%" align="center" > </a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					<li>
    					<a href="adm/relacaogeralcategorias.php" target="_blank">
    						<h3 align="center">Confira as Inscrições<br>Homologadas<br>Clique aqui!<h3>
    					</a>
    				</li>
					</br>
					<li>
    					<a href="adm/relacaogeralabsoluto.php" target="_blank">
    						<h3 align="center">Confira as Inscrições <br>Absoluto<br>Clique aqui!<h3>
    					</a>
    				</li>
					<!--<li>
    					<a href="INFORMATIVO - Copa IF de Jiu-Jitsu.pdf" target="_blank">
    						<img width="90%" src="imagens/edital.png">
    					</a>
    				</li>-->
					
    				
		            
		             
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('1.jpg'); background-size: cover; background-position: top center;">
		
			
			<div class="container">
			
		
				<div class="row">
				
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					
					<div class="card card-signup">
						
							<form class="form" method="POST" action="fun/valida.php">
								<div class="header header-success  text-center">			
									<h4>Para realizar a inscrição antes faça o seu cadastro!<a href="#"  class=""><!--<a href="cliente/opcao.php" class="">--><font color="black"><b><br></br><img width="80%" src="imagens/cadastro.png"></b><br></font></a></h4>
									
										
								</div>
								<br>
								
									<div align="center">	</div>
									
								<p class="text-divider"></p>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="txt" name="cpf" id="inputNome" class="form-control" placeholder="CPF ou Certidão...">
									</div>

								
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" name="senha" id="inputPassword"placeholder="Senha..." class="form-control" />
									</div>

									

									<!--<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Receba iformações no seu email!!!
										</label>
									</div>-->
								</div>
								<p class="text-center text-danger">
									
									<?php 	
									if(isset($_SESSION['loginErro'])){
									 $_SESSION['loginErro'];
									unset($_SESSION['loginErro']);
									echo "<div class='alert alert-danger'>
					<div class='container-fluid'>
					<div class='alert-icon'>
					<i class='material-icons'>error_outline</i>
					</div>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'><i class='material-icons'>clear</i></span>
					</button>
					<b>Error Alert:</b> Usuário ou senha Inválido
					</div>
					</div>";
									}?>
									
									
									</p> <!-- Quando usuario for deslogar (Esta sendo puxado de sair.php) -->
									<p class="text-center text-success">
									
									<?php 
											if(isset($_SESSION['logindeslogado'])){
												echo $_SESSION['logindeslogado'];
												unset($_SESSION['logindeslogado']);
											}
									?>
									
								</p>
								<div class="footer text-center">
									<button class="btn btn-simple btn-success btn-lg" type="submit">Acessar</button>
								</div>
								
				
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <nav class="pull-left">
						<ul>
							<li>
								
    						<a>SYSBJJ</a>
								
							</li>
						</ul>
		            </nav>
		            <div class="copyright pull-right">
		               Desenvolvido por Systec @2017 - raphael.r.vidal@gmail.com 
		            </div>
		        </div>
		    </footer>

		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>
