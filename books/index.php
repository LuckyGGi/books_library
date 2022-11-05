<?php 
include("../header.php");

$sql = "SELECT 'id', 'title', 'author', 'pages', 'price' FROM 'books'";
// $sql = "SELECT * FROM 'books' WHERE id=5555";
// $result = $conn->query($sql);

?>
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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>

<?php 

include("../header.php");

include("../footer.php");