<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= $locateCss; ?>" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title;?></title>
</head>
<body>
    
        <header id="headHome">
            <?= $header;?>
        </header>

        <div id="containerContent">
            <section id="contentHome">
                <?= $content;?>
            </section>
        </div>

        <footer id="footHome">
            <?= $footer;?>
        </footer>
    
</body>
</html>