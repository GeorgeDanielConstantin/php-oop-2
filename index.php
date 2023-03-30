<?php

include __DIR__ . "/data/products.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row row-cols-3">

            <?php foreach($products as $product) : ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->getName() ?></h5>
                        <?php if($product instanceof food) : ?>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $product->weight ?> <?= $product->unit ?></h6>
                        <?php endif; ?>
                        <?php if($product instanceof bed || $product instanceof toy) : ?>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $product->material ?></h6>
                        <?php endif; ?>
                        <?php if($product instanceof food) : ?>
                        <p class="card-text"><?= $product->type ?></p>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>