<?php

include '../classes/Diretorio.php';

if (isset($_GET["arquivo"])) {
	$nome_arquivo = "../uploads/" . $_GET["arquivo"];

	$diretorio = new Diretorio();
	if (file_exists($nome_arquivo)) {
		$diretorio->excluirArquivo($nome_arquivo);
	}
}

header ('location: index.php');

?>