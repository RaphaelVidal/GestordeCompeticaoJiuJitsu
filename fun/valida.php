<?php
	session_start();	
//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['cpf'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['cpf']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
	    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senhamd5 = md5($senha);		
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM usuarios WHERE cpf = '$usuario' && senha = '$senhamd5' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);	
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuariocpf'] = $resultado['cpf'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			if($_SESSION['usuarioNiveisAcessoId']=="1"){// administradores
				//header("Location:../adm/adm.php?cpf=$usuario");
				echo "<script>location.href='../adm/adm.php?cpf=$usuario';</script>";
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){ // gerentes
				//header("Location:../gerente/gerente.php?cpf=$usuario");
				echo "<script>location.href='../gerente/gerente.php?cpf=$usuario';</script>";
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "10"){ // professores
				//header("Location:../gerente/gerente.php?cpf=$usuario");
				echo "<script>location.href='../adm/professor.php?cpf=$usuario';</script>";
			}else{    // competidores
				//header("Location:../cliente/conteudo.php?cpf=$usuario");
				echo "<script>location.href='../cliente/duvida.php?cpf=$usuario';</script>";
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";	 
			//header("Location: ../index.php");
			echo "<script>alert('Usuario ou Senha Inválidos');</script>";
			echo "<script>location.href='../index.php';</script>";

		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		//header("Location: ../index.php");
		echo "<script>alert('Erro cpf ou senha');</script>";
		echo "<script>location.href='../index.php';</script>";
	}
?>