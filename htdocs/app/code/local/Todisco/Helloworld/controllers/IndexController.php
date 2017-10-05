<?php
/**
 * Created by PhpStorm.
 * User: Markozu
 * Date: 04/10/17
 * Time: 12:46
 *
 * Hello World
 *
 * Hello World Index Controller
 *
 * @author Marco Todisco
 * @package Frontend
 * @version 0.1.0
 */

class Todisco_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}

