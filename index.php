<?php 
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toy.php';
require __DIR__ . '/models/Sit.php';


$necon = new Food('Necon','Necon',new Category('Dog',true),43,'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSbKglbWdh-r_izHbZxlaBTQFXyaYxCtvgGXb4L4Xv1JvpJG268N3S4zNvdHKUk5clMtrZoylOVjA16qxn0uWFbsMfbz0sl1A&usqp=CAE',12,'Meat','Enjoyable',true);

$felix = new Food('Felix','Purina',new Category('Cat',true), 5,'https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/7/07613287484147_c1n1_44102442.jpg',1,'Meat','Fibers',true);

$trixie = new Toy('Trixie','Trixie',new Category('Dog',true),20 ,'https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg','Big',true);

$zolia = new Toy('Zolia','Zolia',new Category('Cat',true),25,'https://static.zoomalia.com/prod_img/101481/lm_1309b8619251a19057cff70779273e95aa61623855511.jpg','Small',false);


$idMark = new Sit('CatHome','IdMarket',new Category('Cat',true),100,'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTTIehtm1CgeGKT7bGmHMSr-hfMGmZPAuANVYmcE9PZ8W5I01szzpLVcrtia5Wc3o1-NflE2U34MwlUBKYaItAhslYPPuCIug&usqp=CAE',true,'Big','All');

$outDog = new Sit('Cleo','Zolia',new Category('Dog',true),70,'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQSskDaHr2aJv2IHgX9ymIw5M-3_qaY0CfIMO76Mg7GOx7y8mHHPqJmdUtJ7NnW_4M4Qb4NM4jX1n1Dj5KAmIsKeJdafm46LQ&usqp=CAE',true,'Big','All');


$listCard = [$necon,$felix,$trixie,$zolia,$idMark,$outDog];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Pet Shop</title>
  <style>
    .ib-cont{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
    }
  </style>
</head>
<body>

<div class="container ib-cont">
      <?php foreach($listCard as $item): ?>

     <div class="card ib-card mb-5 mt-5" style="width: 18rem;">
       <img src="<?php echo $item -> image  ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $item -> name  ?></h5>
        <p> <?php echo $item -> brand ?> </p>
        <p> </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>



  
</body>
</html>