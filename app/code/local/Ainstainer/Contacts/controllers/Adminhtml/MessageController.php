<?php
class Ainstainer_Contacts_Adminhtml_MessageController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		$this->_title($this->__('Cms'))->_title($this->__('Messages'));
		$this->loadLayout();
		$this->_setActiveMenu('Cms/cms');
		$this->_addContent($this->getLayout()->createBlock('ainstainer_contacts/adminhtml_cms_message'));
		$this->renderLayout();
	}

	public function gridAction()
	{
		$this->loadLayout();
		$this->getResponse()->setBody(
				$this->getLayout()->createBlock('ainstainer_contacts/adminhtml_cms_message_grid')->toHtml()
		);
	}

	public function exportAinstainerCsvAction()
	{
		$fileName = 'messages.csv';
		$grid = $this->getLayout()->createBlock('ainstainer_contacts/adminhtml_cms_message_grid');
		$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
	}

	public function exportAinstainerExcelAction()
	{
		$fileName = 'message_ainstainer.xml';
		$grid = $this->getLayout()->createBlock('ainstainer_contacts/adminhtml_cms_message_grid');
		$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
	}
}