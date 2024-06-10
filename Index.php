<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('headers.php'); ?>
    <main>
        <div id="liste-oeuvres">
        <?php include('oeuvres.php'); ?>
        <?php foreach($oeuvres as $oeuvre) : ?>
        <?php if (array_key_exists('is_enabled', $oeuvre) && $oeuvre['is_enabled'] == true): ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo array_search($oeuvre,$oeuvres); ?>">
                    <img src=<?php echo $oeuvre['picture']; ?>>
                    <h2><?php echo $oeuvre['title']; ?></h2>
                    <p class="description"><?php echo $oeuvre['author']; ?></p>
                </a>
            </article>
        <?php endif; ?>
        <?php endforeach ?>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>