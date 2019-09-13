<?php $nome1= @$_POST['nome1'];

$nome= @$_GET['nome'];

if($nome==''){
	$nome=$nome1;
}else $nome1=$nome;
?>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Nome:<?php echo $nome;echo $nome1;?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" rel="stylesheet" />
	<link href="../css/bootstrap.css" rel="stylesheet" />
	
	
	
   
    
    
	
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />


 

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<?php
include_once("../fun/conexao.php");
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	    
       
    
    //$niveis_acesso_id = $_POST['niveis_acesso_id'];
	//$categoriapeso = $_POST['categoriapeso'];
	//$sexo = $_POST['sexo'];
	//$categoriaida = $_POST['categoriaida'];
	$result_cursos = "SELECT * FROM usuarios WHERE nome like'%$nome%' and niveis_acesso_id=0 ORDER BY id ASC";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	$i=0;
	
	
			echo "
			<table class='table'>
			<thead>
			<tr>
			    <h1>Filtro Realizado por Competidores Cadastrados</td>
			</tr>
        <tr>
            <th class='text-center'>Inscrição</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Faixa</th>
			<th>Idade</th>
			<th>Peso</th>
			<th bgcolor='Green'>Categoria Idade</th>
			<th bgcolor='Yellow'>Categoria Peso</th>
			<th bgcolor='#011f4f'><b>Pagamento</b></th>
			<th>-</th>
			<th bgcolor='Green'><center>Trocar Cat. Idade</center></th>
			<th bgcolor='Yellow'>Trocar Categoria Peso</th>
			<th bgcolor='#011f4f'><b>Pagamento</b></th>
			
         </tr>
    </thead>
        <tr>
		<tbody>";
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
	 $i=$i+1;
		echo " 
			<tr>
		 <td class='text-center'>".$rows_cursos['id']."</td>
		             <td>".$rows_cursos['nome']."</td>
					 <td>".$rows_cursos['cpf']."</td>
		 <td>".$rows_cursos['faixa']."</td>
		<td>".$rows_cursos['idade']."</td>
		 <td>".$rows_cursos['peso']."</td>
		 <td bgcolor='Green'>".$rows_cursos['categoriaida']."</td>
		  <td bgcolor='Yellow'>".$rows_cursos['categoriapeso']."</td>
		  <td bgcolor='#0f5edd'>".$rows_cursos['imagem']."</td>
		  <td> </td>
		  <td bgcolor='green'>";echo '<form method="POST" action="update_idade.php">
										<input type="hidden" name="cpf" value='.$rows_cursos["cpf"].'></input>
										<input type="hidden" name="nomepesq" value='.$nome.'></input>
									   <select required name="categoriaida">
										<option value=""> - </option>
										<option value="Pre-mirim-2">PRÉ-Mírim-1</option>
										<option value="Pre-mirim-2">PRÉ-Mírim-2</option>
										<option value="Pre-mirim-3">PRÉ-Mírim-3</option>
										<option value="Mírim-1">Mírim-1</option>
										<option value="Mírim-2">Mírim-2</option>
										<option value="Mírim-3">Mírim-3</option>
										<option value="Infantil-1">Infantil-1</option>
										<option value="Infantil-2">Infantil-2</option>
										<option value="Infantil-3">Infantil-3</option>
										<option value="InfantoJuvenil1">Infanto Juvenil-1</option>
										<option value="InfantoJuvenil2">Infanto Juvenil-2</option>
										<option value="InfantoJuvenil3">Infanto Juvenil-3</option>
										<option value="Juvenil-1">Juvenil-1</option>
										<option value="Juvenil-2">Juvenil-2</option>
										<option value="Adult">Adult</option>
										<option value="Master I">Master I</option>
										<option value="Master II">Master II</option>
										<option value="Master III">Master III</option>
										<option value="Master IV">Master IV</option>
										<option value="Master V">Master V</option>
										<option value="Master VI">Master VI</option>
										
											</select>
											<input type="submit" value="TROCAR">
										</form>
										</td>';
		 echo '<td bgcolor="yellow"><form method="POST" action="update_peso.php">
										<input type="hidden" name="cpf" value='.$rows_cursos["cpf"].'></input>
										<input type="hidden" name="nomepesq" value='.$nome.'></input>
									   <select required name="categoriapeso">
										<option value=""> - </option>
										<option value="Galo">Galo</option>
										<option value="Pluma">Pluma</option>
										<option value="Pena">Pena</option>
										<option value="Leve">Leve</option>
										<option value="Medio">Médio</option>
										<option value="Meio Pesado">Meio Pesado</option>
										<option value="Pesado">Pesado</option>
										<option value="Super Pesado">Super Pesado</option>
										<option value="Pesadissimo">Pesadissimo</option>
											</select>
										
											</select>
											<input type="submit" value="TROCAR">
										</form>
										</td>';
		echo '<td bgcolor="#0f5edd"><form method="POST" action="update_pagamentonahora.php">
										<input type="hidden" name="cpf" value='.$rows_cursos["cpf"].'></input>
										<input type="hidden" name="nomepesq" value='.$nome.'></input>
									   <select required name="pagamento">
										<option value=""> - </option>
										<option value="sim">Sim</option>
										<option value="">Não</option>
										
											</select>
										
											</select>
											<input type="submit" value="TROCAR">
										</form>
										</td>';								
   echo "</tr>
	
";
		
	}
			
?>