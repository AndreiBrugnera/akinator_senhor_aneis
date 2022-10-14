<?php

class Person {

    public $codigo_personagem;
    public $nome_personagem;
    public $imagem_personagem;

    function __construct($codigo_personagem, $nome_personagem, $imagem_personagem) {
        $this->codigo_personagem = $codigo_personagem;
        $this->nome_personagem = $nome_personagem;
        $this->imagem_personagem = $imagem_personagem;
    }

    function getCodigo_personagem() {
        return $this->codigo_personagem;
    }

    function getNome_personagem() {
        return $this->nome_personagem;
    }

    function getImagem_personagem() {
        return $this->imagem_personagem;
    }

    function setCodigo_personagem($codigo_personagem) {
        $this->codigo_personagem = $codigo_personagem;
    }

    function setNome_personagem($nome_personagem) {
        $this->nome_personagem = $nome_personagem;
    }

    function setImagem_personagem($imagem_personagem) {
        $this->imagem_personagem = $imagem_personagem;
    }

}
