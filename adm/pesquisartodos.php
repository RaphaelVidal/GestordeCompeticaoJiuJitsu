
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Todos Competidores</title>

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
	$sexo = $_POST['todos'];
	//$categoriaida = $_POST['categoriaida'];
	//$result_cursos = "SELECT * FROM usuarios WHERE niveis_acesso_id=0 ORDER BY faixa,categoriaida,categoriapeso";
	$result_cursos = "SELECT `nome`,`id`,`faixa`,`categoriaida`,`categoriapeso`,sexo,imagem,cpf FROM usuarios WHERE niveis_acesso_id=0 and nome<>'' and sexo='$sexo' order by `faixa`,`categoriaida`,`categoriapeso`";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	$i=0;
	
	
			
			echo "
			<table class='table'>
			<thead>
			<tr>
			    <h1>Competidores do Sexo $sexo </td>
			</tr>
        <tr>
			<th class='text-center'>Qtd</th>
			<th class='text-center'>ID</th>
            <th>Nome</th>
            <th>Faixa</th>
			<th>Categoria Idade</th>
			<th>Categoria Peso</th>
			<th><center>Pagamento</center></th>
			<th><center>Comprovante</center></th>
         </tr>
    </thead>
        <tr>
		<tbody>";
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
	 $i=$i+1;
	 $cor="red";
	 if($rows_cursos['imagem']=='sim'){
		 $cor='green';
	 };
		echo " 
			<tr>
          <td class='text-center'>".$i."</td>
		 <td>".$rows_cursos['id']."</td>
		 <td><a target='_blank' href='dados_comp.php?cpf=".$rows_cursos['cpf']."'>".$rows_cursos['nome']."</a></td>		 
		 <td>".$rows_cursos['faixa']."</td>
		 <td>".$rows_cursos['categoriaida']."</td>
		  <td>".$rows_cursos['categoriapeso']."</td>
		  <td bgcolor='$cor'><center>".$rows_cursos['imagem']."</center></td>
		  "; if($rows_cursos['imagem']=='sim'){
		
		  echo "<td><center><a target='_blank' href='../cliente/comprovantes/".$rows_cursos['cpf'].".jpg'><img width='50px' src='../imagens/pagamento.png'></a></center></td>";
	      };
	echo "</tr>
	
";
		
	}
			
?>