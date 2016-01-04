<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute('catalog_product', 'slider_id', array(
    #'position'          => 1,
    #'user_defined'      => 1,
    #'searchable'        => 0,
    #'filterable'        => 0,
    #'comparable'        => 0,
    #'visible_on_front'  => 1,
    #'visible_in_advanced_search' => 0,
    #'is_configurable'   => 0,    
    #'unique'            => 0,
    'type'     => 'int',
    'label'    => 'Slider',
    'input'    => 'select',
    'source'   => 'ainstainer_homepage/link',
    'frontend' => 'ainstainer_homepage/frontend',
    'global'   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'required' => true,
    'default'  => 0,
    'visible'           => 1,
    'visible_on_front'  => 1
));
 
$installer->endSetup();