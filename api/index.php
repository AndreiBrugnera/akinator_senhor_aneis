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
        <link href="style.css" rel="stylesheet" />
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