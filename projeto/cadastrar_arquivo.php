<?php

if(count($_POST) == 0 and count($_FILES) == 0){
	header('location: index.php');
	exit;
}

//var_dump($_POST);
//var_dump($_FILES);

$nome = $_POST["nome"];
$arquivo = $_FILES["arquivo"];

if($arquivo["type"]=="image/png"){
	$extensao=".png";
	$nome_arquivo = $nome . $extensao;
	move_uploaded_file($arquivo["tmp_name"], "../uploads/" . $nome_arquivo);

	header('location: index.php');
	exit;
}else if($arquivo["type"]=="image/jpeg"){
	$extensao=".jpeg";
	$nome_arquivo = $nome . $extensao;

	move_uploaded_file($arquivo["tmp_name"], "../uploads/" . $nome_arquivo);
	header('location: index.php');
	exit;
}else{
	header('location: index.php');
	exit;
}

?>