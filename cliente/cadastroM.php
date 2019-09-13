<DOCTYPE html>
<html>
	<head>
		<title>Cadastramento</title>
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $titulo ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
	<link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>

		<meta charset="utf-8">
		<script>
			function validar(){
				var senha = formuser.senha.value;
				var rep_senha = formuser.rep_senha.value;
				
				if(senha == "" || senha.length <= 5){
					alert('Preencha o campo senha com minimo 6 caracteres');
					formuser.senha.focus();
					return false;
				}
				
				if(rep_senha == "" || rep_senha.length <= 5){
					alert('Preencha o campo senha com minimo 6 caracteres');
					formuser.rep_senha.focus();
					return false;
				}
				
				if (senha != rep_senha) {
					alert('Senhas diferentes');
					formuser.senha.focus();
					return false;
				}
			}
			
			alert("Preencha o CPF apenas com os números ex: 1234567898");
		</script>
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

        	
    	</div>
    </nav>
		<div class="wrapper">
		<div class="header header-filter" style="background-image: url('../1.jpg'); background-size: cover; background-position: top center;">
		
			
			<div class="container">
			
		
				<div class="row">
				
					<div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-3">
					
					<div class="card card-signup">
					<div class="header header-success btn-lg text-center">
									<h4>Cadastro</h4>
									</div>
			<div align="center">
		<br>
						<br><img src="img/ifsertao.png" width="60%" align="center" > </div>
		<br>

	<br>
	<br>
			<center>
		
		
		<form name="formuser" action="processa_cad_usuario.php" method="POST">
			<table id="cad_table" class=" btn-lg text-right" >
				<tr>
					<td class="btn-lg text-right">CPF : </td>
					<td><input required type="text" type="number" name="cpf" class="txt "  placeholder="Utilize só numeros!" maxlength="11"></td>
				</tr>
				
				<tr>
					<td class="btn-lg text-right">E-mail :</td>
					<td><input required type="email" name="email" class="txt" ></td>
				</tr>	
				
				<tr>
					<td class="btn-lg text-right">Senha :</td>
					<td><input required type="password" name="senha" class="txt"></td>
				</tr>
				
				<tr>
					<td class="btn-lg text-right">Repetir Senha :</td>
					<td><input required type="password" name="rep_senha" class="txt"></td>	
				</tr>
				
				
				<br>
				<td>
				
			</td>
			<td>
				<input align="center" type="submit" class="btn btn-info " value="Enviar" onclick="return validar()">
				<a href="../index.php">
					<input align="center" type="button" value="Cancelar" class="btn btn-info" id="btnCancelar">
			</td>
			</table>
		 </form>			
							
							
							
							<br>
							<br>
							<br>
							<br>
							
							
							
							
						</div>
					</div>
				</div>
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

</script>
</html>