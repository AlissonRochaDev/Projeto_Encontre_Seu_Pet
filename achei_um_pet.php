<?php

    require_once 'Class/BuscaoPet.php';

    if(isset($_POST['btnCadastrar'])){
        $tipo_pet = $_POST['tipo_pet'];
        $porte_pet = $_POST['porte_pet'];
        $img_pet = $_POST['img_pet'];
        $data_hora = $_POST['data_hora'];
        $info = trim($_POST['info']);

        $objClass = new BuscaoPet();
        $retorno = $objClass->CadastrarPet($tipo_pet, $porte_pet, $img_pet, $data_hora, $info);
    }

    $msg = '';

    if(isset($retorno)){
        switch($retorno){
            case 0:
                $msg = '<span class="color-msg-vazio">Preencher os campos obrigatórios!</span>';
            break;

            case 1:
                $msg = '<span class="color-msg-ok">Formulário enviado com sucesso!</span>';
            break;

            case -1:
                $msg = '<span class="color-msg-error">Houve uma falha, tente novamente mais tarde!</span>';
            break;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once './includes/_head.php'; ?>
    <title>Achei um Pet!</title>
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

    <main>
        <h1>Selecione o Animal:</h1>

        <div class="align-msg">
            <?= $msg ?>
        </div>

        <section class="boxForm">
            <form action="achei_um_pet.php" method="POST">
                <label>Selecione o Tipo do Pet:</label>
                <select name="tipo_pet">
                    <option value="">Selecione</option>
                    <option value="1">Gato</option>
                    <option value="2">Cachorro</option>
                </select>

                <label>Selecione o Porte do Pet:</label>
                <select name="porte_pet">
                    <option value="">Selecione</option>
                    <option value="1">Pequeno</option>
                    <option value="2">Médio</option>
                    <option value="3">Grande</option>
                    <option value="0">Não sei</option>
                </select>

                <label>Carregar foto do Pet:</label>
                <input type="file" name="img_pet">

                <label>Quando achou o Pet?</label>
                <input type="datetime-local" name="data_hora">


                <label>Descreva qual região você o encontrou:</label>
                <textarea name="info" rows="5" placeholder="Digite aqui..."></textarea>

                <button name="btnCadastrar" class="btnCadastrar">Cadastrar</button>
            </form>
        </section>
    </main>

    <!-- Rodapé da Página Web! -->
    <?php include_once './includes/_footer.php'; ?>
</body>
</html>