<?php
		$autor="Desenvolvido por Systec @2017 - raphael.r.vidal@gmail.com ";// Autor em de todas as páginas	        
        $titulo="Sysbjj";// title de todas as páginas
	$servidor = "localhost"; // Serivodr Local
	$usuario = "root"; // Usuario
	$senha = "lc@cead"; // Senha
	$dbname = "sysbjj"; // Nome do bancode dados
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	// Testando a conexao do BD
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}		
?>
