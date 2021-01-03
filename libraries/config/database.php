<?php

/**
 * Retourne une connexion à la DB
 * 
 * @return PDO
 */

function getPDO(): PDO
{

  $dbname = 'vuejs-php';
  $user = 'root';
  $pass = '';

  try {
    $pdo = new PDO('mysql:host=localhost;charset=utf8;dbname=' . $dbname, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die('Erreur !:'  . $e->getMessage());
  }
  
  return $pdo;
}
