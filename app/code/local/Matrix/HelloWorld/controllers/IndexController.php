<?php
class Matrix_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo "dddd";
       // Zend_Debug::dump($this->getLayout()->getUpdate()->getHandles());
//        echo '<hr>
//          <p><u> coming from phtml template </u></p>
//';
        $this->loadLayout();
        $this->renderLayout();
    }
    public function goodbyeAction() {
        echo 'Good World!';
    }
    public function paramsAction() {
        echo '<dl>';
        foreach($this->getRequest()->getParams() as $key=>$value) {
            echo '<dt><strong>Param:</strong>'.$key.'</dt>';
            echo '<dt><strong>Value: </strong>'.$value.'</dt>';
        }
        echo '</dl>';
    }
}