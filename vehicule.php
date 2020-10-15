<?php
    include 'inc/init.inc.php';

    include 'inc/header.inc.php';
    include 'inc/nav.inc.php';
    // echo '<pre>'; print_r($_POST); echo '</pre>';

# jusque la la base de donnée est bien connectée et les données s'affichent
?>

        <div class="row">
            <div class="col-sm-12">
                <h1>Vehicule</h1>
                <hr>
                <table class="table table-bordered text-center">
                    <tr class="bg-dark text-white">
                        <th>Id Conducteur</th>
                        <th>Marque</th>
                        <th>Models</th>
                        <th>couleur</th>
                        <th>Immatriculation</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </tr>
                    <tr>
                        <td>501</td>
                        <td>Peugeot</td>
                        <td>807</td>
                        <td>noir</td>
                        <td>AB-355-CA</td>
                        
                        <th>
                            <a href="?action=modifier&id_livre=100">✏</a></th>
                        <th>
                            <a href="?action=supprimer&id_livre=100">✖</a></th>
                    </tr>
                    <tr>
                        <td>502</td>
                        <td>Citroen</td>
                        <td>C8</td>
                        <td>Bleu</td>
                        <td> CE-122-AE </td>
                        
                        <th>
                            <a href="?action=modifier&id_livre=100">✏</a></th>
                        <th>
                            <a href="?action=supprimer&id_livre=100">✖</a></th>
                    </tr>
                    <tr>
                        <td>503</td>
                        <td>Mercedes</td>
                        <td>Cls</td>
                        <td>Vert</td>
                        <td>FG-953-HI</td>
                        
                        <th>
                            <a href="?action=modifier&id_livre=100">✏</a></th>
                        <th>
                            <a href="?action=supprimer&id_livre=100">✖</a></th>
                    </tr>
                    <tr>
                        <td>504</td>
                        <td>Volkwsagen</td>
                        <td>Touran</td>
                        <td>Noir</td>
                        <td>SO-322-NV</td>
                        
                        <th>
                            <a href="?action=modifier&id_livre=100">✏</a></th>
                        <th>
                            <a href="?action=supprimer&id_livre=100">✖</a></th>
                    </tr>
                    <tr>
                        <td>505</td>
                        <td>Skoda</td>
                        <td>Octavia</td>
                        <td>Gris</td>
                        <td>PB-631-TK</td>
                        
                        <th>
                            <a href="?action=modifier&id_livre=100">✏</a></th>
                        <th>
                            <a href="?action=supprimer&id_livre=100">✖</a></th>
                    </tr>
                    <tr>
                        <td>506</td>
                        <td>Volkwagen</td>
                        <td>Passat</td>
                        <td>Gris</td>
                        <td>XN-973-MM</td>
                        
                        <th>
                            <a href="?action=modifier&id_livre=100">✏</a></th>
                        <th>
                            <a href="?action=supprimer&id_livre=100">✖</a></th>
                    </tr>
                </table>
            </div>
        </div>

        <div class="container row border border-success> 
                <form method="post" class="">
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="auteur">Marque</label>
                            <input type="text" name="auteur" id="auteur" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label for="titre">Model</label>
                            <input type="text" name="titre" id="titre" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label for="titre">Couleur</label>
                            <input type="text" name="titre" id="titre" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label for="titre">Immatriculation</label>
                            <input type="text" name="titre" id="titre" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label>&nbsp;</label>
                          <!--AJOUT D'UN CHAMP CACHE POUR CONTENIR L'ID conducteur EN CAS DE MODIF -->
                            <input type="hidden" name="id_livre" value="">
                            <button type="submit" class="btn btn-outline-primary w-100" name="enregistrer" id="enregistrer" >Ajouter ce Véhicule</button>
                        </div>
                    </div>
                </form>
             </div>



<?php       
    include 'inc/footer.inc.php';

    # liste hévicule
    
    $liste_vehicule = $pdo->query('SELECT * FROM vehicule');
        echo '<select name="test" id="test" style="height: 30px; width: 250px; border: 1px solid #dedede">';
while($ligne = $liste_vehicule->fetch(PDO::FETCH_ASSOC)) {
    echo '<option value="' . $ligne['id_vehicule'] . '">' . $ligne['marque'] .' - ' .$ligne['model'] . ' - ' .$ligne['couleur'] .' - ' .$ligne['immatriculation'] . '</option>';
}
    echo '</select>';
