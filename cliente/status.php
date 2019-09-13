<!doctype html>
<?php
//conexao com o banco de dados
include_once("../fun/conexao.php");
 $cpf = $_GET['cpf'];//usando GET para pegar o cpf de valida.php para usalo para comparação e outros afins
$result_usuario = "SELECT * FROM usuarios WHERE cpf = '$cpf'"; //buscando o cpf no banco de dados
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
// Se o cpf for em branco ou for diferente retorna para index.php
if($cpf=='' OR $resultado==0){
header ("Location: ../index.php");
exit;
}
// Selecionar imagem dp BD onde o cpf é igual ao cpf que estamos pegando em GET
$resultado = ("SELECT * FROM usuarios WHERE cpf LIKE '".$cpf."';");
$status = mysqli_query($conn, $resultado);
$numrow = mysqli_num_rows($status);
//Variavel linha que vai pegar todo os outros dandos da linha onde se encontra o determinado cpf
$linha=mysqli_fetch_array($status);
// Maneira que transformamos a imagens em jpg 
$foto = "$cpf .jpg";
$roxa="ROXA";
$branca="BRANCA";
$marrom="MARROM";
$azul="AZUL";
$preto="PRETA";
$cor = $linha['faixa'];


?>

<style media="print">
.botao {
display: none;
}
</style>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $titulo ?></title>

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
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.google.com" class="simple-text">
                  <div align="center">	<img src="img/ifsertao.png"  width="100%" align="center" > </div>
                </a>
            </div>

           <ul class="nav">
               <li >
                    <a href="cadastroF.php?cpf=<?php echo  $cpf?>">
                        <i class="pe-7s-user"></i>
                        <p>1 - Inscrição</p>
                    </a>
                </li>
                <li class="active">
                    <a href="status.php?cpf=<?php  echo $cpf?>">
                        <i class="pe-7s-note2"></i>
                        <p>2 - Status</p>
                    </a>
                </li>
				  <li>
                    <a href="pagamento.php?cpf=<?php  echo $cpf?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>3 - Pagamento</p>
                    </a>
                </li>
				 <li >
                     <p><hr></p>
                </li>
                <li >
                    <a href="../cliente/conteudo.php?cpf=<?php echo $cpf?>">
                        <i class="pe-7s-graph"></i>
                        <p>Tabela Peso/Idade</p>
                    </a>
                </li>
              
                <li >
                    <a href="duvida.php?cpf=<?php echo $cpf?>">
                        <i class="pe-7s-help1"></i>
                        <p>Como fazer a Inscrição</p>
                    </a>
                </li>
				  
				<li>
                    <a href="sair.php">
                        <i class="pe-7s-power"></i>
                        <p>Sair</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo $autor ?></a>
                </div>
                <div class="collapse navbar-collapse">
         
                   

                    <ul class="nav navbar-nav navbar-right">
                       
                        <li>
                            <a href="sair.php">
                                Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
			
		<br>
		<br>
				<div class="row">
				
					<div class="col-md-8 col-md-offset-1 ">
					
					<div class="card card-signup">
						
							<form class="formuser" method="POST" action="update.php">
								<div class="header header-success btn-lg text-center">
									<h1></h1>
									</div>
			<div align="center">
	
	<img src="img/ifsertao.png" width="40%" align="center" > </div>

	
			<center>	
				<h2>Dados da inscrição</h2>
				<h3>(Imprima e leve no dia da competição)</h3>
			<table id="cad_table" border="1">
				
				<tr>
				<td class="btn-lg text-right" >Foto:</td>
				<td align="center" width="%" height=""><img width="200px" align="center" height="200px" src="imagens/<?php echo $foto;?>" type="text"  name="arquivo"  > </td>
				</tr>
				
				<tr>
				<td class="btn-lg text-right" >Inscr. :</td>
				<td><input type="text" readonly name="cpf" class="txt" size="40"  value="<?php echo $linha['id']; ?> "><br></td><br>
				</tr>
				
				<tr>
				<td class="btn-lg text-right" >CPF :</td>
				<td><input type="text" readonly name="cpf" class="" size="40"  value="<?php echo $cpf ?> "><br></td><br>
				</tr>
				
				<tr>
				<td class="btn-lg text-right">Nome :</td>
				<td><input type="text" readonly name="nome" class="txt" value="<?php echo $linha['nome']; ?>"></td>
				</tr>
			  
				<tr>
				<td class="btn-lg text-right" >Sexo:</td>
				<td><input name="sexo"  type="text" readonly name="sexo" class="txt" value="<?php echo $linha['sexo']; ?>" /> </td>
				</tr>
				
				<tr>  
				<td class="btn-lg text-right">Idade :</td>
				<td><input type="text" readonly name="idade" class="txt" value="<?php echo $linha['idade'];?>"><input type="text" readonly name="idade" class="txt" value="<?php echo $linha['categoriaida'];?>"</td>
				</tr>
				
				<tr>
				<td class="btn-lg text-right" >Peso:</td>
				<td><input type="text" readonly name="peso" class="txt" value="<?php echo $linha['peso'];?>"><input type="text" readonly name="peso" class="txt" value="<?php echo $linha['categoriapeso'];?>"</td>
				</tr>
				
				<tr>
				<td class="btn-lg text-right">Equipe :</td>
				<td><input type="text" readonly name="equipe" class="txt" value="<?php echo $linha['equipe'];?>"></td>
				</tr>
				<tr>
				<td class="btn-lg text-right">Competir :</td>
				<td><input type="text" readonly name="competir" class="txt" value="<?php echo $linha['competir'];?>"></td>
				</tr>
				
				<tr>
				<?php
				if($cor == $roxa){
            		echo "<td class='btn-lg text-right'>Faixa:</td>";
					echo "	<td><input type='text' readonly name='faixa' class='txtroxa' value= ".$linha['faixa']."> </td>";
				
						}elseif($cor == $branca){
								 echo "<td class='btn-lg text-right'>Faixa:</td>";
								 echo "	<td><input type='text'  readonly name='faixa' class='txtbranca' value= ".$linha['faixa']."> </td>";
						}elseif($cor == $preto){
								 echo "<td class='btn-lg text-right'>Faixa:</td>";
								 echo "	<td><input type='text' color='red' readonly name='faixa' class='txtpreto' value= ".$linha['faixa']."> </td>";
						}elseif($cor == $marrom){
								 echo "<td class='btn-lg text-right'>Faixa:</td>";
								 echo "	<td><input type='text' readonly name='faixa' class='txtmarrom' value= ".$linha['faixa']."> </td>";
						}elseif($cor == $azul){
								 echo "<td class='btn-lg text-right'>Faixa:</td>";
								 echo "	<td><input type='text' readonly name='faixa' class='txtazul' value= ".$linha['faixa']."> </td>";
						}else{
								 echo "<td class='btn-lg text-right'>Faixa:</td>";
								 echo "	<td><input type='text' readonly name='faixa' class='txt' value= ".$linha['faixa']."> </td>";
						}
							?>
				</tr>	
				
					<tr>
            <td class='btn-lg text-right'>Peso Oficial:</td>
				<td><input type="text" readonly name="faixa" class="txt" > </td>
       </tr>
				
				<td>
				<input align="center" type="button" class="btn btn-info botao print" name="imprimir" value="Imprimir" onclick="window.print();">
				</td>
				
			</table>
			</form>
				
								
			</center>			
							
							
		
							
							
							
							
						</div>
					</div>
				</div>
			</div>

			
		</div>

    </div>
         

<footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                  
                </p>
            </div>
        </footer>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>



</html>