<?php
class Ainstainter_Contacts_Block_Adminhtml_Cms_Message extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()
	{
		$this->_blockGroup = 'ainstainer_contacts';
		$this->_controller = 'adminhtml_message';
		$this->_headerText = Mage::helper('tcontacts')->__('Messages');

		parent::__construct();
		$this->_removeButton('add');
	}
}