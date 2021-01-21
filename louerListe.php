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
                    
               
                    <h5><a href="#">Location</a></h5>
                    <p>
                        <div class="container-fluid formulaire">
                            <form action="#">
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">ID Locataire</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>

                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">ID Voiture</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <input type="number" class="form-control" placeholder="Nombre de jour"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-3">
                                    <span class="input-group-text" id="addon-wrapping">Date location</span>
                                    <input type="date" class="form-control" aria-label="Username"
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
               

        <h2>LOUER</h2>
                <nav class="navbar navbar-light recherche">
            <div class="container-fluid">
                <a class="navbar-brand">Numéro / Désignation</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder=".   .   ." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID Locataire</th>
                    <th scope="col">ID Voiture</th>
                    <th scope="col">Nombre Jours</th>
                    <th scope="col">Date location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">3</th>
                    <td>Voiture 1</td>
                    <td>5</td>
                    <td>10-03-20</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Voiture 2</td>
                    <td>23</td>
                    <td>01-11-18</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Voiture 3</td>
                    <td>10</td>
                    <td>07-09-19</td>
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