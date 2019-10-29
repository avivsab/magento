<?php

class  Matrix_HelloWorld_MessagesController extends Mage_Core_Controller_Front_Action
{

    public function indexAction(){
        echo ' Index Action';
    }
    public function goodAction()
    {
        echo 'another route from MessagesController.php file';
    }
}