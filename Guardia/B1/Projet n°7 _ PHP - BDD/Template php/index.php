<?php 
include 'connexion.php';
$list = $bdd->query('SELECT * FROM users');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>

            <tr id="items">
                    <th>Nom</th>                
                    <th>Prenom</th>              
                    <th>Age</th>          
                    <th>Email</th>        
                    <th>Modifier</th>
                    <th>Supprimer</th>
            </tr>
            
            <?php foreach ($list as $project) { ?>
            <tr>
                    <td><?php echo $project['nom'];?></td>
                    <td><?php echo $project['prenom'];?></td>
                    <td><?php echo $project['age'];?></td>
                    <td><?php echo $project['email'];?></td>
                    <td><a href="modifier.php?id=<?php echo $project['id']; ?>"> <img src="images/edit.png"></a></a></td>
                    <td><a href="supprimer.php?id=<?php echo $project['id']; ?>"> <img src="images/trash.png"></a></a></td>
            </tr>
            <?php }?>

        </table>
    </div>
</body>

</html>