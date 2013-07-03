<?php

class ResponseController extends Zend_Controller_Action
{

    
    
    public function init()
    {
        
    }
    
    public function preDispatch()
    {
         $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNeverRender(true);
    }
   

    public function indexAction()
    {
        $filter = new Zend_Filter_Alnum();
        $return = $filter->filter('This is (my) content: 123');
        // Gibt 'Thisismycontent123' zurück
        var_dump($return);
        
        
      
    }
    
    public function postDispatch()
    {
       
    }


}

