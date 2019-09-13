<!doctype html>
<?php
//Conexao com banco de dados
include_once("../fun/conexao.php");
date_default_timezone_set('America/Sao_Paulo'); //deixando o servidor em relação a hora
$acesso = strtotime("now");
"<br>"; $agora= strtotime("+ 60 seconds");
 "<br>";
$tempo= ($agora - $acesso);


$cpf = $_GET['cpf']; //usando GET para pegar o cpf de valida.php para usalo para comparação e outros afins
$result_usuario = "SELECT * FROM usuarios WHERE cpf = '$cpf'"; //buscando o cpf no banco de dados
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
// Se o cpf for em branco ou for diferente retorna para index.php
if($cpf=='' OR $resultado==0){
	header ("Location: ../index.php");
	exit;
}
//$datasalva = $_SESSION["ultimoacesso"];
//$agora = date("d-m-Y H:i:s");
//echo $tempo_transcorrido = (strtotime($agora)-strtotime($datasalva));
//compramos o tempo transcorrido

 //echo "Usuario: ". $_SESSION['usuariocpf'];
//if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
//header("Location: ../index.php");
//echo "Sessao tah errado";
//	echo $_SESSION["senha"];
//	exit;
//}

?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SisBJJ</title>

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
                  <div align="center" >	<img src="img/ifsertao.png" width="100%" align="center" > </div>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="../adm/adm.php?cpf=<?php  echo $cpf?>">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <!--<li>
                    <a href="cadastroA.php?cpf=<?php echo  $cpf?>">
                        <i class="pe-7s-user"></i>
                        <p>Editar Perfil</p>
                    </a>
                </li>-->
                <li>
                    <a href="status.php?cpf=<?php  echo $cpf?>">
                        <i class="pe-7s-note2"></i>
                        <p>Usuários Cadastrados</p>
                    </a>
                </li>
                <li>
                    <a href="cadastroF.php?cpf=<?php echo  $cpf?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Cadastrar Usuarios</p>
                    </a>
                </li>
                <li>
                    <a href="form.php?cpf=<?php echo $cpf?>">
                        <i class="pe-7s-search"></i>
                        <p>Competidores</p>
                    </a>
                </li>
                <li>
                    <a href="duvida.php?cpf=<?php echo $cpf?>">
                        <i class="pe-7s-help1"></i>
                        <p>Duvidas</p>
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
                   <!--<a class="navbar-brand" href="#">Menu de superior</a>-->
                </div>
                <div class="collapse navbar-collapse">
         
                   

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Competiçoes
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">2017_2</a></li>
                                <li><a href="#">exemplo</a></li>
                                <li><a href="#">exemplo</a></li>
                                <li><a href="#">exemplo</a></li>
                                <li><a href="#">exemplo</a></li>
                                <li class="divider"></li>
                                <li><a href="#">exemplo</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="sair.php">
                                Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-13">
                        <div class="card">
                            <div class="header">
                      <div class="conteudo" >
			 <div class="texto" >
                    
				 <h1>Gerenciamento de Competições</h1>
                      <p>Esta area é reservada para administradores</p>
                    
              </div><!-- Fim Texto -->
                 <br>
<br>				 
              <div>
				  <div class="section" id="carousel">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
                   <!-- Carousel Card -->
							<h4 align="center"></h4>
						<div class="card card-raised card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="img/3.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> IF-Sertao</h4>
											</div>
										</div>
										<div class="item">
											<img src="img/2.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i>IF-Sertao</h4>
											</div>
										</div>
										
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>
						</div>
						<!-- End Carousel Card -->
				   			</div>
					</div>
					</div>
					</div>

				   <br>
				   <br>
              </div><!-- Fim foto -->
              </div><!-- Fim conteudo -->

                                    
                                    
                                </div>
                            </div>
                        </div>
						
                    </div>
                </div>



             
                            </div>
                        </div>
         

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="">
                                Sistema de competição BJJ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2017, Desenvolvido <a href="https://google.com" target="_blank">Andre L.</a>
                </p>
            </div>
        </footer>

    </div>
</div>


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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-build',
            	message: "Bem Vindo ao Modo ADMINISTRADOR!! <b>Sistema-Beta</b> - Aproveite."

            },{
                type: 'info',
                timer: 3
            });

    	});
	</script>

</html>
