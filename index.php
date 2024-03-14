<?php include_once __DIR__ . '/parts/header.php' ?>

<main>
    <div class="container">
        <?php include_once __DIR__ . '/db.php' ?>

        <div class="row justify-content-start pb-3">
            <?php foreach ($movies as $movie) : ?>

                <div id="cards" class="col-lg-4 col-md-6 col-sm-12">

                    <div id="card">
                        <?php echo '<div class="col-6 d-flex justify-content-evenly ">' ?>
                        <?php foreach ($movie->genre as  $genre) {
                            echo "<p class='ms-1'>" . $genre . "</p>";
                        } ?>
                        <?php echo '</div>' ?>
                        <p>Adulti: <?php echo ($movie->adult ? 'Sì' : 'No') ?></p>
                        <p>Lingua originale: <?php echo $movie->original_language ?></p>
                        <p>Titolo originale: <?php echo $movie->original_title ?></p>
                        <p>Voto medio: <?php echo round($movie->vote_average) ?></p>
                        <p>Età minima consentita: <?php echo $movie->min_age_allowed ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <div class="container mt-2 d-none">
        <div class="row justify-content-evenly">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column">
                    <? var_dump($movie); ?>
                </div>
            <?php endforeach; ?>
        </div>
</main>

<style>
    #cards {
        padding: auto 1rem;
    }

    #card {
        margin-top: 1rem;
        padding: 1rem 1rem 1rem 0;
        display: flex;
        flex-direction: column;
        align-items: start;

        background: linear-gradient(45deg, rgb(26, 26, 26), black);
        border: solid .5px black;
        border-radius: 8px;

        & p {
            color: white;
            margin-left: 1.5rem;
        }
    }
</style>


<?php include_once __DIR__ . '/parts/footer.php' ?>