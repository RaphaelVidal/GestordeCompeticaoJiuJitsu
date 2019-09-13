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
                    <a href="../adm/professor.php?cpf=<?php  echo $cpf?>">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="form_prof.php?cpf=<?php echo $cpf?>">
                        <i class="pe-7s-search"></i>
                        <p>Competidores</p>
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
                      <p>Esta area é reservada para Professores</p>
                    
              </div><!-- Fim Texto -->
                 <br>
<br>				 
              <div>
				  <div class="section" id="carousel">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
                   <div class=WordSection1>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>1-
CONVITE</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>A
equipe <b>Team Wagner Alves/Almeida Kombat</b> em parceria com a <b>coordenação
de lutas do IFSERTÃO</b>, tem o prazer de convidar todos os professores e os
seus respectivos atletas, de todas as agremiações esportivas de Jiu-Jitsu do
Vale do São Francisco e demais regiões, para a <b>Copa IF de Jiujitsu</b>, que
será <b>realizado no dia 26 de novembro (domingo)</b>. Com i<b>nício previsto
para às 08:00 horas</b>, no <b>GINÁSIO DE ESPORTES, DO CAMPUS PETROLINA DO
IFSERTÃO</b>, localizado em no <b>Jardim São Paulo entrada para o bairro João
de Deus em Petrolina-PE</b>. O Evento, tem como objetivo principal, a
confraternização, divulgação e premiação dos melhores competidores de JIU-JITSU
da região.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>2-
DO EVENTO:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>Este
evento é aberto para todas as academias e todos os atletas de Jiu-Jitsu do Vale
do São Francisco e regiões vizinhas, e de todas as categorias de peso (galo a
pesadíssimo), e para as idades do pré-mirim a Masters, e para s as faixas:
branca, cinza, amarela, laranja, verde, azul, roxa. Haverá disputa nas
categorias de pré-mirim a Master, e dos ABSOLUTOS ADULTO  MASCULINO e ABSOLUTOS
ADULTO FEMININO, (a categoria MASTER luta no absoluto adulto). Limitando 16
atletas por categoria. Não há limites de inscrições de atletas por academias.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>3-
DAS INSCRIÇÕES:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>As
inscrições deverão ser feitas exclusivamente através do site oficial do
campeonato, <b><a href="http://copajiujitsu.petrolina.ifsertao-pe.edu.br/">http://copajiujitsu.petrolina.ifsertao-pe.edu.br/</a></b></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>O
pagamento deverá ser feito através de <b>DEPÓSITO EM CONTA</b>, e comprovante <b>ENVIADO 
por meio do site</b>. Observem a data do depósito, até o dia <b>23 de NOVEMBRO</b>.
O pagamento da <b>inscrição não é reembolsável</b>.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>Valor
Inscrição: R$ 30,00 - Valor categoria </span></b></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>Valor
Inscrição: R$ 50,00 - Valor categoria + absoluto </span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>Quem
se inscrever até o dia 23 de NOVEMBRO de 2017, as inscrições deverão ser
confirmadas (pagas) NO MESMO DIA MEDIANTE ENVIO DO COMPROVANTE DE DEPÓSITO ,</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>OBS:
Só poderão se inscrever no Absoluto os atletas, que também foram inscritos na
sua respectiva categoria de peso. Além disso, só disputarão as lutas do
absoluto os atletas que disputarem as suas categorias de peso.</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>Como
as inscrições serão on-line, os nomes dos atletas serão automaticamente
encaminhados para suas respectivas categorias de faixa e peso, podendo a
checagem ser feita durante todo o período aberto para as inscrições. No dia
23/11/2017, às 23:59hrs (horário Brasília) impreterivelmente, encerram-se as
inscrições. Teremos os dias 24 e 25 de novembro de 2017, para checagem final
das inscrições e o para as chaves. Mudanças, só em caso extremo e com
justificativa plausível, pois as inscrições serão feitas (digitadas) pelos
próprios atletas ou seus professores, em sistema on-line, e, portanto, com
menor probabilidade de erros.</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>4-
DAS PREMIAÇÕES:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>Os
atletas do 1º ao 3º lugar <b>(APENAS UM COMPETIDOR EM TERCEIRO)</b>, receberão
medalhas exclusivas do evento. Para os absolutos, além das medalhas,
ofereceremos <b>TROFÉUS E A PROBABILIDADE DE BRINDES EXTRAS</b>, obedecendo aos
seguintes critérios: - Mesmo que se encontrem, no decorrer das lutas, atletas
da mesma academia, os mesmos terão que lutar. Caso estejam na final do
absoluto, atletas da mesma academia estes também terão que lutar. A comissão
técnica e organizadora do evento estará atenta às simulações. Os prêmios não
serão entregues, em hipótese alguma, se não houver uma luta digna de final de
absoluto. Somente com comprovação de problemas médicos, uma luta poderá ser
impedida de ser realizada.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>5-
DA PESAGEM:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>A
pesagem acontecerá com o <b>Kimono+Faixa, NO MOMENTO</b> da 1a luta do horário
estipulado no cronograma para início das disputas das categorias. Aconselhamos
aos competidores estarem presentes MEIA HORA antes do início DAS LUTAS E da
pesagem de suas categorias. Todos os atletas <b>JUVENIL/ADULTO/MASTER</b>
deverão portar um documento de identidade oficial com foto <b>(Ex: RG, CNH, PASSAPORTE,
CARTEIRA DE TRABALHO) E O COMPROVANTE DE INSCRIÇÃO GERADO PELO SISTEMA</b>, na
hora da pesagem. Lembrem-se: A idade é contada pelo ano de nascimento. O atleta
perderá a luta automaticamente caso não bata o peso, <b>SALVO</b> o oponente
juntamente com seu professor permitir a luta.</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>6-
DA TABELA DE PESOS:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>Aos
pesos, são os estabelecidos pela Confederação Brasileira de Jiu-Jitsu - CBJJ, e
podem ser visualizadas no site&nbsp;<b><a href="http://www.cbjj.com.br">http://www.cbjj.com.br</a></b>.
As inscrições deverão ser feitas observando os pesos com kimono.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>7-
DAS REGRAS DO EVENTO:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>As
regras de arbitragem são as estabelecidas pela Confederação Brasileira de Jiu-Jitsu
- CBJJ, e podem ser visualizadas no site  <b><a
href="http://www.cbjj.com.br/regras.htm">http://www.cbjj.com.br/regras.htm</a></b></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>8-
DA CHECAGEM DOS NOMES E CHAVES DO EVENTO:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>As
inscrições serão feitas online através do site <a
href="http://copajiujitsu.petrolina.ifsertao-pe.edu.br/">http://copajiujitsu.petrolina.ifsertao-pe.edu.br/</a>
Como todos os nomes de todos os atletas inscritos ficarão disponíveis no site
de inscrições bem como enviados por e-mail aos professores, a checagem poderá
ser feita a qualquer momento e as correções deverão ser feitas por meio de
envio de e-mail copaifjiujitisu@gmail.com ou no próprio site, caso não possa
fazer a alteração, favor encaminhar para o e-mail. Não mandem recados por redes
socias, como: facebook, messenger, whatsapp, pois não levaremos em
consideração. Após o prazo final para comprovação da inscrição, ou seja, para
comprovação do pagamento, as chaves serão geradas, de forma automática,
utilizando-se de sistema informatizado com algoritmo exclusivo para este
evento. Não haverá de forma nenhuma interferência manual na elaboração das
chaves. No dia 25/11/2017 teremos as chaves disponíveis para consulta e caso
ainda persista alguma dúvida ou erro, poderemos fazer a alteração. Não
mudaremos atletas de categoria, peso ou de faixa, salvo com comprovação.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>&nbsp;</span></b></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>9-
DA ASSISTÊNCIA MÉDICA AOS ATLETAS:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>Teremos
no local do evento bombeiros civis para avaliar as condições físicas dos
atletas e para prestar os primeiros socorros que porventura vierem necessitar,
e em casos mais graves acionaremos uma Ambulância (SAMU) para remoção do
atleta. Os atletas que tiverem planos de saúde (e dependendo da gravidade da
situação), poderão ser encaminhados para os hospitais da rede credenciada ao
seu plano dentro da cidade. Caso contrário, serão encaminhados para os
hospitais públicos disponíveis na cidade. A ambulância e os paramédicos
acompanharão o atleta até o hospital e deixarão o mesmo no local acompanhado de
familiares ou de seu professor/responsável pela sua equipe. Em hipótese alguma
a ambulância ficará esperando o atleta ser atendido. O retorno ao evento ou a
locomoção até sua residência ou alojamento será de inteira responsabilidade do
atleta.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>10-
DO ALOJAMENTO PARA OS ATLETAS:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>É
praxe, no Jiu-Jitsu, as academias oferecerem para seus parceiros de luta os
seus tatames para que os atletas possam se alojar. Desta forma, pedimos aos
atletas para que entrem com contato com suas academias, para disponibilizarem
seus espaços para acomodar os atletas que vêm de outras cidades.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>11-
DAS RESPONSABILIDADES:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>Ao
se inscreverem neste evento Copa Jiujitsu, ficam todos cientes de que concordam
e aceitam as condições estabelecidas aqui neste informativo. Além disso a sua
adesão e participação neste evento atesta que suas declarações são verdadeiras.
Autorizam o uso de sua imagem, de seu nome, o som de sua voz, para fins de
divulgação deste e de futuros eventos nos variados meios de comunicação (TV,
Rádio, internet, Jornais e revistas, fotos e filmagens), sem que isso traga
qualquer ônus para a organização do evento, para seus patrocinadores e para os
veículos de comunicação presentes ao evento, em forma de indenização. Ficam os
professores ou chefes de delegações, responsáveis por atestar a saúde física e
mental de seus atletas, no ato da sua inscrição, visto já terem, como manda a
lei, os atestados médicos de seus alunos, que atestam tal situação de saúde e
boa forma.</span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-family:"Times New Roman",serif'>12-
DO CRONOGRAMA DAS LUTAS:</span></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>O
evento terá início às 8:00hrs com abertura do evento na presença de todas as
delegações. As 8:30hrs iniciaremos as lutas. O cronograma completo estará
disponível no site de inscrição http://copajiujitsu.petrolina.ifsertao-pe.edu.br/.</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Times New Roman",serif'>&nbsp;</span></p>

</div>

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
