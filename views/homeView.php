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
                <li><a href="views/pages/connexion.php">Se connecter</a></li>
                <li><a href="views/pages/inscription.php">S\'inscrire</a></li>
            </ul>
        </nav>
    ';
$header = ob_get_clean();?>

<?php ob_start();
    echo '
            <article>
                <div>
                    <h3>Bienvenue sur le prototype de Valérian Dufrène pour le projet 5.</h3>
                    <br/>
                    <p>
                    Ceci est un prototype de site destiné à être présenté pour le 5ème projet de la formation 
                    <span class="importantWord">Développeur Web Junior</span>.
                    </p>
                    <p>
                    Ce projet n\'a q\'une consigne : mettre en valeur les languages appris durant la formation et notre maîtrise de ces derniers.
                    </p>
                </div>

                <aside>
                    <header>
                        <h4>Valérian Dufrène</h4>
                    </header>
                    <hr width="20"/>
                    <p><img src="img/img01.jpg" alt="avatarAdmin" name="avatarAdmin" id="avatarAdmin"></p>
                    <hr width="20"/>
                    <section>
                        <p>Je suis né le 25 Mars 1995.</p>
                        <p>Je suis passionné par la programmation depuis l\'âge de 12 ans.</p>
                        <p>J\'ai appris quelques bases de languages, seul, en me documentant grâce à plusieurs sources (cours, tutoriels, documentation officielle des langages, livres, code sources des sites).</p>
                    
                    </section>
                    <hr width="20"/>
                    <section>
                        <p>Je suis en formation <span class="importantWord">Développeur Web Junior</span> avec Openclassrooms.</p>
                        <p>Grâce à la formation, j\'ai acquis de l\'expérience dans les langages suivants, chaque langage ayant un projet défini pour nous faire travailler sur les bases (aucun framework accepté) :<br/>
                        <ol>
                            <li><span class="importantWord">Html</span></li>
                            <li><span class="importantWord">Css</span></li>
                            <li><span class="importantWord">Javascript</span></li>
                            <li><span class="importantWord">Php</span></li>
                        </ol></p>
                    </div>
                </section>
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