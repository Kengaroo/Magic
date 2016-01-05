<?php
class Ainstainer_Contacts_Model_Resource_Message extends Mage_Core_Model_Mysql4_Abstract
{
	public function _construct()
	{
		$this->_init('ainstainer_contacts/table_message', 'message_id');
	}

}