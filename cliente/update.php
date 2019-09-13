
<?php
//Conexao com o banco de dados
	
	include_once("../fun/conexao.php");
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];	
	$peso =	$_POST['peso'];
	$equipe = $_POST['equipe'];
	$faixa = $_POST['faixa'];
	$competir = $_POST['competir'];

	//$categoriapeso = $_POST['categoriapeso'];	
// Pegando a imagem e enviando para arquivos temporarios para depois mover para pasta de imagens
	$_FILES['arquivo']['name'] = "$cpf.jpg";
$destino = 'imagens/' . $_FILES['arquivo']['name'];
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 move_uploaded_file( $arquivo_tmp, $destino  );

$m= "Masculino";
$f= "Feminino";
$b="BRANCA";
$r=	"ROXA";
$m= "MARROM";
$a= "AZUL";
$p= "PRETA";
//PRÉ-Mírim	
if($idade==5){
	$categoriaida ="PRÉ-Mírim-1" ;
	$categoriapeso = "Sem Categoria";
	if($peso <=14.6) {
	$categoriapeso = "Galo";
	}elseif($peso >=0 and $peso <=14.7) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=14.8 and $peso <=18) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=18.1 and $peso <=21) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=21.1 and $peso <=24) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=24.1 and $peso <=27) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=27.1 and $peso <=30) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=30.1 and $peso <=33) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=33.1 and $peso<=500){
	
	$categoriapeso = "Pesadissimo";
}
}
if($idade==6){
	$categoriaida ="PRÉ-Mírim-2" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=10) {
	$categoriapeso = "Galo";
	}elseif($peso >=10.1 and $peso <=17.99) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=18 and $peso <=20) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=20.1 and $peso <=24) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=24.1 and $peso <=26) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=26.1 and $peso <=29) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=29.1 and $peso <=32) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=32.1 and $peso <=35) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=35.1 and $peso <=500){
	
	$categoriapeso = "Pesadissimo";
	}
}
if($idade==7){
	$categoriaida ="PRÉ-Mírim-3" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=10) {
	$categoriapeso = "Galo";
	}elseif($peso >=0 and $peso <=18.99) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=19 and $peso <=22) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=22.1 and $peso <=25) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=25.1 and $peso <=28) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=28.1 and $peso <=31.2) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=31.3 and $peso <=34.2) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=34.3 and $peso <=37.2) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=37.3 and $peso <=500){
	
	$categoriapeso = "Pesadissimo";
	}
}
//Mírim
if($idade==8){
	$categoriaida ="Mírim-1" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=17 and $peso <=18) {
	$categoriapeso = "Galo";
	}elseif($peso >=0 and $peso <=21) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=21.1 and $peso <=24) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=24.1 and $peso <=27) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=27.1 and $peso <=30.2) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=30.3 and $peso <=33.2) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=33.3 and $peso <=36.2) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=36.3 and $peso <=39.3) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=39.4 and $peso <=500) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
if($idade==9){
	$categoriaida ="Mírim-2" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=17 and $peso <=18) {
	$categoriapeso = "Galo";
	}elseif($peso >=0 and $peso <=24) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=24.1 and $peso <=27) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=27.1 and $peso <=30.2) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=30.3 and $peso <=33.2) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=33.3 and $peso <=36.2) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=36.3 and $peso <=39.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=39.4 and $peso <=42.3) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=42.4 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
if($idade==10){
	$categoriaida ="Mírim-3" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=17 and $peso <=18) {
	$categoriapeso = "Galo";
	}elseif($peso >=0 and $peso <=27) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=27.1 and $peso <=30.2) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=30.3 and $peso <=33.2) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=33.3 and $peso <=36.2) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=36.3 and $peso <=39.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=39.3 and $peso <=42.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=42.4 and $peso <=45.3) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=45.4 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
//Infantil
if($idade==11){
	$categoriaida ="Infantil-1" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=27) {
	$categoriapeso = "Galo";
	}elseif($peso >=27.1 and $peso <=30.2) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=30.3 and $peso <=33.2) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=33.3 and $peso <=36.2) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=36.3 and $peso <=39.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=39.4 and $peso <=42.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=42.4 and $peso <=45.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=45.4 and $peso <=48.3) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=48.4 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
if($idade==12){
	$categoriaida ="Infantil-2" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=30.2) {
	$categoriapeso = "Galo";
	}elseif($peso >=30.3 and $peso <=33.2) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=33.3 and $peso <=36.2) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=36.3 and $peso <=39.3) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=39.4 and $peso <=42.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=42.4 and $peso <=45.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=45.4 and $peso <=48.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=48.4 and $peso <=51.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=51.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
if($idade==13){
	$categoriaida ="Infantil-3" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=31.4) {
	$categoriapeso = "Galo";
	}elseif($peso >=31.5 and $peso <=36.2) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=36.3 and $peso <=40.3) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=40.4 and $peso <=44.3) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=44.4 and $peso <=48.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=48.4 and $peso <=52.5) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=52.6 and $peso <=56.5) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=56.6 and $peso <=60.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=60.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
//Infanto Juvenil
if($idade==14){
	$categoriaida ="Infatil Juvenil-1" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=36.2) {
	$categoriapeso = "Galo";
	}elseif($peso >=36.3 and $peso <=40.3) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=40.4 and $peso <=44.3) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=44.4 and $peso <=48.3) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=48.4 and $peso <=52.5) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=52.6 and $peso <=56.5) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=56.6 and $peso <=60.5) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=60.6 and $peso <=65) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=65.1 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
