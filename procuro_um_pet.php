<?php

    require_once 'Class/BuscaoPet.php';

    // Objeto Global!
    $objClass = new BuscaoPet();

    $animais = $objClass->ConsultarPet();

    // echo '<pre>';
    // var_dump($animais);
    // echo '</pre>';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once './includes/_head.php'; ?>
    <title>Procuro um Pet!</title>
</head>
<body>
    <header>
        <section>
            <div class="boxAnimais">
                <div class="gato">
                    <img src="img/icone_gato.png" alt="Gato!" title="Gato!" class="icone-gato">
                    <span class="textAnimal">GATO!</span>
                </div>

                <div class="cachorro">
                    <img src="img/icone_cachorro.png" alt="Cachorro!" title="Cachorro!" class="icone-cachorro">
                    <span class="textAnimal">CACHORRO!</span>
                </div>
            </div>

            <div>
                <a href="index.php" class="link-voltar">Voltar ao Início!</a>
            </div>            
        </section>
    </header>

    <main id="body-procura">
        <h1>Veja todos os Pets cadastrados em nossa Plataforma:</h1>
        <section class="boxForm">
            <table class="table-pet">
                <tr>
                    <th>Qtds. Cadastrados</th>
                    <th>Tipo do Pet</th>
                    <th>Porte do Pet</th>
                    <th>Foto do Pet</th>
                    <th>Data/Horário</th>
                    <th>Descrição/Situação do Pet</th>
                </tr>
                <?php for($i=0; $i < count($animais); $i++){ ?>
                    <tr>
                        <td><?= $i+1 ?></td>
                        <td><?= $animais[$i]['tipo_pet'] == 1 ? 'Gato' : 'Cachorro' ?></td>
                        <td>
                            <?= $animais[$i]['porte_pet'] == 1 ? 'Pequeno' : '' ?>
                            <?= $animais[$i]['porte_pet'] == 2 ? 'Médio' : '' ?>
                            <?= $animais[$i]['porte_pet'] == 3 ? 'Grande' : '' ?>
                            <?= $animais[$i]['porte_pet'] == 0 ? 'Sem Informação' : '' ?>
                        </td>
                        <td>
                            <img src="img/1_dog.jpg" alt="Achados!" title="Achados!" class="img-animal-search">
                        </td>
                        <td><?= $animais[$i]['data_hora'] ?></td>
                        <td><?= $animais[$i]['descricao'] ?></td>
                    </tr>
                <?php } ?>
            </table> 
        </section>
    </main>

    <!-- Rodapé da Página Web! -->
    <?php include_once './includes/_footer.php'; ?>
</body>
</html>