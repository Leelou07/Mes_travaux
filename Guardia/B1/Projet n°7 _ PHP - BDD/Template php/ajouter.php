<?php
include 'connexion.php';
function verification($arg, $bdd){
    $execute= $bdd->query("SELECT * FROM users WHERE email = '$arg'");
    $e = $execute->fetch();
    if ($e){
        return 0;
    }else {
        return 1;
    }
}
if(isset($_POST['button'])){
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    if(verification($email, $bdd) == 1){
        $execute= $bdd->prepare('INSERT INTO users(nom, prenom, age, email) VALUES(?, ?, ?, ?)');
        $execute->execute(array($nom, $prenom, $age, $email));
        header('Location: index.php');
    } else {
        echo "L'adresse mail est déjà présent dans la bdd";
    }
}
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
        <h2>Ajouter un utilisateur</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>Email</label>
            <input type="text" name="email">
            <label>âge</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>