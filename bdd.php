<?php
/*
  Auteur: Loïc Burnand
  Projet: M152 Blog
  Date: Septembre-Octobre 2018
  Employeur: CFPTI

  Description de la page:
  C'est la page où se trouve toutes les fonctions de la BD.
*/
DEFINE('SERVER', 'localhost');
DEFINE('PORT', '');
DEFINE('PSEUDO', 'Admin152');
DEFINE('PWD', 'Super');
DEFINE('DB_NAME', 'M152');
// Connecte la base de donnÃ©es
function connectDB()
{
    static $db = null;
    if ($db === null) {
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $db = new PDO("mysql:host=". SERVER .";port=". PORT .";dbname=". DB_NAME, PSEUDO, PWD, $pdo_options);
            $db->exec('SET CHARACTER SET utf8');
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    return $db;
}

