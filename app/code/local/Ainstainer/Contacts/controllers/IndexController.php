<?php
class Ainstainer_Contacts_IndexController extends Mage_Core_Controller_Front_Action {
	public function indexAction (){		
		$this->loadLayout();
		$this->renderLayout();
	}
	public function hiAction(){
		echo "Hi";
	}
}