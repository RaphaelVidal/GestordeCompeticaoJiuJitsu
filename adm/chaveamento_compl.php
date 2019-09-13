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
	    
       
    
    $faixa = $_POST['faixa'];
	$categoriapeso = $_POST['categoriapeso'];
	$sexo = $_POST['sexo'];
	$categoriaida = $_POST['categoriaida'];
	$sql = "SELECT id,nome,equipe,cpf FROM usuarios WHERE faixa='$faixa' and categoriaida='$categoriaida' and categoriapeso='$categoriapeso' and sexo='$sexo' and niveis_acesso_id=0 ";
	$dados = mysqli_query($conn, $sql); //os dados são armazenados 
	$i=0;
	$j=0;//usada para pegar os competidores
	
	
	
			echo "
			<table border='1' class='table'>
			<thead>
			
			<tr align='center' >
				<td colspan='4'><h1>Tabela</h1></td>
				
			</tr>
        <tr>
			
            <th class='text-center' colspan='4'><h2>$faixa  -  $categoriaida  - $categoriapeso  - $sexo</h2></th>
            
            
            
			
			
         </tr>
    </thead>
        <tr>
		<tbody>";
		

		/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
	while($linha = mysqli_fetch_array($dados)){
	 $i=$i+1;//$linha['nome'] é $linha e 'coluna'
	 if($i==1 or $i==2)$cor='red';
	 if($i==3 or $i==4)$cor='blue';
	 if($i==5 or $i==6)$cor='Gray';
	 if($i==7 or $i==8)$cor='Yellow';
	 if($i==9 or $i==10)$cor='green';
	 if($i==11 or $i==12)$cor='silver';
	 if($i==13 or $i==14)$cor='gold';
	 if($i==15 or $i==16)$cor='brown';
	 //print_r($linha);
	//var_dump($linha);
	//print_r ($dados);
	
	 //echo '</br></br>';
	 /*foreach (array_keys($linha) as $index => $key) {
    echo $linha[$key] . "\n";
}*/
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
				  
					);
	};

    
}

		" 
			<tr>
         
		 <td class='text-center'><font color='$cor'>". $linha['nome']." (".$linha['id'].")</font></td> 
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			
    </tr>
	";
	/*echo '<table valign=top width="310" class="" border="1">
				  <tr> 
						<td width="64%" style="padding-top:5px;" bgcolor='.$cor.'>'. $linha['nome'].'<font size="1" valign="top">('. $linha['equipe'].')</font></td>
						
				  			
					
				  ';*/
							
						
			
	 	
	

		
	}
	//print_r($competidor1[0][0]);echo" <font align='right'>(";print_r($competidor1[0][1]);echo")</font>";
	//var_dump($competidor1);
	//var_dump($competidor2);
	//var_dump($competidor4);
	//var_dump($competidor5);
	
	
	
	echo '
	   <table width="747" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr> 
			 <td width="360">
			  
				<table valign=top width="310" class="contChave" border="0">
				  <tr> 
						<td width="64%" style="padding-top:5px;"> 
						  ';@print_r(@$competidor1[0][0]);echo' (';@print_r($competidor1[0][2]);echo ')</td>
						<td width="36%" style="padding-top:5px;"><div align="right"><font size="1">(';@print_r($competidor1[0][1]);echo')</font></div></td>
				  </tr>
				  <tr> 
						<td> 
						  ';@print_r(@$competidor2[0][0]);echo' (';@print_r($competidor2[0][2]);echo ')</td>
						<td><div align="right"><font size="1">(';@print_r($competidor2[0][1]);echo')</font></div></td>
				  </tr>
				</table>            
			 </td>
			 <td width="21" rowspan="3" align="left" valign="middle"><div align="left"><img src="chave2.gif" width="20" height="79"></div></td>
			 
			 <td width="20" rowspan="7" align="left" valign="middle"><img src="chaveE.gif" width="20" height="170"></td>
			 <td width="24" rowspan="12"><div align="left">__</div></td>
			 <td width="12" rowspan="12"><br> <br> <br>&nbsp;&nbsp; </td>
			 <td width="24" rowspan="12"><div align="right">__</div></td>
			 <td width="21" rowspan="7" valign="middle"><div align="right"><img src="chaveD.gif" width="20" height="170"></div></td>
			 <td width="21" rowspan="3" valign="middle"><div align="right"><img src="chaveD.gif" width="20" height="79"></div></td>
			 <td width="310"><table width="310" class="contChave" valign=top>
		<tr> 
					
			 <td width="64%">';@print_r($competidor3[0][0]);echo' (';@print_r($competidor3[0][2]);echo ')</td>
			 <td width="36%"><div align="right"><font size="1">(';@print_r($competidor3[0][1]);echo')</font></div></td>
		</tr>
		<tr> 
					
			 <td>';print_r(@$competidor4[0][0]);echo' (';@print_r($competidor4[0][2]);echo ')</td>
			 <td><div align="right"><font size="1">(';@print_r($competidor4[0][1]);echo')</font></div></td>
		</tr>
    </table>
			</td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><table valign=top width="310" class="contChave">
              <tr> 
                <td width="64%"> 
                 ';@print_r($competidor5[0][0]);echo' (';@print_r($competidor5[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor5[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor6[0][0]);echo' (';@print_r($competidor6[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor6[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
          <td><table valign=top width="310" class="contChave">
              <tr> 
                
                <td width="64%">';@print_r($competidor7[0][0]);echo' (';@print_r($competidor7[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor7[0][1]);echo')</font></div></td>
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
          <td><table valign=top width="310" class="contChave">
              <tr> 
                
                <td width="64%">';@print_r($competidor9[0][0]);echo' (';@print_r($competidor9[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor9[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor10[0][0]);echo' (';@print_r($competidor10[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor10[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
          <td rowspan="3" align="left" valign="middle"> <div align="left"><img src="chave2.gif" width="20" height="79"></div></td>
          <td rowspan="3" valign="middle"><div align="right"><img src="chaveD.gif" width="20"
height="79"></div></td>
          <td>
          	<table valign=top width="310" class="contChave">
              <tr> 
                
                <td width="64%" valign="top" style="padding-bottom:5px;">';@print_r($competidor11[0][0]);echo' (';@print_r($competidor11[0][2]);echo ')</td>
                <td width="36%" align="right" valign="top" style="padding-bottom:5px;"><div align="right"><font size="1">(';@print_r($competidor11[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
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
                
                <td width="64%">';@print_r($competidor13[0][0]);echo' (';@print_r($competidor13[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor13[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor14[0][0]);echo' (';@print_r($competidor14[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor14[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
          <td><table valign=top width="310" class="contChave">
              <tr> 
                
                <td width="64%">';@print_r($competidor15[0][0]);echo' (';@print_r($competidor15[0][2]);echo ')</td>
                <td width="36%"><div align="right"><font size="1">(';@print_r($competidor15[0][1]);echo')</font></div></td>
              </tr>
              <tr> 
                
                <td>';@print_r($competidor16[0][0]);echo' (';@print_r($competidor16[0][2]);echo ')</td>
                <td><div align="right"><font size="1">(';@print_r($competidor16[0][1]);echo')</font></div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td class="rodape">&nbsp;</td>
  </tr>
	</table>';
	
	
	
	//print_r ($competidor);
	
 

 
?>
</body>
</html>