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
 * Fontface Source-Model
 *
 * @author magdev
 */
class Magdev_Tinycon_Model_System_Config_Source_Fontface
{
    public function toOptionArray()
    {
        return array(
            array('label' => Mage::helper('tinycon')->__('Arial'), 'value' => 'Arial'),
            array('label' => Mage::helper('tinycon')->__('Verdana'), 'value' => 'Verdana'),
            array('label' => Mage::helper('tinycon')->__('Georgia'), 'value' => 'Georgia'),
            array('label' => Mage::helper('tinycon')->__('Helvetica'), 'value' => 'Helvetica'),
            array('label' => Mage::helper('tinycon')->__('Times New Roman'), 'value' => '"Times New Roman"'),
        );
    }
}
?>