<?php

function loadClass($class){
    require 'models/classes/'.$class.'.php';
}
spl_autoload_register('loadClass');

require('bdd.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$pseudo = $_POST['pseudo'];
$req = $bdd->prepare('SELECT id,pseudo,password FROM users WHERE pseudo = :pseudo');
$req->execute(array(
    ':pseudo' => $pseudo));
$user = $req->fetch(PDO::FETCH_ASSOC);
$req->closeCursor();

$isPasswordCorrect = password_verify($_POST['password'], $user['password']);

if(!user){
    echo 'Mauvais identifiant ou mot de passe !';
}
else{
    if($isPasswordCorrect){
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
    else{
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

header('Location:../../index.php');


?>