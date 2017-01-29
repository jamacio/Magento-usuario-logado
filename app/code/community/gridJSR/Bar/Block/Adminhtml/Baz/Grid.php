<?php
class gridJSR_Bar_Block_Adminhtml_Baz_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        // Set some defaults for our grid
        $this->setDefaultSort('id');
        $this->setId('gridJSR_bar_baz_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _getCollectionClass()
    {
        // This is the model we are using for the grid
        return 'gridJSR_bar/baz_collection';
    }

    protected function _prepareCollection()
    {
        // Get and set our collection for the grid
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        // Add the columns that should appear in the grid
        $this->addColumn('id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'right',
                'width' => '50px',
                'index' => 'id'
            )
        );

        $this->addColumn('produto',
            array(
                'header'=> $this->__('Produto'),
                'index' => 'produto',
                'type'   => 'options',
                'options' => Mage::helper('gridJSR_bar')->_getProdutos(3),
            )
        );

        $this->addColumn('marca',
            array(
                'header'=> $this->__('Marca'),
                'index' => 'marca',
                'type'   => 'options',
                'options' => Mage::helper('gridJSR_bar')->_getAttributeOptions("marca"),

            )
        );


        $this->addColumn('url',
            array(
                'header'=> $this->__('Url'),
                'index' => 'url'
            )
        );

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        // This is where our row data will link to
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}