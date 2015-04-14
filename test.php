<?php

require_once 'app/Mage.php';

Mage::app();
/*
$test = new TutsPlus_Demo_Model_Product;
$test->sayHello(); 
*/
/*
echo 111;

$customer = Mage::getModel("customer/session");

Mage::getModel("catalog/product");

$product = Mage::getModel("demo/product");

$product->sayHello(); 

*/
//Mage::getModel("catalog/product");

$category = Mage::getModel("catalog/category")->load(4);
echo '<pre>';
var_dump($category->getChildren());


?>

