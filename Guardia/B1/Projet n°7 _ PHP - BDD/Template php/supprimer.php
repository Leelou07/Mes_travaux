<?php
  //connexion a la base de données
  include 'connexion.php';
  //récupération de l'id dans le lien
  $current_users = $_GET['id'];
  //requête de suppression
  $requete = $bdd->exec("DELETE FROM users WHERE id = $current_users");

  //redirection vers la page index.php
  header('Location: index.php');
// MODAL POPUP POUR SUPPRESSION
?>