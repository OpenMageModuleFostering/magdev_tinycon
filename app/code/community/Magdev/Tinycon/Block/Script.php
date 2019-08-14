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
 * Insert Tinycon javascript
 *
 * @author magdev
 */
class Magdev_Tinycon_Block_Script extends Mage_Core_Block_Template
{
    public function isEnabled()
    {
        return Mage::getStoreConfig('design/tinycon/enabled');
    }
    
    
    public function getWidth()
    {
        if (!$this->getData('width')) {
            $this->setData('width', (int) Mage::getStoreConfig('design/tinycon/width'));
        }
        return $this->getData('width');
    }
    
    
    public function getHeight()
    {
        if (!$this->getData('height')) {
            $this->setData('height', (int) Mage::getStoreConfig('design/tinycon/height'));
        }
        return $this->getData('height');
    }
    
    
    public function getFont()
    {
        if (!$this->getData('font')) {
            $this->setData('font', $this->getFontsize().'px '.$this->getFontface());
        }
        return $this->getData('font');
    }
    
    public function getFontface()
    {
        if (!$this->getData('fontface')) {
            $this->setData('fontface', (string) Mage::getStoreConfig('design/tinycon/fontface'));
        }
        return $this->getData('fontface');
    }
    
    
    public function getFontsize()
    {
        if (!$this->getData('fontsize')) {
            $this->setData('fontsize', (string) Mage::getStoreConfig('design/tinycon/fontsize'));
        }
        return $this->getData('fontsize');
    }
    
    public function getColor()
    {
        if (!$this->getData('color')) {
            $this->setData('color', (string) Mage::getStoreConfig('design/tinycon/colour'));
        }
        return $this->getData('color');
    }
    
    
    public function getBackground()
    {
        if (!$this->getData('background')) {
            $this->setData('background', (string) Mage::getStoreConfig('design/tinycon/background'));
        }
        return $this->getData('background');
    }
    
    
    public function getFallback()
    {
        if (!$this->getData('fallback')) {
            $this->setData('fallback', Mage::getStoreConfig('design/tinycon/fallback'));
        }
        return $this->getData('fallback');
    }
    
    
    public function getAbbreviate()
    {
        if (!$this->getData('abbreviate')) {
            $this->setData('abbreviate', Mage::getStoreConfigFlag('design/tinycon/abbreviate'));
        }
        return $this->getData('abbreviate');
    }
    
    
    public function getCount()
    {
        if (!$this->getData('count')) {
            $this->setData('count', (int) Mage::helper('checkout/cart')->getSummaryCount());
        }
        return $this->getData('count');
    }
}
?>