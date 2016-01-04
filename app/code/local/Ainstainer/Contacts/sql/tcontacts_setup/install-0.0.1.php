<?php
//die('Ainstainer_Contacts module setup');
$installer = $this;
/* @var $installer Ainstainer_Homepage_Model_Resource_Setup */
//$tableSlider = $installer->getTable('homepage/table_slider');
//die($tableSlider);
$installer->startSetup();

/**
 * Create table 'contacts/messages'
 */

$installer->run(
		 "DROP TABLE IF EXISTS `contacts_messages`;
 		  CREATE TABLE `contacts_messages` 
 		(`message_id` int(2) unsigned NOT NULL AUTO_INCREMENT,  
 		 `name` varchar(150) NOT NULL,
 		 `email` varchar(150) NOT NULL, 
		 `phone` varchar(150) NOT NULL,
		 `description` text,   
 		  PRIMARY KEY (`message_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8"); 
 		  
/*
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
*/
$installer->endSetup();