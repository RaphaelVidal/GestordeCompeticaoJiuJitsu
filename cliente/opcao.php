<!doctype html>
<?php
require_once "../fun/conexao.php"; //*Chamando conexão com o banco de dados
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sysbjj</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>

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
        		<a class="navbar-brand" href="https://google.com">SYSBJJ</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					<li>
    					<a href="https://google.com" target="_blank">
    						SYSBJJ
    					</a>
    				</li>
    				
		            <li>
		                <a href="https://twitter.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li>
		                <a href="https://www.facebook.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../4.jpg'); background-size: cover; background-position: top center;">
		
			
			<div class="container">
			
		
				<div class="row">
				
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					
					<div class="card card-signup">
						
							<form  method="" action="">
								<div class="header header-success text-center">
									<h4>Cadastramento</h4>
										<div class="social-line">
										<!--<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-google-plus"></i>
										</a>-->
									</div>
								</div>
								<br>
									<div align="center">	<img src="../ifsertao.png"  width="70%" align="center" > </div>
								<p class="text-divider"></p>
								<div class="content"  align="center">

									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<a href="cadastroM.php"><input type="button" value="COMPETIDOR COM CPF" class="btn btn-danger btn-lg" id="btnCad2"></a></td>
									</div>

								
									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<a href="cadastroN.php"><input type="button" value="COMPETIDOR SEM CPF" class="btn btn-danger btn-lg" id="btnCad2"></a></td>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<a href="cadastro_prof.php"><input type="button" value="PROFESSOR DE EQUIPE" class="btn btn-danger btn-lg" id="btnCad2"></a></td>
									</div>
								<div class="footer text-center">
									<input type="button" value="Voltar" onClick="JavaScript: window.history.back();" class="btn btn-simple btn-success btn-lg">
								</div>
									

									<!--<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Receba iformações no seu email!!!
										</label>
									</div>-->
								</div>
								<br>
								<br>
								<br>
							</form>				
						</div>
					</div>		
				</div>	
			</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js" type="text/javascript"></script>

</html>
