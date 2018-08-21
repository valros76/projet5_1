<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../templates/css/home_style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <div id="containerInscription">
        <header id="headInscription">
            <h1>Page d'inscription</h1>
            <nav>
                <ul>
                    <li><a href="views/pages/connexion.php">Se connecter</a></li>
                    <li><a href="views/pages/inscription.php">S'inscrire</a></li>
                </ul>
            </nav>
            <p>L'inscription au site vous permettra un accès à toutes les parties utilisateurs.</p>
        </header>

        <section>
            <article>
                <form action="../../models/sign_in.php" method="POST">
                    <p>
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo"/>
                        <label for="password">Password</label>
                        <input type="password" name="password"/>
                        <label for="confirmPassword">Password confirmation</label>
                        <input type="password" name="confirmPassword"/>
                        <label for="email">Email</label>
                        <input type="text" name="email"/>
                        <br/>
                        <input type="submit" name="inscription"/>
                    </p>
                </form>
            </article>
        </section>
    </div>
</body>
</html>