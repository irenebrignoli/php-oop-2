<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/Kennel.php";
require_once __DIR__ . "/Models/Category.php";

$dog = new Category('Dog','fa-solid fa-cat fs-4');
$cat = new Category('Cat','fa-solid fa-dog fs-4');

$croquettes = new Food('Kitten Pollame', [$cat], 'Feringa', 'img/pollame.jpg', 4.99);
$croquettes->type ='dry';
$croquettes->age ='young';
$croquettes->for_sterilised ='no';
//var_dump($croquettes);

$polloSqueak = new Toy('polletto-squeak', [$dog], 'Zooplus', 'img/pollo.jpg', 1.79);
$polloSqueak->material = 'latex';
$polloSqueak->type = 'chew toy';
//var_dump($polloSqueak);


$lettoFluffy = new Kennel('Letto morbido Fluffy 2in1',[$dog, $cat], 'Zooplus', 'img/letto.jpg', 15.49);
$lettoFluffy->material = 'nylon';
$lettoFluffy->size = 'L 50 x P 42 x H 7,5 cm';
$lettoFluffy->ambient = 'inside';
$lettoFluffy->color = 'white';
//var_dump($lettoFluffy);

$productList =[
  $croquettes,
  $polloSqueak,
  $lettoFluffy
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">

  <title>Boolpet shop</title>
</head>

<body class="bg-success bg-opacity-75">
  <div class="container">
    <h1 class="text-center  text-white my-5 fs-1">Choose your pet product</h1>

    <div class="row">

    <?php foreach($productList as $product){?>
      <div class="col">
        <div class="card">
          <div class="card-body d-flex justify-content-between">
            <div>
              <h5 class="card-title fw-bold"><?php echo $product->name ?></h5>
              <div class="card-text"><?php echo $product->brand ?></div>
            </div>
            <?php foreach($product->categories as $category) {?>
              <i class="<?php echo $category->icon;?>"></i>
            <?php } ?>
          </div>
          <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
          <div class="card-body d-flex justify-content-between">
            <span class="card-text"><?php echo $product->getPrice() ?>€</span>
            <span class="card-text">
              <?php if($product->getClassName() == 'Food'){?>
                Tipo: <?php echo $product->type;?>
                <?php } else if ($product->getClassName() == 'Toy'){?>
                  Tipo: <?php echo $product->type;?>
                  <?php } else if ($product->getClassName() == 'Kennel'){?>
                    Ambiente: <?php echo $product->ambient;?>
              <?php } ?>
            </span>
          </div>
        </div>
      </div>
    <?php } ?>

    </div>
    

  </div>
  
</body>

</html>