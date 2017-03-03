<?php

interface DiretorioInterface
{
    public function recuperarListaArquivos();
    public function excluirArquivo($nome_arquivo);
    public function cadastrarArquivo($arquivo);
}

class Diretorio implements DiretorioInterface
{
    public function recuperarListaArquivos()
    {
    	// este código precisa se tornar dinâmico
	    // com base nos arquivos que a pasta uploads possui
	    // não deixar assim
    	$array = array('image1.jpg', 'image2.jpg', 'arquivo_nao_existe.jpg');

	    return $array;
    }

    public function excluirArquivo($nome_arquivo)
    {
    	// o retorno true deverá ser feito caso o arquivo seja excluído
		return true;
    }

    public function cadastrarArquivo($arquivo)
    {
    	// criar código
    }
}

?>