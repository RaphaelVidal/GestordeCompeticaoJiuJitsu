<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Chaveamento</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

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
	
	<style type="text/css">
        .chave1left{
			border-top:2px #530013 solid; border-right:2px #530013 solid; 
			-webkit-border-top-right-radius: 10px;
			-moz-border-radius-topright: 10px;
			border-top-right-radius: 10px;
        }
        .chave1leftBottom{
            border-bottom:2px #530013 solid; border-right:2px #530013 solid;
			-webkit-border-bottom-right-radius: 10px;
			-moz-border-radius-bottomright: 10px;
			border-bottom-right-radius: 10px;
        }
        
        .chave1Right{
			border-top:2px #530013 solid; border-left:2px #530013 solid; 
			-webkit-border-top-left-radius: 10px;
			-moz-border-radius-topleft: 10px;
			border-top-left-radius: 10px; 
        }
        .chave1RightBottom{
            border-bottom:2px #530013 solid; border-left:2px #530013 solid;
			-webkit-border-bottom-left-radius: 10px;
			-moz-border-radius-bottomleft: 10px;
			border-bottom-left-radius: 10px;
        }
        
        .contChave {
             border:2px #530013 solid;
            
			/* tirei o arrendodado 
			-moz-border-radius: 10px; 
            -webkit-border-radius: 10px; 	
            border-radius: 10px;
			*/
            
			padding:10px;
        }        
        </style>

</head>
<body>
<?php
	include_once("../fun/conexao.php");/*Valores para conexão*/
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname); /*Conecta no bando de dados MySql*/
	
	if(isset($_POST['faixa'])){
    $faixa = $_POST['faixa'];
	$sexo = $_POST['sexo'];
	}
	else {
	$faixa = $_GET['faixa'];
	$sexo = $_GET['sexo'];
	}	
		
	$sql = "SELECT id,nome,equipe,cpf FROM usuarios WHERE faixa='$faixa' and sexo='$sexo' and niveis_acesso_id=0 and `imagem` LIKE '%sim%' and `competir` LIKE '%Categoria_e_Absoluto%' ";
	$sql_luta1 = "SELECT id,nome,equipe,cpf FROM usuarios WHERE faixa='$faixa' and sexo='$sexo' and niveis_acesso_id=0 and luta1ab=1 order by horaluta1ab ";
	$sql_luta2 = "SELECT id,nome,equipe,cpf FROM usuarios WHERE faixa='$faixa' and sexo='$sexo' and niveis_acesso_id=0 and luta2ab=1 order by horaluta2ab ";
	$sql_luta3 = "SELECT id,nome,equipe,cpf FROM usuarios WHERE faixa='$faixa' and sexo='$sexo' and niveis_acesso_id=0 and luta3ab=1 order by horaluta3ab ";
	$sql_luta4 = "SELECT id,nome,equipe,cpf FROM usuarios WHERE faixa='$faixa' and sexo='$sexo' and niveis_acesso_id=0 and luta4ab=1 order by horaluta4ab ";
	$sql_luta5 = "SELECT id,nome,equipe,cpf FROM usuarios WHERE faixa='$faixa' and sexo='$sexo' and niveis_acesso_id=0 and luta5ab=1 order by horaluta5ab ";
	

	$dados = mysqli_query($conn, $sql); //os dados são armazenados 
	$dados_luta1 = mysqli_query($conn, $sql_luta1);
	$dados_luta2 = mysqli_query($conn, $sql_luta2);
	$dados_luta3 = mysqli_query($conn, $sql_luta3);
	$dados_luta4 = mysqli_query($conn, $sql_luta4);
	$dados_luta5 = mysqli_query($conn, $sql_luta5);

	$i=0;//usada para pegar os competidores
	$j=0;//usada para pegar os competidores
	$i2=0;//usada para pegar os competidores da luta1
	$j2=0;//usada para pegar os competidores da luta1
	$i3=0;//usada para pegar os competidores da luta2
	$j3=0;//usada para pegar os competidores da luta2
	$i4=0;//usada para pegar os competidores da luta3  
	$j4=0;//usada para pegar os competidores da luta3  
	$i5=0;//usada para pegar os competidores da luta4  
	$j5=0;//usada para pegar os competidores da luta4  
	$i6=0;//usada para pegar os competidores da luta5  campeão
	$j6=0;//usada para pegar os competidores da luta5 campeão 

	
	
	
			echo "
			<table border='1' class='table'>
			<thead>
			
			
        <tr>
			
            <th class='text-center' colspan='4'><h2>$faixa - $sexo</h2></th>
            
            
            
			
			
         </tr>
    </thead>
        <tr>
		<tbody>";
		

		/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
