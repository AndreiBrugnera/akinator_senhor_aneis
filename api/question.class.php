<?php

class question {

    private $pergunta;

    function __construct() {
        $this->pergunta = [
            0 => "O personagem que você pensou é um guerreiro?",
            1 => "Seu personagem morre durante a trilogia de filmes?",
            2 => "Seu personagem é extremamente temperamental?",
            3 => "Seu personagem envelhece?",
            4 => "O personagem que você pensou é um mago?",
            5 => "Seu personagem terminar sua vida morando no condado?",
            6 => "Seu personagem se torna prefeito?",
        ];
    }

    function getPergunta($index) {
        return $this->pergunta[$index];
    }

    function InputOpcao($Cont) {
        $Cont += 1;
        echo '<span class="form cf">
        <section class="plan cf">
            <input type="radio" name="SN" id="s" value="1" required><label class="free-label four col" for="s">Sim</label>
            <input type="radio" name="SN" id="n" value="0"><label class="basic-label four col" for="n">Não</label>
        </section></span>
    <input type="hidden" name="Cont" value="' . $Cont . '"/>
    <input class="button enviar" type="submit" name="" value="Próxima" />';
    }

}
