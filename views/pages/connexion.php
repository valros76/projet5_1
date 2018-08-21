<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../templates/home_style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
    <div id="containerConnect">
        <header id="headConnect">
            <h1>Page de connexion</h1>
            <p>
            Veuillez vous connecter pour avoir accès à l'intégralité du site.<br/>
            Si vous n'avez pas encore de compte, un lien vers la page d'inscription est disponible dans le menu.
            </p>
        </header>

        <section>
            <article>
                <form method="post">
                    <p>
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" required/>
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password"/>
                        <br/>
                        <input type="submit" value="Se connecter" name="connect"/>
                    </p>
                </form>
            </article>
        </section>
    </div>
</body>
</html>