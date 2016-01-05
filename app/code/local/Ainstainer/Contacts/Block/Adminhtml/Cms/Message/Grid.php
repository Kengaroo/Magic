<?php
class Ainstainter_Contacts_Block_Adminhtml_Cms_Message_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	public function __construct()
	{
		parent::__construct();
		$this->setId('ainstainer_contacts_grid');
		$this->setDefaultSort('message_id');
		$this->setDefaultDir('DESC');
		$this->setSaveParametersInSession(true);
		$this->setUseAjax(true);
	}

	protected function _prepareCollection()
	{
		$collection = Mage::getResourceModel($this->_getCollectionClass());//('ainstainer_contacts_model/message_collection');
		$this->setCollection($collection);
		parent::_prepareCollection();
		return $this;
	}

	protected function _prepareColumns()
	{
		$helper = Mage::helper('ainstainer_contacts');

		$this->addColumn('message_id', array(
				'header' => $helper->__('Order #'),
				'index'  => 'message_id'
		));

		$this->addColumn('name', array(
				'header' => $helper->__('Name'),
				'index'  => 'name'
		));

		$this->addColumn('email', array(
				'header'       => $helper->__('e-mail'),
				'index'        => 'email'
		));

		$this->addColumn('phone', array(
				'header'       => $helper->__('Phone'),
				'index'        => 'phone',
		));

		$this->addColumn('Description', array(
				'header' => $helper->__('Message'),
				'index'  => 'city'
		));

		$this->addExportType('*/*/exportAinstainerCsv', $helper->__('CSV'));
		$this->addExportType('*/*/exportAinstainerExcel', $helper->__('Excel XML'));

		return parent::_prepareColumns();
	}

	public function getGridUrl()
	{
		return $this->getUrl('*/*/grid', array('_current'=>true));
	}
}