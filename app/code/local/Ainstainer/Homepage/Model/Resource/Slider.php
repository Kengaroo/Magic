<?php
class Ainstainer_Homepage_Model_Resource_Slider extends Mage_Core_Model_Mysql4_Abstract
{

	public function _construct()
	{
		$this->_init('homepage/table_slider', 'slider_id');
	}

}