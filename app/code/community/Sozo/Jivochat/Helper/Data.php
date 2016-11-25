<?php
class Sozo_Jivochat_Helper_Data extends Mage_Core_Helper_Abstract {
	const XML_JIVOCHAT_ENABLED = 'sozo_jivochat/general/enabled';
	const XML_JIVOCHAT_WIDGET_ID = 'sozo_jivochat/chatsetup/widget_id';

	public function isEnabled($store = null)
	{
		return Mage::getStoreConfigFlag(self::XML_JIVOCHAT_ENABLED, $store);
	}

	public function getWidgetId($store = null)
	{
		return Mage::getStoreConfig(self::XML_JIVOCHAT_WIDGET_ID, $store);
	}
}
