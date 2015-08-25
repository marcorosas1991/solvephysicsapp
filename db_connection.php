<?php

/**
 * Database connections
 */

function db_link() {
   $host = 'localhost';
   $db = 'solvephysicsapp';
   $usr = 'proxy';
   $pass = 'Cd9j2qShUGFWwRn7';
   $dsn = 'mysql:host='.$host.';dbname='.$db;
   $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );

  try {
    $link = new PDO($dsn, $usr, $pass, $options);
    return $link;
    //echo 'worked';
  } catch (PDOException $exc) {
    echo $exc->getTraceAsString();
  }
}

?>
