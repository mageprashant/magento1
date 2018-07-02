<?php
require '../app/Mage.php';
umask(0);
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
ini_set('display_errors', 1);

$adminUserModel = Mage::getModel('admin/user');
$userCollection = $adminUserModel->getCollection()->load(); 
echo "<pre>"; print_r($userCollection->getData()); exit;
Mage::log($userCollection->getData());
