<?php

interface DiretorioInterface
{
    public function recuperarListaArquivos(){}
    public function excluirArquivo($nome_arquivo){}
    public function cadastrarArquivo($arquivo){}
    /**
     * se precisra pode construir mais métodos 
     * ou até mesmo dar manutenção nesta interface
     */
}

class Diretorio implements DiretorioInterface
{

}

?>