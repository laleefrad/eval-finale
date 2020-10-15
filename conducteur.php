<?php
    include 'inc/init.inc.php';
    include 'inc/header.inc.php';
    include 'inc/nav.inc.php';


?>

        <div class="row">
            <div class="col-sm-12">
                <h1>Conducteur</h1>
                <hr>
                <form method="post" class="border p-3">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="idc">Id_conducteur</label>
                            <input type="text" name="idc" id="idc" value="" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label for="idc">Prénom</label>
                            <input type="text" name="idc" id="idc" value="" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label for="idc">Nom</label>
                            <input type="text" name="idc" id="idc" value="" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-outline-primary w-100" name="enregistrer" id="enregistrer" >Enregistrer ce conducteur</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>






<?php

$host = 'mysql:host=localhost;dbname=conducteur';
$login = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
$pdo = new PDO($host, $login, $password, $options);

function separateur() {echo '<hr><hr>';}



# liste des conducteurs de la BDD 
$liste_conducteur = $pdo->query('SELECT * FROM conducteur');separateur(); 
    echo '<select name="test" id="test" style="height: 30px; width: 250px; border: 1px solid #dedede">';
    while($ligne = $liste_conducteur->fetch(PDO::FETCH_ASSOC)){
        echo '<option value="' . $ligne['id_conducteur'] . '">' . $ligne['nom'] .' ' .$ligne['prenom'] . ' ' . '</option>';
        }echo '</select>';
        separateur(); 


      



# jusque la la base de donnée est bien connectée et les données s'affichent mais ensuite je n'arrive pas à enregistrer dans la base. J'ai déjà ei ce souci avec l'éval de php mais je ne sais toujours pas d'ou vient le souci



$id_conducteur = '';
$nom = '';
$prenom = '';



// si le formulaire est validé : 
if(isset($_POST['conducteur']) && isset($_POST['nom']) &&isset($_POST['prenom'])) 
 {


    $id_conducteur = $_POST['conducteur'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
 


     // on insert dans la BDD
            $enregistrement = $pdo->prepare("INSERT INTO conducteur (id_conducteur,nom, prenom,) VALUES (NULL, :id_conducteur, :nom, :prenom)");

            $enregistrement->bindParam(':id-conducteuer', $id_conducteur, PDO::PARAM_STR);
            $enregistrement->bindParam(':nom', $nom, PDO::PARAM_STR);
            $enregistrement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $enregistrement->execute();

    

}; 



