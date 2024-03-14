<?php include_once __DIR__ . '/parts/header.php' ?>

<main>
    <div class="container">
        <?php include_once __DIR__ . '/db.php' ?>

        <div class="row justify-content-start pb-3">
            <?php foreach ($movies as $movie) : ?>

                <div id="cards" class="col-lg-4 col-md-4 col-sm-12">

                    <div id="card">
                        <?php echo '<div class="col-12 d-flex justify-content-start ms-3">' ?>
                        <?php foreach ($movie->genre as  $genre) {
                            echo "<p class='ms-1 border border-1 rounded-2 p-1'>" . $genre . "</p>";
                        } ?>
                        <?php echo '</div>' ?>
                        <p>Adulti: <span><?php echo ($movie->adult ? 'Sì' : 'No') ?></span></p>
                        <p>Lingua originale: <span> <?php echo $movie->original_language ?></span></p>
                        <p>Titolo originale: <span><?php echo $movie->original_title ?></span></p>
                        <p>Voto medio:<span><?php echo round($movie->vote_average) ?></span> </p>
                        <p>Età minima consentita: <span><?php echo $movie->min_age_allowed ?></span></p>
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
            font-size: medium;

            border-bottom: solid .25px white;

            >span {
                margin-left: .5rem;
                font-size: small;
            }
        }
    }
</style>


<?php include_once __DIR__ . '/parts/footer.php' ?>