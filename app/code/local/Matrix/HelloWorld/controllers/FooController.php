<?php
class Matrix_HelloWorld_FooController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo 'Foo Index Action';
        $this->loadLayout();
        $this->renderLayout();
        }

    public function addAction(){
        echo 'Foo add Action';
}

    public function deleteAction(){
        echo 'Foo delete Action';
        }
    }