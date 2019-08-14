<?php
/**
 * Copyright (c) 2012 Marco Graetsch
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge,
 * publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 *
 * @package		Magdev_Tinycon
 * @author		Marco Graetsch <info@magdev.de>
 * @copyright	2012 Marco Graetsch
 */


/**
 * Fonsize model
 *
 * @author magdev
 */
class Magdev_Tinycon_Model_System_Config_Source_Fontsize
{
    public function toOptionArray()
    {
        return array(
            array('label' => Mage::helper('tinycon')->__('8px'), 'value' => 8),
            array('label' => Mage::helper('tinycon')->__('9px'), 'value' => 9),
            array('label' => Mage::helper('tinycon')->__('10px'), 'value' => 10),
            array('label' => Mage::helper('tinycon')->__('11px'), 'value' => 11),
            array('label' => Mage::helper('tinycon')->__('12px'), 'value' => 12),
        );
    }
}
?>