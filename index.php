<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once './includes/_head.php'; ?>
    <title>Buscão</title>
</head>
<body>
    <header>
        <h1>Buscão - Procure seu Pet aqui!</h1>
        <h2>Aqui você pode cadastrar um Animalzinho que achou ou procurar algum que perdeu!</h2>
    </header>

    <main>
        <section>
            <div class="btnAchei">
                <a href="achei_um_pet.php" class="btnAcao">
                    ENCONTREI UM PET - 
                    <img src="img/icone_pata.png" alt="Achei um Pet!" title="Achei um Pet!" class="icone">
                </a>
            </div>

            <div class="btnProcuro">
                <a href="procuro_um_pet.php" class="btnAcao">
                    PROCURO MEU PET - 
                    <img src="img/icone_lupa.png" alt="Procure um Pet!" title="Procure um Pet!" class="icone">
                </a>
            </div>
        </section>

        <section>
            <h3>Últimos Pets econtrados:</h3>
            <div class="img-animais">
                <img src="img/1_dog.jpg" alt="Achados!" title="Achados!" class="img-animal-start">
                <img src="img/2_dog.jpg" alt="Achados!" title="Achados!" class="img-animal-start">
                <img src="img/3_gato.jpg" alt="Achados!" title="Achados!" class="img-animal-start">
                <img src="img/1_dog.jpg" alt="Achados!" title="Achados!" class="img-animal-start">
                <img src="img/2_dog.jpg" alt="Achados!" title="Achados!" class="img-animal-start">
                <img src="img/3_gato.jpg" alt="Achados!" title="Achados!" class="img-animal-start">
            </div>
        </section>
    </main>

    <!-- Rodapé da Página Web! -->
    <?php include_once './includes/_footer.php'; ?>
</body>
</html>