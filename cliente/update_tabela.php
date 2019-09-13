
<?php
//Conexao com o banco de dados
	
	include_once("../fun/conexao.php");
	$cpf = $_POST['cpf'];


//Dando update no banco de dados
  $result_usuario = ("UPDATE usuarios SET nome='$nome', WHERE cpf=$cpf");
 $resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=status.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Alteração realizada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroF.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Erro na Inserção .\");
					</script>
				";	
			}
?>