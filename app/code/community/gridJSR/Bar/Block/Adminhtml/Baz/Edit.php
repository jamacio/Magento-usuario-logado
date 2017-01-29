<?php
class gridJSR_Bar_Block_Adminhtml_Baz_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Init class
     */
    public function __construct()
    {
        $this->_blockGroup = 'gridJSR_bar';
        $this->_controller = 'adminhtml_baz';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('save'));
        $this->_updateButton('delete', 'label', $this->__('Delete'));
    }

    /**
     * Get Header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('gridJSR_bar')->getId()) {
            return $this->__('Edit');
        }
        else {
            return $this->__('New');
        }
    }
}
