<?php
  //connexion à la base de données
  $hostname_db = "localhost;html_entrainement";
  $username_db = "root";
try{
   $db = mysqli_connect($hostname_db, $username_db);
}
catch(Exception $e){
      die ($e->getMessage());
  }
