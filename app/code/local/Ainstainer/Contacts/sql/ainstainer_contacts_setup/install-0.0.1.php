<?php
//die('Ainstainer_Contacts module setup');
$installer = $this;
/* @var $installer Ainstainer_Contacts_Model_Resource_Setup */
$tableMessage = $installer->getTable('ainstainer_contacts/table_message');
//die($tableMessage);
$installer->startSetup();

/**
 * Create table 'contacts/messages'
 */
/*
$installer->run(
		 "DROP TABLE IF EXISTS `contacts_messages`;
 		  CREATE TABLE `contacts_messages` 
 		(`message_id` int(2) unsigned NOT NULL AUTO_INCREMENT,  
 		 `name` varchar(150) NOT NULL,
 		 `email` varchar(150) NOT NULL, 
		 `phone` varchar(150) NOT NULL,
		 `description` text,   
 		  PRIMARY KEY (`message_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8"); 
*/

$installer->getConnection()->dropTable($tableMessage);

$table = $installer->getConnection()
    ->newTable($tableMessage)
    ->addColumn('message_id', Varien_Db_Ddl_Table::TYPE_INTEGER, '', array(
        'identity'  => true,
    	'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, '100', array(
        'nullable'  => false,
        ))        
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, '100', array(
        'nullable'  => false,
        ))
    ->addColumn('phone', Varien_Db_Ddl_Table::TYPE_VARCHAR, '100', array(
        'nullable'  => false,
        ))
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
        ))
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => true,
		));
$installer->getConnection()->createTable($table);

$installer->endSetup();