<?

$_login = $_GET['login'];
$_senha = $_GET['senha'];


if(($_login=="danilo")and($_senha=="1234")){
	header("Location: inicio.html");

}else{
	header("Location: index.html");

}




?>