//dados do primeiro chaveamento		
	while($linha = mysqli_fetch_array($dados)){
	 $i=$i+1;//$linha['nome'] é $linha e 'coluna'
	
	
$array = array_keys($linha);
header("Content-type: text/html; charset=utf-8");
for ($h = 1; $h <= 1; $h++) { //pega os dados de cada competidor
	$j++;
	if($j==1){
	 $competidor1= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]],$linha[$array[7]] ),
				  
					);
	};
	if($j==2){
	 $competidor2= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==3){
	 $competidor3= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==4){
	 $competidor4= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
		if($j==5){
	 $competidor5= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
		if($j==6){
	 $competidor6= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==7){
	 $competidor7= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==8){
	 $competidor8= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==9){
	 $competidor9= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
		if($j==10){
	 $competidor10= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==11){
	 $competidor11= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]]),
				  
					);
	};
	if($j==12){
	 $competidor12= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==13){
	 $competidor13= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==14){
	 $competidor14= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==15){
	 $competidor15= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==16){
	 $competidor16= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);//fecha array
	};
	if($j==17){
	 $competidor17= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]],$linha[$array[7]] ),
				  
					);
	};
	if($j==18){
	 $competidor18= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==19){
	 $competidor19= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==20){
	 $competidor20= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
		if($j==21){
	 $competidor21= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
		if($j==22){
	 $competidor22= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==23){
	 $competidor23= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==24){
	 $competidor24= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==25){
	 $competidor25= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
		if($j==26){
	 $competidor26= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==27){
	 $competidor27= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]]),
				  
					);
	};
	if($j==28){
	 $competidor28= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==29){
	 $competidor29= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==30){
	 $competidor30= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==31){
	 $competidor31= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);
	};
	if($j==32){
	 $competidor32= array(
	              
						array( $linha[$array[3]], $linha[$array[4]],$linha[$array[1]] ),
				  
					);//fecha array
	};
	
	//fecha if

    
	}//fecha for
							
	}//fecha while
	
// while para chaveamento de ganhadores da luta1
	while($linha_luta1 = mysqli_fetch_array($dados_luta1)){
	 $i=$i+1;//$linha['nome'] é $linha e 'coluna'
	
	
$array_luta1 = array_keys($linha_luta1);
header("Content-type: text/html; charset=utf-8");
for ($h2 = 1; $h2 <= 1; $h2++) { //pega os dados de cada competidor
	$j2++;
	if($j2==1){
	 $luta1competidor1= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]],$linha_luta1[$array[7]] ),
				  
					);
	};
	if($j2==2){
	 $luta1competidor2= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==3){
	 $luta1competidor3= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==4){
	 $luta1competidor4= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
		if($j2==5){
	 $luta1competidor5= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
		if($j2==6){
	 $luta1competidor6= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==7){
	 $luta1competidor7= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==8){
	 $luta1competidor8= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==9){
	 $luta1competidor9= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]],$linha_luta1[$array[7]] ),
				  
					);
	};
	if($j2==10){
	 $luta1competidor10= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==11){
	 $luta1competidor11= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==12){
	 $luta1competidor12= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
		if($j2==13){
	 $luta1competidor13= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
		if($j2==14){
	 $luta1competidor14= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==15){
	 $luta1competidor15= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	if($j2==16){
	 $luta1competidor16= array(
	              
						array( $linha_luta1[$array[3]], $linha_luta1[$array[4]],$linha_luta1[$array[1]] ),
				  
					);
	};
	

    
	}//fecha for
							
	}//fecha while
	
	// while para chaveamento de ganhadores da luta2
	while($linha_luta2 = mysqli_fetch_array($dados_luta2)){
	 $i=$i+1;//$linha['nome'] é $linha e 'coluna'
	
	
$array_luta2 = array_keys($linha_luta2);
header("Content-type: text/html; charset=utf-8");
for ($h3 = 1; $h3 <= 1; $h3++) { //pega os dados de cada competidor
	$j3++;
	if($j3==1){
	 $luta2competidor1= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]],$linha_luta2[$array[7]] ),
				  
					);
	};
	if($j3==2){
	 $luta2competidor2= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]] ),
				  
					);
	};
	if($j3==3){
	 $luta2competidor3= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]] ),
				  
					);
	};
	if($j3==4){
	 $luta2competidor4= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]] ),
				  
					);
	};
	if($j3==5){
	 $luta2competidor5= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]],$linha_luta2[$array[7]] ),
				  
					);
	};
	if($j3==6){
	 $luta2competidor6= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]] ),
				  
					);
	};
	if($j3==7){
	 $luta2competidor7= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]] ),
				  
					);
	};
	if($j3==8){
	 $luta2competidor8= array(
	              
						array( $linha_luta2[$array[3]], $linha_luta2[$array[4]],$linha_luta2[$array[1]] ),
				  
					);
	};	
	

    
	}//fecha for
							
	}//fecha while
	
	// while para chaveamento de ganhadores da luta3
	while($linha_luta3 = mysqli_fetch_array($dados_luta3)){
	 $i=$i+1;//$linha['nome'] é $linha e 'coluna'
	
	
$array_luta3 = array_keys($linha_luta3);
header("Content-type: text/html; charset=utf-8");
for ($h4 = 1; $h4 <= 1; $h4++) { //pega os dados de cada competidor
	$j4++;
	if($j4==1){
	 $luta3competidor1= array(
	              
						array( $linha_luta3[$array[3]], $linha_luta3[$array[4]],$linha_luta3[$array[1]],$linha_luta3[$array[7]] ),
				  
					);
	};
	if($j4==2){
	 $luta3competidor2= array(
	              
						array( $linha_luta3[$array[3]], $linha_luta3[$array[4]],$linha_luta3[$array[1]] ),
				  
					);
	};
	if($j4==3){
	 $luta3competidor3= array(
	              
						array( $linha_luta3[$array[3]], $linha_luta3[$array[4]],$linha_luta3[$array[1]],$linha_luta3[$array[7]] ),
				  
					);
	};
	if($j4==4){
	 $luta3competidor4= array(
	              
						array( $linha_luta3[$array[3]], $linha_luta3[$array[4]],$linha_luta3[$array[1]] ),
				  
					);
	};
	
    
	}//fecha for de ganhadores da luta3
							
	}//fecha while de ganhadores da luta3
	
