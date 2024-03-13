<?php include_once __DIR__ . '/parts/header.php' ?>

<main>
    <div class="container">
        <?php include_once __DIR__ . '/db.php' ?>

        <!-- dumping movies -->
        <?php var_dump($first_movie); ?>
        <?php echo $first_movie->voteRounded();
        '<br><br>'; ?>
        <?php var_dump($movies) ?>

        <div class="row">
            <?php foreach ($movies as $key => $element) : ?>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column">
                    <!-- <?php $element; ?> doesn't works -->
                </div>

            <?php endforeach; ?>
        </div>

    </div>
</main>


<?php include_once __DIR__ . '/parts/footer.php' ?>