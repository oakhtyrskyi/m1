<?php
class TutsPlus_Demo_Controller_Router extends Mage_Core_Controller_Varien_Router_Standard
{
    public function match(Zend_Controller_Request_Http $request)
    {
        $request->setModuleName('test-frontname')
            ->setControllerName('index')
            ->setActionName('index');
 
        return true;
    }
 
}
?>

