<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_7;charset=utf8;', 'root', '');

} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}

echo '<table>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Mot de passe</th>
                <th>Email</th>';


$requete = $bdd->query('SELECT * FROM client');

while ($donnees = $requete->fetch()) {

    echo'<tr>
    <td>' . $donnees['prenom_client'] . '</td>
    <td>' . $donnees['nom_client'] . '</td>
    <td>' . $donnees['mdp_client'] . '</td>
    <td>' . $donnees['email_client'] . '</td>
    </tr>';

}
echo '</tr>
            </table>';

//$requete = $bdd->exec('INSERT INTO client(prenom_client, nom_client, mdp_client, email_client) VALUES("Mark", "Zuckerberg", "Facebook", "zuzu@gmail.com")');
//$requete = $bdd->exec('UPDATE client SET email_client = "bonjour@gmail.com" WHERE prenom_client = "test"');
//$requete = $bdd->exec('DELETE FROM client WHERE prenom_client = "Mark"');
?>
