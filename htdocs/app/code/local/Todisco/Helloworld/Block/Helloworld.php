<?php
/**
 * Created by PhpStorm.
 * User: Markozu
 * Date: 05/10/17
 * Time: 17:23
 *
 * Hello World
 *
 * Main Helper
 *
 * @author Marco Todisco
 * @package Frontend
 * @version 0.1.0
 */

class Todisco_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * isEnabled
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::helper('todisco_helloworld')->isEnabled();
    }

    /**
     * getMessage
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper('todisco_helloworld')->getConfig('configuration/message');
    }
}
