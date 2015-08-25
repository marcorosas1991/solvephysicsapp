<?php

/*
prospects model

Marco A. Rosas

*/

function addProspect($email) {
  global $link;
  $query = 'INSERT INTO prospects (email)
            VALUES (:email)';

  $statement = $link->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $statement->closeCursor();
}


?>
