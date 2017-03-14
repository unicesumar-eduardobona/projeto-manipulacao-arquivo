<?php

	include "../includes/conexao.php";

	$id = $_GET['id'];

	$sql = "DELETE FROM usuario where id = " . $id;
	$query = mysqli_query($conexao, $sql);

	if($query){
		header("location: usuario.php?mensagem=sucesso");
	}else{
		header("location: usuario.php?mensagem=erro");
	}

