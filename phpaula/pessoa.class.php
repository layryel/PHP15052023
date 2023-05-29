<?php

class Pessoa{
    private $nome;
    private $telefone;
    private $origem;
    private $datadecont;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getOrigem(){
        return $this->origem;
    }

    public function setOrigem($origem){
        $this->origem = $origem;
    }

    public function getDatadecont(){
        return $this->datadecont;
    }

    public function setDatadecont($datadecont){
        $this->datadecont = $datadecont;
    }

}

?>