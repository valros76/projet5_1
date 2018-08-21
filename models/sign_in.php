<?php

function loadClass($class){
    require 'classes/'.$class.'.php';
}
spl_autoload_register('loadClass');
    
require('bdd.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['email']) && isset($_POST['inscription'])){

    $pseudo = $_POST['pseudo'];
    $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $user = new User([
        'pseudo' => $pseudo,
        'password' => $pass_hash,
        'email' => $email
        ]);

    $manager = new UsersManager($bdd);

    if(!$user->nomValide()){
            echo 'Le nom choisi est invalide.';
            unset($user);
        }
    elseif($manager->exists($user->pseudo())){
            echo 'Ce nom est déjà pris.';
            unset($user);
        }
    elseif(!$user->emailValide()){
            echo 'Cet email est invalide.';
            unset($user);
        }
    elseif($manager->exists($user->email())){
            echo 'Cet email est déjà utilisé.';
            unset($user);
        }
    else{
            $manager->add($user);
        }
    }   
else{
    echo 'L\'un des champs est mal rempli ou les mots de passe ne correspond pas.';
}


?>