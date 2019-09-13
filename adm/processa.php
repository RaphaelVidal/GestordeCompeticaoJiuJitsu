
<?php
$cpf_adm = $_GET['cpf_adm']; //usando GET para pegar o cpf de valida.php para usalo para comparação e outros afins
//ESTE ARQIVO INSERE INFORMAÇÕES SOBRE A EQUIPE DE APOIO DA COMPETIÇÃO
	include_once("../fun/conexao.php");
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);	
	$niveis_acesso_id = $_POST['niveis_acesso_id'];
	$nome = $_POST['nome'];
	//$sexo = $_POST['sexo'];
	//$idade = $_POST['idade'];	
	//$peso =	$_POST['peso'];
	//$equipe = $_POST['equipe'];
	//$faixa = $_POST['faixa'];
	//$_FILES['arquivo']['name'] = "$cpf.jpg";
//$destino = 'imagens/' . $_FILES['arquivo']['name'];
 //$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
// move_uploaded_file( $arquivo_tmp, $destino  );


  $result_usuario = "INSERT INTO usuarios(cpf, email, senha, niveis_acesso_id, nome) VALUES ('$cpf','$email','$senha','$niveis_acesso_id','$nome')";
 $resultado_usuario = mysqli_query($conn, $result_usuario);

	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroF.php?cpf=$cpf_adm'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroF.php?cpf=$cpf_adm''>
					<script type=\"text/javascript\">
						alert(\"Atenção! O Usuario não foi cadastrado!.\");
					</script>
				";	
			}

?>


