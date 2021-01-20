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
        <h2>LISTES DES LOCATAIRES</h2>

        <nav class="navbar navbar-light recherche">
            <div class="container-fluid">
                <a class="navbar-brand">Numéro / Désignation</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder=".   .   ." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>

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
                    <th scope="col">ID</th>
                    <th scope="col">Locataire</th>
                    <th scope="col">Date location</th>
                    <th scope="col">Nb Jours</th>
                    <th scope="col">Montant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>10-10-17</td>
                    <td>10</td>
                    <td>12000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>02-11-20</td>
                    <td>7</td>
                    <td>10000</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Will</td>
                    <td>15-07-19</td>
                    <td>23</td>
                    <td>30000</td>
                </tr>

                <tr>
                    <th scope="row" colspan="3"></th>
                    <td><b>TOTAL</b></td>
                    <td>52000</td>
                </tr>

            </tbody>
        </table>



    </div>

    <!-- Pied de page -->

    <?php include("piedPage.php");?>
</body>

</html>