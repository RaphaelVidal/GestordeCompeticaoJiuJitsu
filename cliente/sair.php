<?php
	@session_destroy();
	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuariocpf'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioSenha']
	);
	@$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	//header("Location: ../index.php");
	echo "<script>location.href='../index.php';</script>";
?>