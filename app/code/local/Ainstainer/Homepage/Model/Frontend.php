<?php
class Ainstainer_Homepage_Model_Frontend extends Mage_Eav_Model_Entity_Attribute_Frontend_Abstract
{
    public function getValue(Varien_Object $object)
    {
        $slider = Mage::getModel('ainstainer_homepage/slider')->load($object->getSliderId());
        return $slider->getDscr();
    }
}