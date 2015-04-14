<?php

require_once 'app/Mage.php';

Mage::app('admin');
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

$pr = Mage::getModel("catalog/product")->getCollection()->addAttributeToSelect(array('name','price'))->addFieldFilter('price'.array("gt"=>50));

foreach($pr as $p){
    var_dump($p);
   // die();
}

//echo '<pre>';
//echo $pr->delete();

//echo $pr->getMetaTitle();
/*
echo $pr->setMetaTitle("new")->save();

echo $pr->getMetaTitle();*/
?>

