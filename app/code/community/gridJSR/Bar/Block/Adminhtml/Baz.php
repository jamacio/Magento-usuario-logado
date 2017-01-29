<?php
class gridJSR_Bar_Block_Adminhtml_Baz extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        // The blockGroup must match the first half of how we call the block, and controller matches the second half
        // ie. gridJSR_bar/adminhtml_baz
        $this->_blockGroup = 'gridJSR_bar';
        $this->_controller = 'adminhtml_baz';
        $this->_headerText = $this->__('Link Atributos');

        parent::__construct();
    }
}
