<?php
class Ainstainer_Homepage_Model_Link extends Varien_Object
{
	public function getAllOptions() {
		$options = Mage::getResourceModel('ainstainer_homepage/slider_collection')
		->toOptionArray();
		array_unshift($options, array('value'=>'', 'label'=>Mage::helper('catalog')->__('-- Please Select --')));
		return $options;
	}
}