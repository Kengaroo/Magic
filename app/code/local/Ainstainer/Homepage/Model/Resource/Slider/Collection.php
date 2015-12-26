<?php
class Ainstainer_Homepage_Model_Resource_Slider_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
	public function _construct()
	{
		parent::_construct();
		$this->_init('homepage/slider');
	}

}