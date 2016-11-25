<?php
class Sozo_Jivochat_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		$this->loadLayout();
		$this->getLayout()
		->getBlock('content')->append(
			$this->getLayout()->createBlock('sozo_jivochat/index'));
		$this->renderLayout();
	}
}