// while para chaveamento de ganhadores da luta4
	while($linha_luta4 = mysqli_fetch_array($dados_luta4)){
	 $i=$i+1;//$linha['nome'] é $linha e 'coluna'	
	
	$array_luta4 = array_keys($linha_luta4);
header("Content-type: text/html; charset=utf-8");
for ($h5 = 1; $h5 <= 1; $h5++) { //pega os dados de cada competidor
	$j5++;
	if($j5==1){
	 $luta4competidor1= array(
	              
						array( $linha_luta4[$array[3]], $linha_luta4[$array[4]],$linha_luta4[$array[1]],$linha_luta4[$array[7]] ),
				  
					);
	};
	if($j5==2){
	 $luta4competidor2= array(
	              
						array( $linha_luta4[$array[3]], $linha_luta4[$array[4]],$linha_luta4[$array[1]],$linha_luta4[$array[7]] ),
				  
					);
	};
	
    
	}//fecha for de ganhadores da luta4
							
	}//fecha while de ganhadores da luta4
	
	// while para chaveamento de ganhadores da luta5
	while($linha_luta5 = mysqli_fetch_array($dados_luta5)){
	 $i=$i+1;//$linha['nome'] é $linha e 'coluna'	
	
	$array_luta5 = array_keys($linha_luta5);
header("Content-type: text/html; charset=utf-8");
for ($h6 = 1; $h6 <= 1; $h6++) { //pega os dados de cada competidor
	$j6++;
	if($j6==1){
	 $luta5competidor1= array(
	              
						array( $linha_luta5[$array[3]], $linha_luta5[$array[4]],$linha_luta5[$array[1]],$linha_luta5[$array[7]] ),
				  
					);
	};
	
    
	}//fecha for de ganhadores da luta5
							
	}//fecha while de ganhadores da luta5
	
	
	//var_dump($luta1competidor1);// usado apenas para saber endereço dos dados inseridos
	
	
	echo '
	   <table width="747" border="0" align="center" cellpadding="0" cellspacing="0"><!-- tabela externa-->
 <tr> <!-- INICIO PRIMEIRA LINHA-->
	<td width="360"><!-- LINHA1  COLUNA1-->
			<b>(Luta_1)</font></b>
			<table valign=top width="310" class="contChave" border="0"><!-- tabela luta 1 - compt 1 e 2-->
				  <tr> 
						<td width="64%" style="padding-top:5px;">
						  ';@print_r(@$competidor1[0][0]);echo' (';@print_r($competidor1[0][2]);echo ')</td>
						<td width="36%" style="padding-top:5px;"><div align="right"><font size="1">(';@print_r($competidor1[0][1]);echo')</font></div></td>
				  </tr>
				  <tr> 
						<td> 
						  ';@print_r(@$competidor3[0][0]);echo' (';@print_r($competidor3[0][2]);echo ')</td>
						<td><div align="right"><font size="1">(';@print_r($competidor3[0][1]);echo')</font></div></td>
				  </tr>
			</table>            
	</td>		 
	<td width="21" rowspan="3" align="left" valign="middle"> <!-- LINHA1  COLUNA2-->
		<div align="left"><img src="chave2.gif" width="20" height="79"></div>
	</td>		 
	<td width="50" rowspan="3" align="center" valign="up"> <!-- LINHA1  COLUNA3-->
		<b>(Luta_17)</b><br>';@print_r(@$luta1competidor1[0][0]);echo' (';@print_r($luta1competidor1[0][2]);echo ')<br>X<br>';@print_r(@$luta1competidor3[0][0]);echo' (';@print_r($luta1competidor3[0][2]);echo ')
	</td>		 
	<td width="20" rowspan="7" align="left" valign="middle"> <!-- LINHA1  COLUNA4-->
		<img src="chaveE.gif" width="20" height="170">
	</td>		 
	<td width="20" rowspan="7" align="center" valign="middle"> <!-- LINHA1  COLUNA5-->
		<b>(Luta_25)</b><br>';@print_r(@$luta2competidor1[0][0]);echo' (';@print_r($luta2competidor1[0][2]);echo ') <br>X<br> ';@print_r(@$luta2competidor3[0][0]);echo' (';@print_r($luta2competidor3[0][2]);echo ')
	</td>		 
	<td width="20" rowspan="14" align="left" valign="middle"> <!-- LINHA1  COLUNA4-->
		<img src="chaveE.gif" width="20" height="300">
	</td>
	<td width="20" rowspan="14" align="center" valign="middle"> <!-- LINHA1  COLUNA5-->
		<b>(Luta_29)</b><br>';@print_r(@$luta3competidor1[0][0]);echo' (';@print_r($luta3competidor1[0][2]);echo ') <br>X<br> ';@print_r(@$luta3competidor3[0][0]);echo' (';@print_r($luta3competidor3[0][2]);echo ')
	</td>
	<td width="20" rowspan="14" align="center" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>	
	<td width="34" rowspan="14" align="center">  <!-- LINHA1  COLUNA-->
	<b>(Luta_31)<br>FINAL</b><br>';@print_r(@$luta4competidor1[0][0]);echo' (';@print_r($luta4competidor1[0][2]);echo ') <br>X<br> ';@print_r(@$luta4competidor2[0][0]);echo' (';@print_r($luta4competidor2[0][2]);echo ')
		<br><br><br><b><img width="80%" src="../imagens/medalha.png">CAMPEÃO<br>';@print_r(@$luta5competidor1[0][0]);echo' (';@print_r($luta5competidor1[0][2]);echo ')</b><br>
	</td>
	
