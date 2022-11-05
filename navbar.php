<?php
    $baseUrl = "http://localhost/mysql/books/index.php";
    ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $baseUrl; ?>">Projektas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="<php echo $baseUrl; ?>">Pradžia</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $baseUrl . 'books/index.php'; ?>Knygos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo $baseUrl . 'about.php' ; ?>Apie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>