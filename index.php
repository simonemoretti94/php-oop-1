<?php include_once __DIR__ . '/parts/header.php' ?>

<main>
    <div class="container">
        <?php include_once __DIR__ . '/db.php' ?>

        <div class="row justify-content-evenly  ">
            <?php foreach ($movies as $movie) : ?>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column align-items-center">
                    <?php echo "<p>Genere: "; ?>
                    <?php foreach ($movie->genre as  $genre) {
                        echo $genre . "</p>";
                    } ?>
                    <p>Adulti: <?php echo ($movie->adult ? 'Sì' : 'No') ?></p>
                    <p>Lingua originale: <?php echo $movie->original_language ?></p>
                    <p>Titolo originale: <?php echo $movie->original_title ?></p>
                    <p>Voto medio: <?php echo round($movie->vote_average) ?></p>
                    <p>Età minima consentita: <?php echo $movie->min_age_allowed ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <div class="container mt-2">
        <div class="row justify-content-evenly">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column">
                    <? var_dump($movie); ?>
                </div>
            <?php endforeach; ?>
        </div>
</main>


<?php include_once __DIR__ . '/parts/footer.php' ?>