<?php 
try {
    $bdd = new PDO("mysql:host=localhost;port=3307;dbname=login", "root", "usbw");
  } catch(Exception $e) {
    die("Erreur: ".$e->getMessage());
  }


     
   $req1 = $bdd->query("SELECT * FROM users");
   while ($resultat = $req1->fetch()) { 

echo $resultat['Prenom'];
                       }
                       ?>