<!-- FIM LADO ESQUERDO -->
<!-- INICIO LADO DIREITO -->
	
    <td width="20" rowspan="14" align="center" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>	
	<td width="20" rowspan="14" align="center" valign="middle"> <!-- LINHA1  COLUNA5-->
		<b>(Luta_30)</b><br>';@print_r(@$luta3competidor2[0][0]);echo' (';@print_r($luta3competidor2[0][2]);echo ') <br>X<br> ';@print_r(@$luta3competidor4[0][0]);echo' (';@print_r($luta3competidor4[0][2]);echo ')
	</td>
	<td width="20" rowspan="14" align="left" valign="middle"> <!-- LINHA1  COLUNA4-->
		<img src="chaveD.gif" width="20" height="300">
	</td>	<td width="20" rowspan="7" align="center" valign="middle"><b>(Luta_26)</b><br>';@print_r(@$luta2competidor2[0][0]);echo' (';@print_r($luta2competidor2[0][2]);echo ') <br>X<br> ';@print_r(@$luta2competidor4[0][0]);echo' (';@print_r($luta2competidor4[0][2]);echo ')</td>
	<td width="21" rowspan="7" valign="middle"><div align="right"><img src="chaveD.gif" width="20" height="170"></div></td>
	<td width="20" rowspan="3" align="center" valign="middle"><b>(Luta_18)</b><br>';@print_r(@$luta1competidor2[0][0]);echo' (';@print_r($luta1competidor2[0][2]);echo ')<br>X<br> ';@print_r(@$luta1competidor4[0][0]);echo' (';@print_r($luta1competidor4[0][2]);echo ')</td>
	<td width="21" rowspan="3" valign="middle"><div align="right"><img src="chaveD.gif" width="20" height="79"></div></td>
	<td width="310">
			 
			 <table width="310" class="contChave" valign=top border="0"> <!-- tabela luta 2 - compt 3 e 4-->
				<tr> 
					<b>(Luta_2)</b>		
					<td width="64%">';@print_r($competidor2[0][0]);echo' (';@print_r($competidor2[0][2]);echo ')</td>
					<td width="36%"><div align="right"><font size="1">(';@print_r($competidor2[0][1]);echo')</font></div></td>
				</tr>
				<tr> 
					<td>';print_r(@$competidor4[0][0]);echo' (';@print_r($competidor4[0][2]);echo ')</td>
					<td><div align="right"><font size="1">(';@print_r($competidor4[0][1]);echo')</font></div></td>
				</tr>
			</table>
	</td>
</tr> <!-- FIM PRIMEIRA LINHA -->
<tr> <!-- INICIO SEGUNDA LINHA -->
          <td>&nbsp; </td>
          <td>&nbsp;</td>
