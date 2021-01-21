<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Locations des voitures</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("enTete.php");?>



    <!-- Corps -->

    <div class="container principal">

        <div class="container">
            <div class="row">
                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h5><a href="#">Locataire</a></h5>
                    <p>
                        <div class="container-fluid formulaire">
                            <form action="#">
                                <div class="input-group flex-nowrap mb-3">
                                    <span class="input-group-text" id="addon-wrapping">ID Locataire</span>
                                    <input type="text" class="form-control" aria-label="Username"
                                        aria-describedby="addon-wrapping" readonly>
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <input type="text" class="form-control" placeholder="Nom" aria-label="Username"
                                        aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <input type="text" class="form-control" placeholder="Adresse" aria-label="Username"
                                        aria-describedby="addon-wrapping">
                                </div>

                                <div class="d-grid gap-2 mb-3">
                                    <button class="btn btn-success" type="submit">Ajouter</button>
                                    <button class="btn btn-primary" type="button">Modifier</button>
                                    <button class="btn btn-secondary" type="reset">Effacer</button>
                                </div>
                            </form>
                        </div>
                    </p>


                </article>

                <article class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                    <h2>LOCATAIRES</h2>
                    <nav class="navbar navbar-light recherche">
                        <div class="container-fluid">
                            <a class="navbar-brand">Numéro / Désignation</a>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder=".   .   ."
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                            </form>
                        </div>
                    </nav>

                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID Locataire</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Adresse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mike</td>
                                <td>BIS 32</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jane</td>
                                <td>Lot 5</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Yui</td>
                                <td>North</td>
                            </tr>

                        </tbody>
                    </table>

                </article>
            </div>
        </div>

    </div>

    <!-- Pied de page -->
    <?php include("piedPageListe.php");?>




</body>

</html>