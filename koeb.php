<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Køb billetter</title>

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

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form class="pt-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Navn</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefonnummer</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="num-persons" class="form-label">Antal personer</label>
                        <input type="number" class="form-control" id="num-persons" name="num-persons" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="ticket-type" class="form-label">Billettype</label>
                        <select class="form-select" id="ticket-type" name="ticket-type" required>
                            <option value="">Vælg billettype</option>
                            <option value="type1">Endags</option>
                            <option value="type2">Tre dage</option>
                            <option value="type3">Uge billet</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ticket-price" class="form-label">Pris pr. billet</label>
                        <input type="text" class="form-control" id="ticket-price" name="ticket-price" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Køb</button>
                </form>
            </div>
        </div>
    </div>


</main>


<footer class="footer mt-5 py-3 bg-dark text-primary-color">

    <?php include 'footer.php' ?>

</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="billet.js"></script>

</body>
</html>