<?php

//on inclue le fichier qui initialise tout ce dont on a besoin
require 'bootstrap.php';

//Tests sur les objets
$perso1 = new Personnage; // Un premier personnage
$perso2 = new Personnage; // Un second personnage

$perso1->setForcePerso(10);
$perso1->setExperience(2);

$perso2->setForcePerso(90);
$perso2->setExperience(58);

$perso1->frapper($perso2);  // $perso1 frappe $perso2
$perso1->gagnerExperience(); // $perso1 gagne de l'expérience

$perso2->frapper($perso1);  // $perso2 frappe $perso1
$perso2->gagnerExperience(); // $perso2 gagne de l'expérience

echo 'Le personnage 1 a ', $perso1->forcePerso(), ' de force, contrairement au personnage 2 qui a ', $perso2->forcePerso(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';

//Test de l'insertion en base de données
$perso = new Personnage;

$perso = new Personnage([
  'nom' => 'Victor',
  'forcePerso' => 5,
  'degats' => 0,
  'niveau' => 1,
  'experience' => 0
]);
// var_dump($perso);

$db = new PDO('mysql:host=localhost;dbname=php', 'php', 'php');
$persoRepo = new PersonnagesRepository($db);

if($persoRepo->add($perso)) echo "Personnage ".$perso->nom()." ajouté dans la base de données!";
else echo "Erreur lors de l'ajout dans la base de donnée";