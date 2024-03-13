<?php include_once __DIR__ . '/parts/header.php' ?>

<main>
    <div class="container">
        <?php include_once __DIR__ . '/db.php' ?>

        <!-- dumping movies -->
        <?php var_dump($first_movie); ?>
        <?php echo $first_movie->voteRounded();
        '<br><br>'; ?>
        <?php var_dump($movies) ?>

    </div>
</main>


<?php include_once __DIR__ . '/parts/footer.php' ?>