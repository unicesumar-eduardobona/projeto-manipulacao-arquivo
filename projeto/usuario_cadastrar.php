<?php

	include "../includes/conexao.php";

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$assuntos = $_POST["assuntos"];
	$assuntos_string = implode(", ", $assuntos);

	echo $sql = "INSERT INTO usuario (nome, email, assuntos) 
		VALUES ('$nome', '$email', '$assuntos_string')
	";


	$query = mysqli_query($conexao, $sql);

	if($query){
		header("location: usuario.php?mensagem=sucesso");
	}else{
		header("location: usuario.php?mensagem=erro");
	}

