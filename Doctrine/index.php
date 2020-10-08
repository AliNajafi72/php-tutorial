<?php

require_once "./bootstrap.php";
require_once "./EntityFiles/Product.php";

//$product = new Product();
//$product->setName("Nike AirMax");
//$product->setPrice(12000);
//$entityManager->persist($product);
//$entityManager->flush();

$product = $entityManager->find('Product', 1);
echo $product->getId() . "|||" . $product->getName() . "|||" . $product->getPrice();