</tr>

        <tr> 
          <td><table valign=top width="310" class="contChave"border="0">
              <tr> 
			  <b>(Luta_3)</b>	
                <td width="64%"> 
                 ';@print_r($competidor5[0][0]);echo' (';@print_r($competidor5[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor5[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor7[0][0]);echo' (';@print_r($competidor7[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor6[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
          <td><table valign=top width="310" class="contChave">
              <tr> 
                <b>(Luta_4)</b>	
                <td width="64%">';@print_r($competidor6[0][0]);echo' (';@print_r($competidor6[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor6[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor8[0][0]);echo' (';@print_r($competidor8[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor8[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><table valign=top width="310" class="contChave" >
              <tr> 
                <b>(Luta_5)</b>	
                <td width="64%">';@print_r($competidor9[0][0]);echo' (';@print_r($competidor9[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor9[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor11[0][0]);echo' (';@print_r($competidor11[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor11[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
		  	
          <td rowspan="3" align="left" valign="middle"> <div align="left"><img src="chave2.gif" width="20" height="79"></div></td>
          <td width="20" rowspan="3" align="center" valign="middle"><b>(Luta_19)</b><br>';@print_r(@$luta1competidor5[0][0]);echo' (';@print_r($luta1competidor5[0][2]);echo ') <br>X<br> ';@print_r(@$luta1competidor7[0][0]);echo' (';@print_r($luta1competidor7[0][2]);echo ')</td>
		  <td width="20" rowspan="3" align="center" valign="middle"><b>(Luta_20)</b><br>';@print_r(@$luta1competidor6[0][0]);echo' (';@print_r($luta1competidor6[0][2]);echo ') <br>X<br> ';@print_r(@$luta1competidor8[0][0]);echo' (';@print_r($luta1competidor8[0][2]);echo ')</td>
		  <td rowspan="3" valign="middle"><div align="right"><img src="chaveD.gif" width="20"
height="79"></div></td>
			
          <td>
          	<table valign=top width="310" class="contChave">
              <tr> 
                
                <td width="64%" valign="top" style="padding-bottom:5px;">';@print_r($competidor10[0][0]);echo' (';@print_r($competidor10[0][2]);echo ')</td>
                <td width="36%" align="right" valign="top" style="padding-bottom:5px;"><div align="right"><font size="1">(';@print_r($competidor10[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                <b>(Luta_6)</b>	
                <td>';@print_r($competidor12[0][0]);echo' (';@print_r($competidor12[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor12[0][1]);echo')</font></div></td>
              </tr>
            </table>          </td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td height="62"> <table valign=top width="310" class="contChave">
              <tr> 
                <b>(Luta_7)</b>	
                <td width="64%">';@print_r($competidor13[0][0]);echo' (';@print_r($competidor13[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor13[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor15[0][0]);echo' (';@print_r($competidor15[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor15[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
          <td><table valign=top width="310" class="contChave">
              <tr> 
                <b>(Luta_8)</b>	
                <td width="64%">';@print_r($competidor14[0][0]);echo' (';@print_r($competidor14[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor14[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor16[0][0]);echo' (';@print_r($competidor16[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor16[0][1]);echo')</font></div></td>
              </tr>
            </table>
		</td>
        </tr>
      
  
 </tr>        
 <tr> 
	<td width="">
			  <b>(Luta_9)</b>
				<table valign=top width="310" class="contChave" border="0"><!-- tabela luta 1 - compt 1 e 2-->
				  <tr> 
						<td width="64%" style="padding-top:5px;">
						  ';@print_r(@$competidor17[0][0]);echo' (';@print_r($competidor17[0][2]);echo ')</td>
						<td width="36%" style="padding-top:5px;"><div align="right"><font size="1">(';@print_r($competidor17[0][1]);echo')</font></div></td>
				  </tr>
				  <tr> 
						<td> 
						  ';@print_r(@$competidor19[0][0]);echo' (';@print_r($competidor19[0][2]);echo ')</td>
						<td><div align="right"><font size="1">(';@print_r($competidor19[0][1]);echo')</font></div></td>
				  </tr>
				</table>            
	</td>
	<td width="21" rowspan="3" align="left" valign="middle"> <!-- LINHA1  COLUNA2-->
		<div align="left"><img src="chave2.gif" width="20" height="79"></div>
	<td width="50" rowspan="3" align="center" valign="up"> <!-- LINHA1  COLUNA3-->
		<b>(Luta_21)</b><br>';@print_r(@$luta1competidor9[0][0]);echo' (';@print_r($luta1competidor9[0][2]);echo ')<br>X<br>';@print_r(@$luta1competidor11[0][0]);echo' (';@print_r($luta1competidor11[0][2]);echo ')
	</td>
	
	
	<td width="20" rowspan="7" align="left" valign="middle"> <!-- LINHA1  COLUNA4-->
		<img src="chaveE.gif" width="20" height="170">
	</td>
	<td width="20" rowspan="7" align="center" valign="middle"><b>(Luta_27)</b><br>';@print_r(@$luta2competidor5[0][0]);echo' (';@print_r($luta2competidor5[0][2]);echo ') <br>X<br> ';@print_r(@$luta2competidor7[0][0]);echo' (';@print_r($luta2competidor7[0][2]);echo ')</td>
	<td width="20" rowspan="7" align="center" valign="middle"> <!-- LINHA1  COLUNA5-->
		<b>(Luta_28)</b><br>';@print_r(@$luta2competidor6[0][0]);echo' (';@print_r($luta2competidor6[0][2]);echo ') <br>X<br> ';@print_r(@$luta2competidor8[0][0]);echo' (';@print_r($luta2competidor8[0][2]);echo ')
	</td>	
	<td width="21" rowspan="7" valign="middle"><div align="right"><img src="chaveD.gif" width="20" height="170"></div></td>
	<td width="20" rowspan="3" align="center" valign="middle"><b>(Luta_22)</b><br>';@print_r(@$luta1competidor10[0][0]);echo' (';@print_r($luta1competidor10[0][2]);echo ')<br>X<br> ';@print_r(@$luta1competidor12[0][0]);echo' (';@print_r($luta1competidor12[0][2]);echo ')</td>
	<td width="21" rowspan="3" valign="middle"><div align="right"><img src="chaveD.gif" width="20" height="79"></div></td>	 		 
			 
	
	<td width="310">
			 
			 <table width="310" class="contChave" valign=top border="0"> <!-- tabela luta 2 - compt 3 e 4-->
				<tr> 
				<b>(Luta_10)</b>		
					<td width="64%">';@print_r($competidor18[0][0]);echo' (';@print_r($competidor18[0][2]);echo ')</td>
					<td width="36%"><div align="right"><font size="1">(';@print_r($competidor18[0][1]);echo')</font></div></td>
				</tr>
				<tr> 
				
					<td>';print_r(@$competidor20[0][0]);echo' (';@print_r($competidor20[0][2]);echo ')</td>
					<td><div align="right"><font size="1">(';@print_r($competidor20[0][1]);echo')</font></div></td>
				</tr>
			</table>
	 </td>
</tr>
<tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
</tr>
<tr> 
     <td>
		  <table valign=top width="310" class="contChave"border="0">
              <tr> 
				<b>(Luta_11)</b>	
					<td width="64%">';@print_r($competidor21[0][0]);echo' (';@print_r($competidor21[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor21[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                <td>';@print_r($competidor23[0][0]);echo' (';@print_r($competidor23[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor23[0][1]);echo')</font></div></td>
              </tr>
            </table>
	 </td>
     <td>
		   <table valign=top width="310" class="contChave">
              <tr> 
                <b>(Luta_12)</b>	
                <td width="64%">';@print_r($competidor22[0][0]);echo' (';@print_r($competidor22[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor22[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor24[0][0]);echo' (';@print_r($competidor24[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor24[0][1]);echo')</font></div></td>
              </tr>
            </table>
	 </td>
</tr>
<tr> 
          
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
</tr>
<tr> 
      <td>
		     <table valign=top width="310" class="contChave" >
                <tr> 
					<b>(Luta_13)</b>	
					<td width="64%">';@print_r($competidor25[0][0]);echo' (';@print_r($competidor25[0][2]);echo ')</td>
					<td width="36%"><div align="right"><font size="1">(';@print_r($competidor25[0][1]);echo')</font></div></td>
                </tr>
                <tr> 
					<td>';@print_r($competidor27[0][0]);echo' (';@print_r($competidor27[0][2]);echo ')</td>
					<td><div align="right"><font size="1">(';@print_r($competidor27[0][1]);echo')</font></div></td>
                </tr>
            </table>
	  </td>	
		<td width="21" rowspan="3" align="left" valign="middle"> <!-- LINHA1  COLUNA2-->
		<div align="left"><img src="chave2.gif" width="20" height="79"></div>
	</td>
	<td width="20" rowspan="3" align="center" valign="middle"><b>(Luta_23)</b><br>';@print_r(@$luta1competidor13[0][0]);echo' (';@print_r($luta1competidor13[0][2]);echo ')<br>X<br> ';@print_r(@$luta1competidor15[0][0]);echo' (';@print_r($luta1competidor15[0][2]);echo ')</td>
	<td width="50" rowspan="3" align="center" valign="up"> <!-- LINHA1  COLUNA3-->
		<b>(Luta_24)</b><br>';@print_r(@$luta1competidor14[0][0]);echo' (';@print_r($luta1competidor14[0][2]);echo ')<br>X<br>';@print_r(@$luta1competidor16[0][0]);echo' (';@print_r($luta1competidor16[0][2]);echo ')
	</td>
	<td width="21" rowspan="3" valign="middle"><div align="right"><img src="chaveD.gif" width="20" height="79"></div></td>
		
     <td>
          	<table valign=top width="310" class="contChave">
              <tr> 
                <td width="64%" valign="top" style="padding-bottom:5px;">';@print_r($competidor26[0][0]);echo' (';@print_r($competidor26[0][2]);echo ')</td>
                <td width="36%" align="right" valign="top" style="padding-bottom:5px;"><div align="right"><font size="1">(';@print_r($competidor26[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                <b>(Luta_14)</b>	
                <td>';@print_r($competidor28[0][0]);echo' (';@print_r($competidor28[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor28[0][1]);echo')</font></div></td>
              </tr>
            </table>
	</td>
</tr>
<tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr> 
     <td height="62"> 
		<table valign=top width="310" class="contChave">
              <tr> 
                <b>(Luta_15)</b>	
                <td width="64%">';@print_r($competidor29[0][0]);echo' (';@print_r($competidor29[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor29[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor31[0][0]);echo' (';@print_r($competidor31[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor31[0][1]);echo')</font></div></td>
              </tr>
         </table>
	</td>
    <td>
		<table valign=top width="310" class="contChave">
              <tr> 
                <b>(Luta_16)</b>	
                <td width="64%">';@print_r($competidor30[0][0]);echo' (';@print_r($competidor30[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor30[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor32[0][0]);echo' (';@print_r($competidor32[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor32[0][1]);echo')</font></div></td>
              </tr>
          </table>
	</td>
</tr>

</table>';
	
	
	
	//print_r ($competidor);
// formulario para marcar ganhador de luta	de 1 a 8 
 echo '<form class="formuser" method="POST" enctype="multipart/form-data" action="update_chaveamentoab.php?faixa='.$faixa.'&sexo='.$sexo.'" >
								
		<hr>
<table border="0">
	<tr>
				<td class="btn-lg text-center"><p>Vencedor lutas 1 a 16:</p>
							<select name="id_vencedor" id="id_vencedor">
								<option value=""></option>
								<option value="">---- Luta_1 ----</option>
								<option value="'.@$competidor1[0][2].'">';@print_r($competidor1[0][0]); echo'</option>
								<option value="'.@$competidor3[0][2].'">';@print_r($competidor3[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_2 ----</option>
								<option value="'.@$competidor2[0][2].'">';@print_r($competidor2[0][0]); echo'</option>
								<option value="'.@$competidor4[0][2].'">';@print_r($competidor4[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_3 ----</option>
								<option value="'.@$competidor5[0][2].'">';@print_r($competidor5[0][0]); echo'</option>
								<option value="'.@$competidor7[0][2].'">';@print_r($competidor7[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_4 ----</option>
								<option value="'.@$competidor6[0][2].'">';@print_r($competidor6[0][0]); echo'</option>
								<option value="'.@$competidor8[0][2].'">';@print_r($competidor8[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_5 ----</option>
								<option value="'.@$competidor9[0][2].'">';@print_r($competidor9[0][0]); echo'</option>
								<option value="'.@$competidor11[0][2].'">';@print_r($competidor11[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_6 ----</option>
								<option value="'.@$competidor10[0][2].'">';@print_r($competidor10[0][0]); echo'</option>
								<option value="'.@$competidor12[0][2].'">';@print_r($competidor12[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_7 ----</option>
								<option value="'.@$competidor13[0][2].'">';@print_r($competidor13[0][0]); echo'</option>
								<option value="'.@$competidor15[0][2].'">';@print_r($competidor15[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_8 ----</option>
								<option value="'.@$competidor14[0][2].'">';@print_r($competidor14[0][0]); echo'</option>
								<option value="'.@$competidor16[0][2].'">';@print_r($competidor16[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_9 ----</option>
								<option value="'.@$competidor17[0][2].'">';@print_r($competidor17[0][0]); echo'</option>
								<option value="'.@$competidor19[0][2].'">';@print_r($competidor19[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_10 ----</option>
								<option value="'.@$competidor18[0][2].'">';@print_r($competidor18[0][0]); echo'</option>
								<option value="'.@$competidor20[0][2].'">';@print_r($competidor20[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_11 ----</option>
								<option value="'.@$competidor21[0][2].'">';@print_r($competidor21[0][0]); echo'</option>
								<option value="'.@$competidor23[0][2].'">';@print_r($competidor23[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_12 ----</option>
								<option value="'.@$competidor22[0][2].'">';@print_r($competidor22[0][0]); echo'</option>
								<option value="'.@$competidor24[0][2].'">';@print_r($competidor24[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_13 ----</option>
								<option value="'.@$competidor25[0][2].'">';@print_r($competidor25[0][0]); echo'</option>
								<option value="'.@$competidor27[0][2].'">';@print_r($competidor27[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_14 ----</option>
								<option value="'.@$competidor26[0][2].'">';@print_r($competidor26[0][0]); echo'</option>
								<option value="'.@$competidor28[0][2].'">';@print_r($competidor28[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_15 ----</option>
								<option value="'.@$competidor29[0][2].'">';@print_r($competidor29[0][0]); echo'</option>
								<option value="'.@$competidor31[0][2].'">';@print_r($competidor31[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_16 ----</option>
								<option value="'.@$competidor30[0][2].'">';@print_r($competidor30[0][0]); echo'</option>
								<option value="'.@$competidor32[0][2].'">';@print_r($competidor32[0][0]); echo'</option>	
							</select>
							
							
					<br><br><input align="center" type="submit" value="Salvar" class="btn btn-info ">
					</td>
				
			
		</form> 
		<form class="formuser" method="POST" enctype="multipart/form-data" action="update_chaveamento_luta2ab.php?faixa='.$faixa.'&sexo='.$sexo.'" >
				<td class="btn-lg text-center"><p>Vencedor lutas 17 a 24:</p>
				
							<select name="id_vencedor" id="id_vencedor">
								<option value=""></option>
								<option value="">---- Luta_17 ----</option>
								<option value="'.@$luta1competidor1[0][2].'">';@print_r($luta1competidor1[0][0]); echo'</option>
								<option value="'.@$luta1competidor3[0][2].'">';@print_r($luta1competidor3[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_18 ----</option>
								<option value="'.@$luta1competidor2[0][2].'">';@print_r($luta1competidor2[0][0]); echo'</option>
								<option value="'.@$luta1competidor4[0][2].'">';@print_r($luta1competidor4[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_19 ----</option>
								<option value="'.@$luta1competidor5[0][2].'">';@print_r($luta1competidor5[0][0]); echo'</option>
								<option value="'.@$luta1competidor7[0][2].'">';@print_r($luta1competidor7[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_20 ----</option>
								<option value="'.@$luta1competidor6[0][2].'">';@print_r($luta1competidor6[0][0]); echo'</option>
								<option value="'.@$luta1competidor8[0][2].'">';@print_r($luta1competidor8[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_21 ----</option>
								<option value="'.@$luta1competidor9[0][2].'">';@print_r($luta1competidor9[0][0]); echo'</option>
								<option value="'.@$luta1competidor11[0][2].'">';@print_r($luta1competidor11[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_22 ----</option>
								<option value="'.@$luta1competidor10[0][2].'">';@print_r($luta1competidor10[0][0]); echo'</option>
								<option value="'.@$luta1competidor12[0][2].'">';@print_r($luta1competidor12[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_23 ----</option>
								<option value="'.@$luta1competidor13[0][2].'">';@print_r($luta1competidor13[0][0]); echo'</option>
								<option value="'.@$luta1competidor15[0][2].'">';@print_r($luta1competidor15[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_24 ----</option>
								<option value="'.@$luta1competidor14[0][2].'">';@print_r($luta1competidor14[0][0]); echo'</option>
								<option value="'.@$luta1competidor16[0][2].'">';@print_r($luta1competidor16[0][0]); echo'</option>
							

								
							</select>
				
				</br></br><input align="center" type="submit" value="Salvar" class="btn btn-info ">
					
				
			
			
		</form>
		</td>
		
		<form class="formuser" method="POST" enctype="multipart/form-data" action="update_chaveamento_luta3ab.php?faixa='.$faixa.'&sexo='.$sexo.'" >
				<td class="btn-lg text-center"><p>Vencedor lutas 25 a 28:</p>
				
							<select name="id_vencedor" id="id_vencedor">
								<option value=""></option>
								<option value="">---- Luta_25 ----</option>
								<option value="'.@$luta2competidor1[0][2].'">';@print_r($luta2competidor1[0][0]); echo'</option>
								<option value="'.@$luta2competidor3[0][2].'">';@print_r($luta2competidor3[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_26 ----</option>
								<option value="'.@$luta2competidor2[0][2].'">';@print_r($luta2competidor2[0][0]); echo'</option>
								<option value="'.@$luta2competidor4[0][2].'">';@print_r($luta2competidor4[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_27 ----</option>
								<option value="'.@$luta2competidor5[0][2].'">';@print_r($luta2competidor5[0][0]); echo'</option>
								<option value="'.@$luta2competidor7[0][2].'">';@print_r($luta2competidor7[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_28 ----</option>
								<option value="'.@$luta2competidor6[0][2].'">';@print_r($luta2competidor6[0][0]); echo'</option>
								<option value="'.@$luta2competidor8[0][2].'">';@print_r($luta2competidor8[0][0]); echo'</option>
								<option value=""></option>
								
							

								
							</select>
				
				</br></br><input align="center" type="submit" value="Salvar" class="btn btn-info ">
					
				
			
			
		</form>
		</td>
		
		<form class="formuser" method="POST" enctype="multipart/form-data" action="update_chaveamento_luta4ab.php?faixa='.$faixa.'&sexo='.$sexo.'" >
				<td class="btn-lg text-center"><p>Vencedor luta 29 e 30</p>
				
							<select name="id_vencedor" id="id_vencedor">
								<option value=""></option>
								<option value="">---- Luta_29 ----</option>
								<option value="'.@$luta3competidor1[0][2].'">';@print_r($luta3competidor1[0][0]); echo'</option>
								<option value="'.@$luta3competidor3[0][2].'">';@print_r($luta3competidor3[0][0]); echo'</option>
								<option value=""></option>
								<option value="">---- Luta_30 ----</option>
								<option value="'.@$luta3competidor2[0][2].'">';@print_r($luta3competidor2[0][0]); echo'</option>
								<option value="'.@$luta3competidor4[0][2].'">';@print_r($luta3competidor4[0][0]); echo'</option>
								<option value=""></option>
							
								
							

								
							</select>
				
				</br></br><input align="center" type="submit" value="Salvar" class="btn btn-info ">
					
				
			
			
		</form>
		</td>
		
		<form class="formuser" method="POST" enctype="multipart/form-data" action="update_chaveamento_luta5ab.php?faixa='.$faixa.'&sexo='.$sexo.'" >
				<td class="btn-lg text-center"><p>Vencedor luta 31 (FINAL)</p>
				
							<select name="id_vencedor" id="id_vencedor">
								<option value=""></option>
								<option value="">---- Luta_31 ----</option>
								<option value="'.@$luta4competidor1[0][2].'">';@print_r($luta4competidor1[0][0]); echo'</option>
								<option value="'.@$luta4competidor2[0][2].'">';@print_r($luta4competidor2[0][0]); echo'</option>
								
								<option value=""></option>
							
								
							

								
							</select>
				
				</br></br><input align="center" type="submit" value="Salvar" class="btn btn-info ">
					
				
			
			
		</form>
		</td>
		
		</tr>
		</table>'; //fim do form vencedores de 9 a 12

	
?>
</body>
</html>