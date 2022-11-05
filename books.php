<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>PHP ir MYSQL 1</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">Projektas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Pradžia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="knygos.html">Knygos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apie.html">Apie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knygos</h1>
                        <p class="lead">Visos suvestos knygos</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><a href="nauja.html" class="btn btn-success">Nauja knyga</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pavadinimas</th>
                                    <th scope="col">Autorius</th>
                                    <!-- <th scope="col">Žanras</th> -->
                                    <th scope="col">Puslapių sk.</th>
                                    <th scope="col">Kaina, €</th>
                                    <th scope="col">Veiksmai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <!-- <td>Stulpelis</td> -->
                                    <td>Stulpelis</td>
                                    <td>Stulpelis</td>
                                    <td>
                                        <a href="perziureti.html" class="btn btn-primary">Žiūrėti</a>
                                        <a href="atnaujinti.html" class="btn btn-warning">Atnaujinti</a>
                                        <a href="salinti.html" class="btn btn-danger">Šalinti</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-light text-dark pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="mt-0 mb-0">Visos teisės saugomos</p>
                    </div>
                    <div class="col">
                        <p class="mt-0 mb-0 text-end">Dar kas nors</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
