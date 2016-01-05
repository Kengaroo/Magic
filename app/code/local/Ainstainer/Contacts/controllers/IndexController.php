<?php
class Ainstainer_Contacts_IndexController extends Mage_Core_Controller_Front_Action {
	public function indexAction (){	
		$this->loadLayout();
		$this->renderLayout();
	}
	public function hiAction(){
		echo "Hi";
	}
	public function saveAction(){
	/*	$message = Mage::getModel('ainstainer_contacts/message'); 
		$name 		 = isset($_POST['name'])   		? $_POST['name']  		 : '';
		$email 		 = isset($_POST['email']) 		? $_POST['email'] 		 : '';
		$phone 		 = isset($_POST['phone']) 		? $_POST['phone'] 		 : '';
		$description = isset($_POST['description']) ? $_POST['description']  : '';
		
		$message   ->setName($name)
    			   ->setEmail($email)
    			   ->setPhone($phone)
    			   ->setDescription($description)
    			   ->save();*/
		if($this->getRequest()->getPost())
		{
			$message = Mage::getModel('ainstainer_contacts/message'); 
			$name 		 = $this->getRequest()->getPost('name');
			$email 		 = $this->getRequest()->getPost('email');
			$phone 		 = $this->getRequest()->getPost('phone');
			$description = $this->getRequest()->getPost('description');

			$message   ->setName($name)
				->setEmail($email)
				->setPhone($phone)
				->setDescription($description)
				->save(); 
		}
		$this->loadLayout();
		$this->renderLayout();
	}
}