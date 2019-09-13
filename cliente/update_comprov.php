
<?php
//Conexao com o banco de dados
	
	include_once("../fun/conexao.php");
	$cpf = $_GET['cpf']; //usando GET para pegar o cpf de valida.php para usalo para comparação e outros afins

// Pegando a imagem e enviando para arquivos temporarios para depois mover para pasta de comprovantes
	$_FILES['arquivo']['name'] = "$cpf.jpg";
$destino = 'comprovantes/' . $_FILES['arquivo']['name'];
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 move_uploaded_file( $arquivo_tmp, $destino  );


//Dando update no banco de dados

  $result_usuario = ("UPDATE usuarios SET imagem='sim' WHERE cpf=$cpf");
  $resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=pagamento.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Comprovante anexado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=pagamento.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Erro.\");
					</script>
				";	
			}  
 
  
  

				
			
?>