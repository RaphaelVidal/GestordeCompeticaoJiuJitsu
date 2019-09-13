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
	    
    
	$faixa = array( 1 => 'BRANCA', 2 => 'CINZA', 3=> 'AMARELA', 4 => 'LARANGA', 5 => 'VERDE', 6 => 'AZUL', 7 => 'ROXA', 8 => 'MARROM', 9 => 'PRETA' );
	$categoriapeso= array( 1 => 'Galo', 2 => 'Pluma', 3 => 'Pena', 4 => 'Leve', 5 => 'Medio', 6 => 'Meio Pesado', 7 => 'Pesado', 8 => 'Super pesado', 9 => 'Pesadissimo' );
	$sexo= array(1=>'Masculino',2=>'Feminino');
	$categoriaida= array( 1 => 'Pre-mirim-1', 2 => 'Pre-mirim-2', 3 => 'Pre-mirim-3', 4 => 'Mírim-1', 5 => 'Mírim-2', 6 => 'Mírim-3', 7 => 'Infantil-1', 8 => 'Infantil-2', 9 => 'Infantil-3',10 => 'InfantoJuvenil1',
	                      11 => 'InfantoJuvenil2', 12 => 'InfantoJuvenil3', 13 => 'Juvenil-1', 14 => 'Juvenil-2', 15 => 'Adult', 16 => 'Master I', 17 => 'Master II', 18 => 'Master III',19 => 'Master IV',20 => 'Master V',
						  21 => 'Master VI');
	/*print_r ($faixa);
	echo'</br>';
	print_r ($categoriapeso);
	echo'</br>';
	print_r ($sexo);
	echo'</br>';
	print_r ($categoriaida);*/
	
	
for($s=1;$s<=2;$s++){
	/*echo $sexo[$s];
	echo'</br>';*/	
			for($f=1;$f<=7;$f++){ //faixas
				/*echo'<p>';
				echo'</br>';
				echo $faixa[$f];
				echo'</p>';*/
					for($k=1;$k<=21;$k++){// idade
						/*echo'---';
						echo $categoriaida[$k];
						echo'</br>';*/
								for($p=1;$p<=9;$p++){// peso
									/*echo'-----------';
									echo $categoriapeso[$p];
									echo'</br>';*/			
	$result_cursos = "SELECT * FROM usuarios WHERE faixa='$faixa[$f]' and categoriapeso='$categoriapeso[$p]' and categoriaida like'%$categoriaida[$k]%' and sexo='$sexo[$s]' and niveis_acesso_id=0 ORDER BY id ASC";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	$teste= mysqli_query($conn, $result_cursos);
	$i=0;
	$tem = mysqli_fetch_array($teste);
	if(isset($tem)){
			echo "
			<table class='table'>
			<thead>
			<tr>
			    <h1>$sexo[$s] - $faixa[$f] - $categoriaida[$k] - $categoriapeso[$p]  </td>
			</tr>
        <tr>
			<th class='text-center'>Qtd</th>
            <th class='text-center'>Inscrição</th>
            <th>Nome</th>
			<th>Equipe</th>
            <!--<th>CPF</th>
            <th>Faixa</th>
			<th>Sexo</th>
			<th>Idade</th>
			<th>Peso</th>
			<th>Categoria Idade</th>
			<th>Categoria Peso</th>-->
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
					 <td>".$rows_cursos['equipe']."</td>
					 <!--<td>".$rows_cursos['cpf']."</td>
		 <td>".$rows_cursos['faixa']."</td>
		 <td>".$rows_cursos['sexo']."</td>
		<td>".$rows_cursos['idade']."</td>
		 <td>".$rows_cursos['peso']."</td>
		 <td>".$rows_cursos['categoriaida']."</td>
		  <td>".$rows_cursos['categoriapeso']."</td>-->
    </tr>
	
";
	} // fim isset	
	}
											
						 } //fecha peso 
					} //fecha idade
			}// fecha faixa
	}//fecha sexo
	
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