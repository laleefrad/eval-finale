<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- CSS perso -->
        <link rel="stylesheet" href="css/style.css">

        <title>Évaluation Finale Nora</title>
    </head>
    <body>        <!-- Navbar position fixed -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-Indigo">
            <a class="navbar-brand" href="#">Évaluation Finale Nora</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="conducteur.php">Conducteur <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vehicule.php">Vehicules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Association.php">Association</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="id_conducteur.php">Id_Conducteur</a>
                    </li> -->
                </ul>
            </div>
        </nav>
        <!-- FIN navbar fixed -->

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 mt-5">
                <h2>Affichage des Conducuteur</h2>
                <hr>
                <table class="table table-bordered text-center">
                    <tr class="bg-dark text-white">
                        <th>Id Conducteur</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Julien </td>
                        <td>AVIGNY</td>
                        <th>
                            <a href="?action=modifier&id_livre=100">✏</a></th>
                        <th>
                            <a href="?action=supprimer&id_livre=100">✖</a></th>
                    </tr>
                    <tr>
                        <td>2</td><td>Morgan</td>
                        <td>ALAMIA</td>
                        <th><a href="?action=modifier&id_livre=101">✏</a></th>
                        <th><a href="?action=supprimer&id_livre=101">✖</a></th>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Philippe</td>
                        <td>PANDRE</td>
                            <th><a href="?action=modifier&id_livre=102">✏</a></th>
                            <th><a href="?action=supprimer&id_livre=102">✖</a> </th>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Amelie</td>
                        <td>BLONDELLE</td>
                            <th> <a href="?action=modifier&id_livre=103">✏</a></th>
                            <th><a href="?action=supprimer&id_livre=103">✖</a></th>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Alex</td>
                        <td>RICHY</td>
                            <th><a href="?action=modifier&id_livre=104">✏</a></th>
                            <th><a href="?action=supprimer&id_livre=104">✖</a></th>
                    </tr>
                </table>
            </div>
        </div>

           <div class="container row col-sm-12"> 
                <form method="post" class="">
                    <div class="form-row">
                        <div class="form-group col-3">
                            <label for="auteur">Id Conducteur</label>
                            <input type="text" name="auteur" id="auteur" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label for="titre">Nom</label>
                            <input type="text" name="titre" id="titre" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label for="titre">Prenom</label>
                            <input type="text" name="titre" id="titre" value="" class="form-control">
                        </div>
                        <div class="form-group col-3">
                            <label>&nbsp;</label>
                          <!--AJOUT D'UN CHAMP CACHE POUR CONTENIR L'ID conducteur EN CAS DE MODIF -->
                            <input type="hidden" name="id_livre" value="">
                            <button type="submit" class="btn btn-outline-primary w-100" name="enregistrer" id="enregistrer" >Ajouter ce Conducteur</button>
                        </div>
                    </div>
                </form>
             </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Bootstrap JS (rajout du lien jQuery cdn complet pas la version slim !!!)-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- jQuery UI (pour datepicker) -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <!-- JS perso -->
        <script src="js/script.js"></script>
    </body>
</html>