if($idade==15){
	$categoriaida ="Infantil Juvenil-2" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=40.3) {
	$categoriapeso = "Galo";
	}elseif($peso >=40.4 and $peso <=44.3) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=44.4 and $peso <=48.3) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=48.4 and $peso <=52.5) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=52.6 and $peso <=56.5) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=56.6 and $peso <=60.5) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=60.6 and $peso <=65) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=65.1 and $peso <=69) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=69.1 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
if($idade==16){
	$categoriaida ="Infantil Juvenil-3" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=44.3) {
	$categoriapeso = "Galo";
	}elseif($peso >=44.4 and $peso <=48.3) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=48.4 and $peso <=52.5) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=52.6 and $peso <=56.5) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=56.6 and $peso <=60.5) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=60.6 and $peso <=65) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=65.1 and $peso <=69) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=69.1 and $peso <=73) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=73.1 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
//Juvenil
if($idade==17){
	$categoriaida ="Juvenil-1" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=48.5) {
	$categoriapeso = "Galo";
	}elseif($peso >=48.6 and $peso <=53.5) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=53.6 and $peso <=58.5) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=58.6 and $peso <=64) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=64.1 and $peso <=69) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=69.1 and $peso <=74) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=74.1 and $peso <=79.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=79.5 and $peso <=84.3) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=84.4 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
if($idade==18){
	$categoriaida ="Juvenil-2" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=53.5) {
	$categoriapeso = "Galo";
	}elseif($peso >=53.6 and $peso <=58.5) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=58.6 and $peso <=64) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=64.2 and $peso <=69) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=69.1 and $peso <=74) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=74.1 and $peso <=79.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=79.4 and $peso <=84.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=84.4 and $peso <=89.3) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=89.4 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}	
//Adulto
if($idade>=19 and $idade<=30){
	$categoriaida ="Adult" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=57.5) {
	$categoriapeso = "Galo";
	}elseif($peso >=57.6 and $peso <=64) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=64.1 and $peso <=70) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=70.1 and $peso <=76) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=76.1 and $peso <=82.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=82.4 and $peso <=88.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=88.4 and $peso <=94.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=94.4 and $peso <=100.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=100.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}	
}
//Master I
if($idade>=31 and $idade<=36){
	$categoriaida ="Master I" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=57.5 ) {
	$categoriapeso = "Galo";
	}elseif($peso >=57.6 and $peso <=64) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=64.1 and $peso <=70) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=70.1 and $peso <=76) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=76.1 and $peso <=82.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=82.4 and $peso <=88.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=88.4 and $peso <=94.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=94.4 and $peso <=100.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=100.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}
}
//Master II
if($idade>=37 and $idade<=41){
	$categoriaida ="Master II" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=57.5 ) {
	$categoriapeso = "Galo";
	}elseif($peso >=57.6 and $peso <=64) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=64.1 and $peso <=70) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=70.1 and $peso <=76) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=76.1 and $peso <=82.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=82.4 and $peso <=88.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=88.4 and $peso <=94.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=94.4 and $peso <=100.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=100.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}
}

//Master III
if($idade>=42 and $idade<=46){
	$categoriaida ="Master III" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=57.5 ) {
	$categoriapeso = "Galo";
	}elseif($peso >=57.6 and $peso <=64) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=64.1 and $peso <=70) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=70.1 and $peso <=76) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=76.1 and $peso <=82.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=82.4 and $peso <=88.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=88.4 and $peso <=94.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=94.4 and $peso <=100.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=100.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}
}

//Master IV
if($idade>=47 and $idade<=51){
	$categoriaida ="Master IV" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=57.5 ) {
	$categoriapeso = "Galo";
	}elseif($peso >=57.6 and $peso <=64) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=64.1 and $peso <=70) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=70.1 and $peso <=76) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=76.1 and $peso <=82.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=82.4 and $peso <=88.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=88.4 and $peso <=94.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=94.4 and $peso <=100.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=100.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}
}

//Master V
if($idade>=52 and $idade<=56){
	$categoriaida ="Master V" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=57.5 ) {
	$categoriapeso = "Galo";
	}elseif($peso >=57.6 and $peso <=64) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=64.1 and $peso <=70) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=70.1 and $peso <=76) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=76.1 and $peso <=82.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=82.4 and $peso <=88.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=88.4 and $peso <=94.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=94.4 and $peso <=100.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=100.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}
}

//Master VI
if($idade>=57 and $idade<=70){
	$categoriaida ="Master VI" ;
	$categoriapeso = "Sem Categoria";
	if($peso >=0 and $peso <=57.5 ) {
	$categoriapeso = "Galo";
	}elseif($peso >=57.6 and $peso <=64) {
	
	$categoriapeso = "Pluma";
	}elseif($peso >=64.1 and $peso <=70) {
	
	$categoriapeso = "Pena";
	}elseif($peso >=70.1 and $peso <=76) {
	
	$categoriapeso = "Leve";
	}elseif($peso >=76.1 and $peso <=82.3) {
	
	$categoriapeso = "Medio";
	}elseif($peso >=82.4 and $peso <=88.3) {
	
	$categoriapeso = "Meio Pesado";
	}elseif($peso >=88.4 and $peso <=94.3) {
	
	$categoriapeso = "Pesado";
	}elseif($peso >=94.4 and $peso <=100.5) {
	
	$categoriapeso = "Super Pesado";
	}elseif($peso >=100.6 and $peso <=5000) {
	
	$categoriapeso = "Pesadissimo";
	}
}
//Fim


//Dando update no banco de dados
  $result_usuario = ("UPDATE usuarios SET nome='$nome', sexo='$sexo', idade='$idade', peso='$peso', equipe='$equipe', faixa='$faixa', categoriaida='$categoriaida', categoriapeso='$categoriapeso',competir='$competir' WHERE cpf=$cpf");
 $resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn) != 0){
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=status.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroF.php?cpf=$cpf'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>