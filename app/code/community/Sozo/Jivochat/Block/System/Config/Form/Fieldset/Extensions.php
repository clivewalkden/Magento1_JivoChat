<?php
class Sozo_Jivochat_Block_System_Config_Form_Fieldset_Extensions extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $version = Mage::getConfig()->getModuleConfig("Sozo_Jivochat")->version;

        return '<span class="notice">' . $version . '</span>';
    }
}