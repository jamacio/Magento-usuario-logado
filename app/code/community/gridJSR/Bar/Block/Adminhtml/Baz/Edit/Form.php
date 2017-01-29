<?php
class gridJSR_Bar_Block_Adminhtml_Baz_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Init class
     */
    public function __construct()
    {
        parent::__construct();

        $this->setId('gridJSR_bar_baz_form');
        $this->setTitle($this->__('Baz Information'));
    }

    /**
     * Setup form fields for inserts/updates
     *
     * return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $model = Mage::registry('gridJSR_bar');

        $form = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'    => Mage::helper('checkout')->__('Baz Information'),
            'class'     => 'fieldset-wide',
        ));

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('produto', 'select', array(
            'name'      => 'produto',
            'label'     => Mage::helper('checkout')->__('Produto'),
            'title'     => Mage::helper('checkout')->__('Produto'),
            'values'    => Mage::helper('gridJSR_bar')->_getProdutos(3),
            'required'  => true,
        ));

        $fieldset->addField('marca', 'select', array(
            'name'      => 'marca',
            'label'     => Mage::helper('checkout')->__('Marca'),
            'title'     => Mage::helper('checkout')->__('Marca'),
            'values'    => Mage::helper('gridJSR_bar')->_getAttributeOptions("marca"),
            'required'  => true,
        ));

        $fieldset->addField('url', 'text', array(
            'name'      => 'url',
            'label'     => Mage::helper('checkout')->__('Url'),
            'title'     => Mage::helper('checkout')->__('Url'),
            'required'  => true,
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
