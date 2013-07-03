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
      $response = $this->getResponse();
      $response->setRedirect('http://www.web.de');
      
    }
    
    public function postDispatch()
    {
       
    }


}

