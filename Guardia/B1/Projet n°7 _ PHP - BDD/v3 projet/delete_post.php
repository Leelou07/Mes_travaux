<?php
// Inclure le fichier header.php
include 'includes/header.php';
// Inclure le fichier sidebar.php
include 'includes/sidebar.php';
?>

<?php
// Inclure la variable $db = new Database();
$db = new Database();

    if(isset($_GET[('del_postid')])){
        $id = $_GET['del_postid'];
        

        if($id){
            $query2 = "SELECT * FROM post WHERE id = '$id'";
            $post2 = $db->select($query2);
            $post2 = $post2->fetch_array();
            $img_link = $post2['image'];
            
            unlink($img_link);
            
            $query = "DELETE FROM post WHERE id = '$id'";
            $post = $db->delete($query);
            
            //header('Location: index.php');
        }else {
            echo "ERREUR";
        }
    }
    

// Si la méthode de requête est GET ,
// Alors,
//     Récupérer la valeur de del_postid ,
//     Si del_postid est vide ,
//         Alors ,
//             Rediriger vers post_list.php ,
//     Sinon ,
//         Récupérer la valeur de delete_id ,
//         Récupérer les données de la table post ,
//         Tant que les données sont récupérées
//             Récupérer la valeur de imglink
//             Supprimer l'image
//         Supprimer les données de la table post
//         Si les données sont supprimées
//             Alors
//                 Afficher un message de succès
//                 Rediriger vers post_list.php
//             Sinon
//                 Afficher un message d'erreur
//                 Rediriger vers post_list.php

?>
