<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Pesquisa</title>

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
	
	

				
	$result_cursos = "SELECT * FROM usuarios WHERE niveis_acesso_id=0 and imagem like '%sim%' ORDER BY id ASC";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	$teste= mysqli_query($conn, $result_cursos);
	$i=0;
	$tem = mysqli_fetch_array($teste);
	if(isset($tem)){
			
		
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
	 $i=$i+1;
	$cpf=$rows_cursos['cpf'];
	$foto="../cliente/imagens/$cpf .jpg";
	
		echo " 
		<div align='center'>
			 </div>
			<center>	
				<h2><img src='img/ifsertao.png' width='10%' align='left' > Dados da inscrição <img src='img/ifsertao.png' width='10%' align='right' ></h2>
			<table id='cad_table' border='1'>
				
				<tr>
				<td class='btn-lg text-right' >Foto:</td>
				<td align='center' width='%' height=''><img width='90px' align='center' height='90px' src='$foto' type='text'  name='arquivo'  > </td>
				</tr>
				
				<tr>
				<td class='btn-lg text-right' >Inscr. :</td>
				<td><input type='text' readonly name='cpf' class='txt' size='40'  value='".$rows_cursos['id']."'><br></td><br>
				</tr>
				
				<tr>
				<td class='btn-lg text-right' >CPF :</td>
				<td><input type='text' readonly name='cpf' class='' size='40'  value='".$rows_cursos['cpf']."'><br></td><br>
				</tr>
				
				<tr>
				<td class='btn-lg text-right'>Nome :</td>
				<td><input type='text' name='nome' class='' size='70' value='".$rows_cursos['nome']."'></td>
				</tr>
			  
				<tr>
				<td class='btn-lg text-right' >Sexo:</td>
				<td><input name='sexo'  type='text' readonly name='sexo' class='txt' value='".$rows_cursos['sexo']."' /> </td>
				</tr>
				
				<tr>  
				<td class='btn-lg text-right'>Idade :</td>
				<td><input type='text' readonly name='idade' class='txt' value='".$rows_cursos['idade']."'><input type='text' readonly name='idade' class='txt' value='".$rows_cursos['categoriaida']."' </td>
				</tr>
				
				<tr>
				<td class='btn-lg text-right' >Peso:</td>
				<td><input type='text' readonly name='peso' class='txt' value='".$rows_cursos['peso']."'><input type='text' readonly name='peso' class='txt' value='".$rows_cursos['categoriapeso']."' </td>
				</tr>
				
				<tr>
				<td class='btn-lg text-right'>Equipe :</td>
				<td><input type='text' readonly name='equipe' class='txt' value='".$rows_cursos['equipe']."'></td>
				</tr>
				<tr>
				<td class='btn-lg text-right'>Competir :</td>
				<td><input type='text' readonly name='competir' class='txt' value='".$rows_cursos['competir']."'></td>
				</tr>
				
				<tr>
				
            		<td class='btn-lg text-right'>Faixa:</td>
					<td><input type='text' readonly name='faixa' class='txt' value= '".$rows_cursos['faixa']."'> </td>
				
						
				</tr>	
				
					<tr>
            <td class='btn-lg text-right'>Peso Oficial:</td>
				<td><input type='text' readonly name='faixa' class='txt' > </td>
       </tr>
				
				
				
			</table>
			
				
								
			</center>
			
			
			
			<!--<td class='text-center'>".$i."</td>  
		 <td class='text-center'>".$rows_cursos['id']."</td>
		             <td>".$rows_cursos['nome']."</td>
					 <td>".$rows_cursos['equipe']."</td>
					 <td>".$rows_cursos['cpf']."</td>
		 <td>".$rows_cursos['faixa']."</td>
		 <td>".$rows_cursos['sexo']."</td>
		<td>".$rows_cursos['idade']."</td>
		 <td>".$rows_cursos['peso']."</td>
		 <td>".$rows_cursos['categoriaida']."</td>
		  <td>".$rows_cursos['categoriapeso']."</td>-->
    </tr>
	<br><br><br>
";

	} 	
	} // fim isset
											
						
			

	
    /*
    $faixa = $_POST['faixa'];
	$categoriapeso = $_POST['categoriapeso'];
	$sexo = $_POST['sexo'];
	$categoriaida = $_POST['categoriaida'];
	$result_cursos = "SELECT * FROM usuarios WHERE faixa='$faixa' and categoriaida='$categoriaida' and categoriapeso='$categoriapeso' and sexo='$sexo' ORDER BY id ASC";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	$i=0;
	
	
			echo "
			<table class='table'>
			<thead>
			<tr>
			    <h1>Faixa: $faixa Peso: $categoriapeso Sexo: $sexo Categoria: $categoriaida</td>
			</tr>
        <tr>
			<th class='text-center'>Qtd</th>
            <th class='text-center'>Inscrição</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Faixa</th>
			<th>Sexo</th>
			<th>Idade</th>
			<th>Peso</th>
			<th>Categoria Idade</th>
			<th>Categoria Peso</th>
         </tr>
    </thead>
        <tr>
		<tbody>";
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
	 $i=$i+1;
		echo " 
			<tr>
          <td class='text-center'>".$i."</td>  
		 <td class='text-center'>".$rows_cursos['id']."</td>
		             <td>".$rows_cursos['nome']."</td>
					 <td>".$rows_cursos['cpf']."</td>
		 <td>".$rows_cursos['faixa']."</td>
		 <td>".$rows_cursos['sexo']."</td>
		<td>".$rows_cursos['idade']."</td>
		 <td>".$rows_cursos['peso']."</td>
		 <td>".$rows_cursos['categoriaida']."</td>
		  <td>".$rows_cursos['categoriapeso']."</td>
    </tr>
	
";
		
	}
	*/		
?>