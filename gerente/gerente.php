<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>

<title>Criar um web site passo a passo – CSS – Dicas(iniciante)</title>

<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" /> <!-- Aqui chamamos o arquivo estilo.css da pasta "CSS"   -->

</head>

<body>
<?php
	session_start();
 "Usuario: ". $_SESSION['usuarioNome'];	
 $cpf = $_GET['cpf'];

?>
<!-- a Tag DIV , provavelmente é novidade para você que é iniciante, as DIVs são caixas que recebem a formatação do arquivo CSS, escrevemos "<div ></div>" assim ela fica sem formatação, para chamarmos a formatação do arquivo CSS, escrevemos "<div class="cabecalho" ></div>" com as "class" chamamos a class que foi criada no css, no caso a class "cabelhalho"  -->

<!-- A "class" pode ser usada em outros elementos alem da "DIV" -->


<div class="cabecalho" >

  				<div class="logo" >                
                <center><img src="img/logo.png" width="450" height="150" ></center><!-- Insere a imagem do logo da pasta IMG -->
                </div><!-- Fim Logo -->
                
                
                <div class="banner" >
                 <!-- Insere a imagem do banner da pasta IMG -->
                </div><!-- Fim Banner -->
                              
                <div class="menu" >
                
                <a href="cadastroF.php?cpf=<?php echo $cpf?>"> Completar Dados de Inscrição </a> <!-- link menu -->/	
                <a href="conteudo.php?cpf=<?php echo $cpf ?>" > Boleto de Pagamento </a> <!-- link menu -->/
                <a href="status.php?cpf=<?php echo $cpf?>" > Status Da Inscrição 	</a> <!-- link menu -->/
				<a href="duvida.php" > Duvidas sobre a Inscriçao?? </a> <!-- Link Menu -->
                
                </div><!-- Fim menu -->
                
</div><!-- Fim Cabeçalho -->

<div class="conteudo" >

					<div class="texto" >
                    <h1>Informação de Competiçoes</h1>
                    
                    <p>What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                    </div><!-- Fim Texto -->
                    
                    <div class="foto" >
                    <img src="img/almeidacombat.png" width="350" height="350" /><!-- Insere a foto da pasta IMG -->
                    </div><!-- Fim foto -->
                    
</div><!-- Fim conteudo -->


<div class="rodape" >
	<p>© Copyright desde 2017 André L. Design, todos os direitos reservados </p>
</div><!-- Fim rodape -->


</body>
</html>
