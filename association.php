<?php
    include 'inc/init.inc.php';
    include 'inc/header.inc.php';
    include 'inc/nav.inc.php';

# liste associations vide bien sur juste pour voir si c'était connecté et si cela s'affiche

// $liste_association = $pdo->query('SELECT * FROM association');
//     echo '<select name="test" id="test" style="height: 30px; width: 250px; border: 1px solid #dedede">';
// while($ligne = $liste_association->fetch(PDO::FETCH_ASSOC)) {
//     echo '<option value="' . $ligne['id_association'] . '">' . $ligne['vehicule'] .$ligne['conducteur'] .  '</option>';
// }
//     echo '</select>';


?>

<div class="row">
            <div class="col-sm-12">
                <h1>Association</h1>
                <hr>
                <form method="post" class="border p-3">
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="idc">Id Association</label>
                            <input type="text" name="idc" id="idc" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label for="idc">Véhicule</label>
                            <input type="text" name="idc" id="idc" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label for="idc">Id Conducteur</label>
                            <input type="text" name="idc" id="idc" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-outline-primary w-100" name="enregistrer" id="enregistrer" >Enregistrer ce conducteur</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>