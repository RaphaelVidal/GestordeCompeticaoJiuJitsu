
<?php
//Conexao com o banco de dados
	
	include_once("../fun/conexao.php");
	$cpf = $_POST['cpf'];	
    $equipe = $_POST['equipenova'];	
		

//Dando update no banco de dados
  $result_usuario = ("UPDATE usuarios SET equipe='$equipe' WHERE cpf=$cpf");
 $resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=dados_comp.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Alteração Realizada com Sucesso!.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=dados_comp.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Alteração Não Realizada.\");
					</script>
				";	
			}
?>