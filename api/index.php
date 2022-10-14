<?php
include 'arvore.class.php';
include 'no.class.php';
include 'person.class.php';
include 'question.class.php';

$no1 = New No(21);
$arvore = New Arvore();
$Read = new question();

$Gandalf = new Person(14, "Gandalf", "gandalf.jpg");
$arvore->inserir($no1, $Gandalf->codigo_personagem);
$Gimli = new Person(28, "Gimli", "gimli.jpg");
$arvore->inserir($no1, $Gimli->codigo_personagem);
$Frodo = new Person(11, "Frodo", "frodo.jpg");
$arvore->inserir($no1, $Frodo->codigo_personagem);
$Sam = new Person(18, "Sam", "sam.jpg");
$arvore->inserir($no1, $Sam->codigo_personagem);
$Aragorn = new Person(25, "Aragorn", "aragorn.jpg");
$arvore->inserir($no1, $Aragorn->codigo_personagem);
$Legolas = new Person(32, "Legolas", "legolas.jpg");
$arvore->inserir($no1, $Legolas->codigo_personagem);
$Merry = new Person(5, "Merry & Pippin", "merry.jpg");
$arvore->inserir($no1, $Merry->codigo_personagem);
$Boromir = new Person(37, "Boromir", "boromir.jpg");
$arvore->inserir($no1, $Boromir->codigo_personagem);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <title>Akinator - Senhor dos Anéis (Árvore Binária)</title>
        <!-- <link href="style.css" rel="stylesheet" /> -->

        <style>
            * {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

body {
    background: url(back2.jpg) no-repeat;
    background-size: 125%;
    background-position: top center;
}

#panel,
.flip {
    font-size: 16px;
    padding: 10px;
    text-align: center;
    /* background-color: #00C7A4; */

    color: #FFF;
    border: solid 1px rgba(255, 255, 255, 0.3);
    margin: auto;
    cursor: pointer;
}

#panel {
    display: none;
    cursor: pointer;
}

.box_content {
    width: 100%;
    margin: 230px auto 0 auto;
    height: 100%;

    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}

.box_content h1 {
    width: 100%;
    color: #FFF;
    text-align: center;
    font-size: 45px;
    margin: 10px 0 40px 0;
}

.box_pergunta {
    width: 100%;
    background: rgba(34, 51, 17, 0.8);
    border-radius: 10px;
    box-shadow: 1px 1px 30px 5px rgba(0, 0, 0, 0.5);
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    min-height: 250px;
    margin-top: -20px;
}

.box_recompensa {
    width: 20%;
    background: #FFF;
    border-radius: 10px;
    box-shadow: 1px 1px 30px 5px rgba(0, 0, 0, 0.5);
    display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 300px;
    margin-left: 20px;
    padding: 20px 0;

    /*display:none;*/
}

.box_recompensa div {
    width: 100%;

}

.box_recompensa div img {
    margin: 0 auto;
    display: block;
    max-width: 15%;
    width: 100%;
}

.box_imagem {
    width: 20%;
    background: #FFF;
    border-radius: 10px;
    box-shadow: 1px 1px 30px 5px rgba(0, 0, 0, 0.5);
    /*    display:flex;
        flex-wrap:nowrap;
        flex-direction: column;
        align-items:center;
        justify-content:center;*/
    min-height: 300px;
    margin-right: 20px;

    display: none;

    position: relative;
}

.box_imagem div {
    width: 100%;

}

.box_imagem div img {

    width: 100%;
    background-size: cover;
    background-position: bottom;
}

.box_pergunta h2 {
    width: 100%;
    text-align: center;
    margin: 20px 0;
    color: rgba(204, 221, 187, 1);
}

.box_pergunta h4 {
    color: rgba(204, 221, 187, 1);
    text-align: center;
    font-size: 22px;

}


.box_pergunta .certa {
    background: #00C7A4;
}

.box_pergunta .errada {
    background: #ff6666;
}

.box_pergunta input {
    margin: 10px 0;
}

.box_pergunta label span {
    padding: 0 10px;
}

#perguntas {
    /*    display:flex;
        flex-direction: column;*/
    padding: 30px 30px;
}

.box_content input[type=submit] {
    width: 25%;
    display: flex;
    justify-content: center;
    margin: 30px auto;
    padding: 15px 10px;
    color: #333;
    font-size: 18px;
    font-weight: bold;
    border-radius: 10px;
    background: #cc8822;
    text-align: center;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

.box_content input[type=submit]:hover {
    box-shadow: 1px 1px 30px 2px rgba(0, 0, 0, 0.5);
}

.box_content a {
    width: 25%;
    display: block;
    margin: 30px auto;
    padding: 15px 10px;
    color: #333;
    font-weight: bold;
    border-radius: 10px;
    background: rgba(204, 136, 34, 1);
    text-align: center;
    text-decoration: none;
}

.box_content a:hover {
    box-shadow: 1px 1px 30px 2px rgba(0, 0, 0, 0.5);
}

.actived {
    color: rgba(204, 136, 34) !important;
    display: block;
    font-size: 30px;
    max-width: 100%;
    text-transform: uppercase;
    margin: 0 auto;
}

.image_actived {
    max-width: 100%;
    width: 450px;
    border-radius: 10px;
    display: block;
    margin: 0 auto;
}

#checkboxes {
    /*display:inline-flex;*/
    position: relative;
}

