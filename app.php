<?php

spl_autoload_register(function ($className) {
    require_once './src/' . $className . '.php';
});

// définition d'un rôle
$savior = new Role;
$savior->setName('savior');
// création d'un personnage et ajout d'un rôle, on ajoute bien un objet dans un autre !
$mario = new Persona;
$mario->setRole($savior);
// ... à continuer avec la scene
$castle = new Scene;
$castle->setPersona($mario);

$knight = new Role;
$knight->setName('knight');

$dragon = new Role;
$dragon->setName('dragon');

$link = new Persona;
$link->setRole($knight);

$bowser = new Persona;
$bowser->setRole($dragon);

$dungeon = new Scene;
$dungeon->setPersona($link)
        ->setPersona($bowser);

$game1 = new Game($dungeon->all());
echo $game1->launchGame();