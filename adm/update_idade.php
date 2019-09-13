
<?php
//Conexao com o banco de dados
	
	include_once("../fun/conexao.php");
	$cpf = $_POST['cpf'];	
    $categoriaida = $_POST['categoriaida'];	
	$nomepesq=$_POST['nomepesq'];	

//Dando update no banco de dados
  $result_usuario = ("UPDATE usuarios SET categoriaida='$categoriaida' WHERE cpf=$cpf");
 $resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=pesquisarnome.php?nome=$nomepesq'>
					<script type=\"text/javascript\">
						alert(\"Alteração Realizada com Sucesso!.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=pesquisarnome.php?nome=$nomepesq'>
					<script type=\"text/javascript\">
						alert(\"Alteração Não Realizada.\");
					</script>
				";	
			}
?>