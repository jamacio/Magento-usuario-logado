<?php
class gridJSR_Bar_Helper_Data extends Mage_Core_Helper_Abstract
{

    function _getAttributeOptions($attribute_code)
    {
        $supplier_options = array();
        $supplier_items = Mage::getModel('eav/entity_attribute_option')->getCollection()
            ->setStoreFilter()
            ->join('attribute','attribute.attribute_id=main_table.attribute_id', 'attribute_code');

        foreach ($supplier_items as $supplier_item) {
            if ($supplier_item->getAttributeCode() == $attribute_code)
                $supplier_options[$supplier_item->getOptionId()] = $supplier_item->getValue();
        }

        return $supplier_options;
    }

    function  _getProdutos($id){
        $products = Mage::getModel('catalog/category')->load($id); //id da categoria
        $productslist = $products->getProductCollection()->addAttributeToSelect('*');

        foreach ($productslist as $product) {

            $_catItems[$product->getId()] = $product->getName();
        }
        return $_catItems;
    }


}