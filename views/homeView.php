<?php
    session_start();
?>

<?php
    $title = "Home";
    $locateCss = "templates/css/home_style.css";
?>

<?php ob_start();
    echo '
        <h1>Home</h1>
        <nav>
            <ul>
                <li><a href="">Acceuil</a></li>
                <li><a href="">Se connecter</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    ';
$header = ob_get_clean();?>

<?php ob_start();
    echo '
            <article>
                <div>
                    <h2>Un article du site</h2>
                    <p>Ceci est un article de test pour le site.</p>
                </div>

                <aside>
                    <h3>Un aside du site</h3>
                    <p>Ceci est un aside de test pour le site.</p>
                </aside>
            </article>
    ';
$content = ob_get_clean();?>

<?php ob_start();
    echo '
        <p>Projet Openclassrooms numéro 5 - Valérian Dufrène</p>
        <p><a href=""> Qui suis-je ? </a></p>
    ';
$footer = ob_get_clean();?>
<?php require('templates/home.php');?>