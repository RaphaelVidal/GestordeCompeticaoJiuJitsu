<?php
//Conexao com o banco de dados
	include_once("../fun/conexao.php");
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];	
	$peso =	$_POST['peso'];
	$equipe = $_POST['equipe'];
	$faixa = $_POST['faixa'];
// Pegando a imagem e enviando para arquivos temporarios para depois mover para pasta de imagens
	$_FILES['arquivo']['name'] = "$cpf.jpg";
$destino = 'imagens/' . $_FILES['arquivo']['name'];
 $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 move_uploaded_file( $arquivo_tmp, $destino  );

//Dando update no banco de dados
  $result_usuario = ("UPDATE usuarios SET nome='$nome', sexo='$sexo', idade='$idade', peso='$peso', equipe='$equipe', faixa='$faixa' WHERE cpf=$cpf");
 $resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=adm.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=adm.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>

