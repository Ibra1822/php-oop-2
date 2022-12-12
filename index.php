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



<?php 
require __DIR__ . '/Views/head.php';

require __DIR__ . '/Views/header.php';

require __DIR__ . '/Views/body.php';
?>


