<?php

class RequestController extends Zend_Controller_Action
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
      $request = $this->getRequest();
      
      if($request->isGet()) {
          echo "ist ein get Request";
          echo var_dump($request->getParam('blah'));
      } elseif ($this->isPost()) {
          echo "dies ist ein post request";
      }
      echo "<pre />";
      var_dump($request);
    }
    
    public function validateAction()
    {
        
        $email = 'john.behrens@zf2-oldenburg.de';
        $validator = new Zend_Validate_EmailAddress();
        if ($validator->isValid($email)) {
           echo "email is wohl okay";
        } else {
            // Email Adresse ist ungültig, drucke die Gründe hierfür
            foreach ($validator->getMessages() as $message) {
                echo "$message\n";
        }
        }
    }
    
    public function postDispatch()
    {
       
    }


}

