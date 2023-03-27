<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Vilma Filmfestival</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ef424bfb92.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<header class="pb-5">

    <?php include 'menu.php' ?>

</header>

<main class="pt-5">

    <!-- Main Content -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <h1 class="fw-bold text-center">Vilma Filmfestival 2024</h1>
            <div class="col-12 col-md-4 my-4">
                <div class="card">
                    <img src="img/film/F-05.png" class="card-img-top" alt="Bora Bora">
                    <div class="card-body">
                        <h5 class="card-title">Bora Bora (2011)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mattis ante at
                            imperdiet commodo.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-4">
                <div class="card">
                    <img src="img/film/NK3-02.png" class="card-img-top" alt="Nordkraft">
                    <div class="card-body">
                        <h5 class="card-title">Nordkraft (2005)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mattis ante at
                            imperdiet commodo.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-4">
                <div class="card">
                    <img src="img/film/F-06.png" class="card-img-top" alt="Bølle Bob">
                    <div class="card-body">
                        <h5 class="card-title">Bølle Bob (1998)</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mattis ante at
                            imperdiet commodo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- Footer -->
<footer class="footer mt-5 py-3 bg-dark text-primary-color">

 <?php include 'footer.php' ?>

</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