.form .plan input,
.form .payment-plan input,
.form .payment-type input {
    display: none;
}

.form label {
    position: relative;
    color: #333;
    background-color: #c8c8c8;
    font-size: 20px;
    text-align: center;
    padding: 15px;
    display: block;
    cursor: pointer;
    border: 3px solid transparent;

    border-radius: 10px;
    margin: 20px 0 10px 0;
}

.form .plan input:checked+label:after,
form .payment-plan input:checked+label:after,
.form .payment-type input:checked+label:after {
    content: "\2713";
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 100%;
    border: 2px solid #FFF;
    background-color: rgba(204, 136, 34, 1);
    z-index: 999;
    position: absolute;
    top: -10px;
    right: -10px;
}

.form .plan input:checked+label,
.form .payment-plan input:checked+label,
.form .payment-type input:checked+label {
    border: 3px solid #FFF;
    color: #FFF;
    background-color: rgba(204, 136, 34, 0.8);
}

.submit {
    padding: 15px 60px;
    display: inline-block;
    border: none;
    margin: 20px 0;
    background-color: #2fcc71;
    color: #fff;
    border: 2px solid #333;
    font-size: 18px;
    -webkit-transition: transform 0.3s ease-in-out;
    -o-transition: transform 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out;
}
            </style>
    </head>
    <body>
        <section class="box_content">
            <div class="float">
                <article class="box_pergunta">
                    <aside id="perguntas">            
                        <form action="" method="POST">
                            <?php
                            $Contato = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                            $Cont = - 1;
                            if ($Contato):
                                extract($Contato);
                                $CodPersonagem = 0;
                                switch ($Cont) {
                                    case 0:
                                        echo "<h2>" . $Read->getPergunta($Cont) . "</h2>";
                                        $Read->InputOpcao($Cont);
                                        break;
                                    case 1:
                                        if ($SN == 1):
                                            echo "<h2>" . $Read->getPergunta(1) . "</h2>";
                                            $Read->InputOpcao($Cont);
                                        elseif ($SN == 0):
                                            $Cont = 4;
                                            echo "<h2>" . $Read->getPergunta(4) . "</h2>";
                                            $Read->InputOpcao($Cont);
                                        endif;
                                        break;
                                    case 2:
                                        if ($SN == 1):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Boromir->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Boromir->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        elseif ($SN == 0):
                                            echo "<h2>" . $Read->getPergunta(2) . "</h2>";
                                            $Read->InputOpcao($Cont);
                                        endif;
                                        break;
                                    case 3:
                                        if ($SN == 1):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Gimli->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Gimli->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        elseif ($SN == 0):
                                            echo "<h2>" . $Read->getPergunta(3) . "</h2>";
                                            $Read->InputOpcao($Cont);
                                        endif;
                                        break;
                                    case 4:
                                        if ($SN == 1):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Aragorn->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Aragorn->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        elseif ($SN == 0):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Legolas->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Legolas->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        endif;
                                        break;
                                    case 5:
                                        if ($SN == 1):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Gandalf->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Gandalf->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        elseif ($SN == 0):
                                            echo "<h2>" . $Read->getPergunta(5) . "</h2>";
                                            $Read->InputOpcao($Cont);
                                        endif;
                                        break;
                                    case 6:
                                        if ($SN == 1):
                                            echo "<h2>" . $Read->getPergunta(6) . "</h2>";
                                            $Read->InputOpcao($Cont);
                                        elseif ($SN == 0):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Frodo->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Frodo->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        endif;
                                        break;
                                    case 7:
                                        if ($SN == 1):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Sam->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Sam->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        elseif ($SN == 0):
                                            echo "<h2 class='actived'>O personagem que você pensou é o {$Merry->nome_personagem}</h2>";
                                            echo "<img class='image_actived' src='{$Merry->imagem_personagem}' />";
                                            echo "<a onclick='location.reload()' href='#'>Reiniciar</a>";
                                        endif;
                                        break;
                                    default:
                                        echo "<h2 class='actived'>Fim de Jogo. Não encontramos o personagem que você pensou!</h2>";
                                        break;
                                }
                            else:
                                echo "<h2>Pense em um personagem da Sociedade do Anel.</h2><h4>Pensou?</h4>";
                                ?>
                                <div id="checkboxes">
                                    <span class="form cf">
                                        <section class="plan cf">
                                            <input type="radio" name="SN" id="s" value="1" required><label class="free-label four col" for="s">Sim</label>
                                        </section>
                                    </span>
                                    <input type="hidden" name="Cont" value="<?= $Cont + 1; ?>"/>
                                    <input class="button enviar" type="submit" name="" value="Próxima" />
                                <?php
                                endif;
                                ?>
                            </div>
                        </form>
                    </aside>
                </article>
            </div>
        </section>
    </body>
</html>