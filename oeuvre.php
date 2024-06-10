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
        <?php include('oeuvres.php'); ?>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src=<?php echo $oeuvres[$_GET['id']]['picture']; ?>>
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvres[$_GET['id']]['title']; ?></h1>
                <p class="description"><?php echo $oeuvres[$_GET['id']]['author']; ?></p>
                <p class="description-complete">
                <?php echo $oeuvres[$_GET['id']]['description']; ?>
                </p>
            </div>
        </article>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>