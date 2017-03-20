<?php

interface DiretorioInterface
{
    public function recuperarListaArquivos();
    public function excluirArquivo($nome_arquivo);
    public function cadastrarArquivo($arquivo);
}

class Diretorio implements DiretorioInterface
{
	public $diretorio = "../uploads";

    public function recuperarListaArquivos()
    {
	    $arquivos = scandir($this->diretorio);
	    return $arquivos;
    }

    public function excluirArquivo($nome_arquivo)
    {
	    $nome_arquivo = $this->diretorio . "/" . $nome_arquivo;
	    if (file_exists($nome_arquivo)) {
		    unlink($nome_arquivo);
		    return true;
	    }else{
	    	return false;
	    }
    }

    public function cadastrarArquivo($arquivo)
    {
    	// criar código
    }
}

?>