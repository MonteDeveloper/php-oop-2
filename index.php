<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include 'db.php';
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>ANIMALS E-COMMERCE</title>

    <script src="https://unpkg.com/vue@next"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
</head>

<body class="bg-dark">
    <div id="app" class="container">
        <div class="d-flex flex-wrap justify-content-center">
            <?php
            foreach ($products as $product) {
            ?>
                <div class="p-3 col-4">
                    <div class="card h-100 w-100 text-center" style="width: 18rem;">
                        <div class="ratio ratio-1x1">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="<?= $product->getImagePath() ?>" class="img-fluid mh-100" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->getName() ?></h5>
                            <p class="card-text"><?= $product->getDescription() ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $product->getCategory()->getName() ?></li>
                            <li class="list-group-item"><?= $product->getPrice() ?></li>
                        </ul>
                        <button class="btn btn-primary m-3">AGGIUNGI AL CARRELLO</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="./main.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
</body>

</html>