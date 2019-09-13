<!doctype html>
<?php
//conexao com o banco de dados para verificaçao se o usuario esta logado corretamente
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
// Selecionar usuario no banco de dados para mostrar na tela a lista de todos cadastrados
$resultado_todos = ("SELECT * FROM usuarios where niveis_acesso_id<>0");// sql para busca
$status = mysqli_query($conn, $resultado_todos);// conexao com o banco e sql para busca
$numrow = mysqli_num_rows($status); //guardar quantidade de linhas que foram encontradas

//Variavel linha que vai pegar todo os outros dandos da linha onde se encontra o determinado cpf
//$linha=mysqli_fetch_array($status);

// Maneira que transformamos a imagens em jpg 
$foto = "$cpf .jpg";
/*
for($i=0; $i < $numrow; $i++){ //como são vários usuarios cadastrados é preciso um form para mostrar cada um
$linha=mysqli_fetch_array($status);  //coloca cada usuario(resultado) dentro de um vetor para mostrar na tela
	echo $linha['nome']; //imprime o valor na tela (linha por linha)
}*/

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
                <li class="active">
                    <a href="../adm/adm.php?cpf=<?php echo $cpf?>">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                 <!--<li>
                    <a href="cadastroA.php?cpf=<?php echo  $cpf?>">
                        <i class="pe-7s-user"></i>
                        <p>Editar Perfil</p><?php echo $linha['nome'];?>
                    </a>
                </li>-->
                <li>
                    <a href="status.php?cpf=<?php  echo $cpf?>">
                        <i class="pe-7s-note2"></i>
                        <p>Gerenciamento</p>
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
                        <p>Pesquisa</p>
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
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
         
                   

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Competições
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">exemplo</a></li>
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


        <div class="container">
			
		<br>
		<br>
				<div class="row">
				
					<div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-3">
					
					<div class="card card-signup">
						
							<form class="formuser" method="POST" action="update.php">
								<div class="header header-success btn-lg text-center">
									<h1 center>Gerenciamento de Usuarios (Equipe de organização)</h1> <!-- area que mostra os usuários cadastrados na tela -->
					<table class="table">
    <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nome</th>
            <th class="text-center">função</th>
            <th class="text-left">Ação</th>
        </tr>
    </thead>
					   
    <tbody>
		<tr>
			<td>
					<?php	
						for($i=0; $i < $numrow; $i++){ //como são vários usuarios cadastrados é preciso um form para mostrar cada um
							$linha=mysqli_fetch_array($status);  //coloca cada usuario(resultado) dentro de um vetor para mostrar na tela
							$funcao="";
							if($linha['niveis_acesso_id']==1){ //verifica qual a função do usuário
								$funcao="Admin Sistema";
							} 
							if($linha['niveis_acesso_id']==2){ //verifica qual a função do usuário
								$funcao="Mesário";
							} 
							if($linha['niveis_acesso_id']==3){ //verifica qual a função do usuário
								$funcao="Juiz";
							} 
							if($linha['niveis_acesso_id']==4){ //verifica qual a função do usuário
								$funcao="Placar";
							} 
			        ?>
			 </td>	
		</tr>
        <tr>
            <td class="text-center"><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $funcao;?></td>
            
            <td class="td-actions text-left">
                <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-user"></i>
                </button>
                <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </button>
                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                </button>
            </td>
        </tr>
		<?php } ?> <!-- fim do for-->
    </tbody>
</table>
		    	
							
							<br>
							<br>
							<br>
							<br>
							
							
							
							
						</div>
					</div>
				</div>
			</div>

			
		</div>

    </div>
         
<div>
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



</html>
