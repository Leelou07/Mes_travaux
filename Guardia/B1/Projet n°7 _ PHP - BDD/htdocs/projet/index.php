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

?>
