<?php $head = 'index'; ?>

<?php include_once __DIR__ . '/parts/header.php' ?>

<main>
    <div class="container">
        <?php include_once __DIR__ . '/db.php' ?>

        <div class="row justify-content-start pb-3">
            <?php foreach ($movies as $movie) : ?>

                <div id="cards" class="col-lg-4 col-md-4 col-sm-12">

                    <div id="card">
                        <small class="ms-1 mb-1 text-primary">
                            <?= Movie::returnCountry(); ?>
                        </small>
                        <?php echo '<div class="col-12 d-flex justify-content-start ms-3">' ?>
                        <?php foreach ($movie->genre as  $genre) {
                            echo "<p class='ms-1 border border-1 rounded-2 p-1 text-white'>" . $genre . "</p>";
                        } ?>
                        <?php echo '</div>' ?>
                        <p id="p_hover">Adulti: <span><?php echo ($movie->adult ? 'Sì' : 'No') ?></span></p>
                        <p id="p_hover">Lingua originale: <span> <?php echo $movie->original_language ?></span></p>
                        <p id="p_hover">Titolo originale: <span><?php echo $movie->original_title ?></span></p>
                        <p id="p_hover">Voto medio:<span><?php echo round($movie->vote_average) ?></span> </p>
                        <p id="p_hover">Età minima consentita: <span><?php echo $movie->min_age_allowed ?></span></p>
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
        position: relative;
        margin-top: 1rem;
        padding: 1rem 1rem 1rem 0;
        display: flex;
        flex-direction: column;
        align-items: start;

        background: linear-gradient(45deg, rgb(26, 26, 26), black);
        border: solid .5px black;
        border-radius: 8px;

        & #p_hover {
            position: relative;
            color: white;
            margin-left: 1.5rem;
            font-size: medium;

            border-bottom: solid .25px white;

            >span {
                color: white;
                margin-left: .5rem;
                font-size: small;
            }
        }

        #p_hover {
            border-bottom: 2px solid transparent;
            transition: border-bottom 1s ease-in-out;
        }

        #p_hover:before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: blue;
            visibility: hidden;
            transition: all 1.5s ease-in-out;
        }

        #p_hover:hover:before {
            visibility: visible;
            width: 100%;
        }

        #p_hover:hover {
            border-bottom: 2px solid blue;
        }


    }

    /* card bracket */
</style>


<?php include_once __DIR__ . '/parts/footer.php' ?>