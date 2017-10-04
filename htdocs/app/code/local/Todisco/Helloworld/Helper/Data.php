<?php
/**
 * Created by PhpStorm.
 * User: Markozu
 * Date: 04/10/17
 * Time: 12:21
 *
 * Hello World
 *
 * Main Helper
 *
 * @author Marco Todisco
 * @package Frontend
 * @version 0.1.0
 */

class Todisco_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * getConfig
     *
     * @param string $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('todisco_helloworld/' . $config);
    }

    /**
     * isEnabled
     *
     * Return true if this module is enabled
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig('configuration/enabled');
    }
}
