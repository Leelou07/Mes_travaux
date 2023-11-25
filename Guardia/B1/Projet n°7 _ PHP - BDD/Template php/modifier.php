<?php
    include 'connexion.php';
    $current_users = $_GET['id'];
    $teset= $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $teset->execute(array($current_users));
    $test = $teset->fetch();
 



    if(isset($_POST['button'])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $age = $_POST["age"];
        $email = $_POST["email"];

        if ($nom != null) {
            $requete = $bdd->exec("UPDATE users SET nom = '$nom' WHERE id = '$current_users' ");
        }
        if ($prenom != null) {
            $requete = $bdd->exec("UPDATE users SET prenom = '$prenom' WHERE id = '$current_users' ");
        }
        if ($email != null) {
            $requete = $bdd->exec("UPDATE users SET email = '$email' WHERE id = '$current_users' ");
        }
        if ($age !=null) {
            $requete = $bdd->exec("UPDATE users SET age = '$age' WHERE id = '$current_users' ");
        }

    }; 



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Modifier l'employé : <?php echo $test['nom']; ?> </h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="" placeholder="<?php echo $test['nom']; ?>">
            <label>Prénom</label>
            <input type="text" name="prenom" value="" placeholder="<?php echo $test['prenom']; ?>">
            <label>Email</label>
            <input type="text" name="email" value="" placeholder="<?php echo $test['email']; ?>">
            <label>âge</label>
            <input type="number" name="age" value="" placeholder="<?php echo $test['age']; ?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>

</html>