<?php

include '../classes/Diretorio.php';
$diretorio = new Diretorio();

if (isset($_GET["arquivo"])) {

	$nome_arquivo = $_GET["arquivo"];

	if($diretorio->excluirArquivo($nome_arquivo)){
		header ('location: index.php?mensagem=sucesso');
	}else{
		header ('location: index.php?mensagem=erro');
	}

}



?>