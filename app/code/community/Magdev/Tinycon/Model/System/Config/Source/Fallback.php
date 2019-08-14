<?php
/**
 ##LICENSE_HEADER##
 *
 * @author magdev
 * @copyright 2013 magdev
 */


class Magdev_Tinycon_Model_System_Config_Source_Fallback
{
    public function toOptionArray()
    {
        return array(
            array('label' => Mage::helper('tinycon')->__('Yes'), 'value' => 1),
            array('label' => Mage::helper('tinycon')->__('No'), 'value' => 0),
            array('label' => Mage::helper('tinycon')->__('Force'), 'value' => 'force'),
        );
    }
}