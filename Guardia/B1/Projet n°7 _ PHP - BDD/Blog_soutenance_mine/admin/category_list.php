<?php
// Inclure le fichier header.php
include 'includes/header.php';
// Inclure le fichier sidebar.php
include 'includes/sidebar.php';
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Category List</h2>
        <?php
        // Si la méthode de requête est GET
        // Alors
        //     Récupérer la valeur de delid
        //     Supprimer la catégorie de la table category
        //     Si la catégorie est supprimée
        //         Alors
        //             Afficher un message de succès
        //         Sinon
        //             Afficher un message d'erreur
        /*
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_GET['id'];
            //$delete = $bdd->exec("DELETE FROM category WHERE id = '$id'");

            if(exec("DELETE FROM category WHERE id = '$id'")){
                header('Location: index.php');
            }else {
                echo "GROSSE ERREUR NARVALOEE";
            }
        }
        */
        ?>
        <div class="block">
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>N. De série</th>
                        <th>Nom Catégorie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Récupérer toutes les catégories de la table category
                    // Tant que la catégorie est récupérée
                    //     Afficher la catégorie

                    
                    $query = "SELECT * FROM category ORDER BY category_id DESC";
                    $post = $db->select($query);
                    if ($post) {
                        while ($result = $post->fetch_assoc()) {
                    ?>
                    <tr class="odd gradeX">
                        <td><?php echo $result['category_id'];?></td>
                        <td><?php echo $result['name']; ?></td>
                        <td><a href="edit_category.php?catid=<?php echo $result['category_id']?>">Modifier</a>
                            || <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')" href="id=<?php echo $result['category_id'];?>">Supprimer</a></td>
                    </tr>
                    <?php } }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();


    });
</script>

<?php
// Inclure le fichier footer.php
?>