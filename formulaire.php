<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Locations des voitures</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include("enTete.php");?>



    <!-- Corps -->

    <div class="container principal">

        <center>
            <h3>Formulaire de création</h3>
        </center>
        <div class="container">
            <div class="row">
                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h5><a href="#">Locataire</a></h5>
                    <p>
                        <div class="container-fluid formulaire">
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
                                <button class="btn btn-primary" type="button">Ajouter</button>
                                <button class="btn btn-secondary" type="button">Effacer</button>
                            </div>
                        </div>
                    </p>
                </article>

                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h5><a href="#">Voiture</a></h5>
                    <p>
                        <div class="container-fluid formulaire">
                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" id="addon-wrapping">ID Voiture</span>
                                <input type="text" class="form-control" aria-label="Username"
                                    aria-describedby="addon-wrapping" readonly>
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                                <input type="text" class="form-control" placeholder="Désignation" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                                <input type="number" class="form-control" placeholder="Loyer journalier"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <button class="btn btn-primary" type="button">Ajouter</button>
                                <button class="btn btn-secondary" type="button">Effacer</button>
                            </div>
                        </div>
                    </p>
                </article>

                <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                    <h5><a href="#">Location</a></h5>
                    <p>
                        <div class="container-fluid formulaire">
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
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
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
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
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
                                <button class="btn btn-primary" type="button">Ajouter</button>
                                <button class="btn btn-secondary" type="button">Effacer</button>
                            </div>
                        </div>
                    </p>
                </article>
            </div>
        </div>

    </div>

    <!-- Pied de page -->

    <?php include("piedPage.php");?>
</body>

</html>