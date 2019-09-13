
<?php
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo'); 
	
//Conexao com o banco de dados
	
	include_once("../fun/conexao.php");
	echo $id = $_POST['id_vencedor'];
	echo $faixa = $_GET['faixa'];
	echo $sexo = $_GET['sexo'];
	$um=1;
	$hora = date('H:i:s');

//Dando update no banco de dados
  $result_usuario = ("UPDATE usuarios SET luta2ab='$um',horaluta2ab='$hora' WHERE id=$id");
	
 $resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=chaveamento_absoluto.php?faixa=".$faixa."&sexo=".$sexo."'>
					<script type=\"text/javascript\">
						alert(\"Alteração realizada com Sucesso.\");
						
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=chaveamento_absoluto.php?faixa=".$faixa."&sexo=".$sexo."'>
					<script type=\"text/javascript\">
						alert(\"Erro na Inserção .\");
					</script>
				";	
			}
?>