<?php
include __DIR__ . "/db/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats and Dogs </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-info-subtle" >
    <header class="bg-warning p-2">
        <h1 class="text-center">Cats and Dogs</h1>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <?php foreach($products as $product){ ?>
                    <div class="card py-2 col-3 m-3" >
                        <div class="row h-100">
                            <div class="col-5 d-flex align-items-center ">
                                <img src="<?php echo $product->getRandomImg() ;?>" class="img-fluid " alt=" <?php echo $product->name ;?>">
                            </div>
                            <div class="col-7 ">
                                <div class="card-body h-100 d-flex flex-column justify-content-between">
                                    <h5 class="card-title"> 
                                        <?php echo $product->name; ?>
                                    </h5>
                                    <div class="card-info ">
                                        <i class=" <?php echo $product->category->img ; ?> "></i>
                                        <span>
                                            <?php echo $product->category->recipient ; ?>
                                        </span>
                                        <p>
                                            <?php echo $product->description ; ?>
                                        </p>
                                        <p>
                                            <strong> Recommended for <?php echo $product->age ;?> age </strong>
                                        </p>
                                        <?php if (get_class($product) === "Food") { ?>
                                            <ul>
                                                <li> Calories : kcal <?php echo $product->calories ?> </li>
                                                <li> Fat : <?php echo $product->fat ?> %</li>
                                            </ul>
                                        <?php } elseif (get_class($product) === "Toy") { ?>
                                            <ul>
                                                <li> Material: <?php echo $product->material ?> </li>
                                                <li> It sound :  <?php echo $product->thereIsSound() ?> </li>
                                            </ul>
                                        <?php } elseif (get_class($product) === "Structure") { ?>
                                            <ul>
                                                <li> Material: <?php echo $product-> material ?> </li>
                                                <li> Heaigth: Cm  <?php echo $product->heigthInCm ?> </li>
                                            </ul>
                                        <?php } ?>
                                        <span>
                                            € <?php echo $product->price ; ?>
                                        </span>
                                    </div>
                                    <div class="buy">
                                        <button class="btn btn-primary">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    
</body>
</html>