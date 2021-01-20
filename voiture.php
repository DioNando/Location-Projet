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
        <h2>LOCATIONS PAR VOITURE</h2>
        <nav class="navbar navbar-light recherche">
            <div class="container-fluid">
                <a class="navbar-brand">Par année / entre 2 dates</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="date" placeholder=".   .   ." aria-label="Search">
                    <input class="form-control me-2" type="date" placeholder=".   .   ." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>

            </div>
        </nav>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID Voiture</th>
                    <th scope="col">Effectif</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Voiture 1</th>
                    <td>10</td>
                    <td>10000</td>
                </tr>
                <tr>
                    <th scope="row">Voiture 2</th>
                    <td>20</td>
                    <td>20000</td>
                </tr>
                <tr>
                    <th scope="row">Voiture 3</th>
                    <td>13</td>
                    <td>17000</td>
                </tr>

            </tbody>
        </table>

    </div>

    <!-- Pied de page -->

    <?php include("piedPage.php");?>
</body>

</html>