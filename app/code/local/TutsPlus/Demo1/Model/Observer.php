<?php
    
class TutsPlus_Demo1_Model_Observer{
    
    public function logCustomer($observer){

        $customer = $observer->getCudtomer();
        Mage::log($customer->getName()) . " has logged in!", null, "customer.log";

    }
}
?>

