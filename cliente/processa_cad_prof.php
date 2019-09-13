<?php
//conexao com banco de dados
	include_once("../fun/conexao.php");
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);	
//codigo para nao repitir o mesmo login	
$resultado = ("SELECT * FROM usuarios WHERE cpf='$cpf'");
$status = mysqli_query($conn, $resultado);
$numrow = mysqli_num_rows($status);
$linha=mysqli_fetch_array($status);
if($linha == 0){
// o usuário não existe, faça a inserção do mesmo;
	  $result_usuario = "INSERT INTO usuarios(cpf, email, senha,niveis_acesso_id) VALUES ('$cpf','$email','$senha',10)";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../inscricao.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../inscricao.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
}
else
{
// o usuário existe;
	echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../inscricao.php'>
					<script type=\"text/javascript\">
						alert(\"O CPF já esta cadastrado.\");
					</script>
				";	
}
?>




