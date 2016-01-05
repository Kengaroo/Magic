<?php
//die('Ainstainer_Homepage module setup');
$installer = $this;
/* @var $installer Ainstainer_Homepage_Model_Resource_Setup */
$tableSlider = $installer->getTable('homepage/table_slider');
//die($tableSlider);
$installer->startSetup();

/**
 * Create table 'homepage/slider'
 */
/*
$installer->run(
		 "DROP TABLE IF EXISTS `homepage_slider`;
 		  CREATE TABLE `homepage_slider` 
 		(`slider_id` int(2) unsigned NOT NULL AUTO_INCREMENT,  
 		 `url` varchar(150) NOT NULL,
 		 `title` varchar(150) NOT NULL,   
		 `description` text,  
		 `status` ENUM('1','0') NOT NULL,  
		 `position` int(2) NOT NULL DEFAULT '1',   
 		  PRIMARY KEY (`slider_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8"); 
 		  
 		  
 		  'type' => 'INNODB',
'charset' => 'utf8',
*/
$installer->getConnection()->dropTable($tableSlider);

$table = $installer->getConnection()
    ->newTable($tableSlider)
    ->addColumn('slider_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ))
    ->addColumn('url', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
        ))        
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
        ))
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => false,
        ))
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_VARCHAR, 1, array(
        'nullable'  => false,
    	'default'   => '1',
		))
   	->addColumn('position', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
 		'nullable'  => false,

    ));
$installer->getConnection()->createTable($table);

$installer->endSetup();