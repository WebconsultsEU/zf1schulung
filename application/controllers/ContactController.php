<?php

class ContactController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        
    }
    
    public function indexAction()    
    {
        $form = new Application_Form_Contact();
        
        if( $this->getRequest()->isPost() ) {
            if($form->isValid($this->getRequest()->getParams())) {
            
                echo "hast du gut gemacht junge";
            }
        }
        
        
        $this->view->form = $form;
       
    }
    
    
    public function eachAction()    
    {
        $form = new Application_Form_Contact();
        
        if( $this->getRequest()->isPost() ) {
            if($form->isValid($this->getRequest()->getParams())) {
            
                echo "hast du gut gemacht junge";
            }
        }
        
        
        $this->view->form = $form;
       
    }
    
    public function seperateAction()    
    {
        $form = new Application_Form_Contact();
        
        if( $this->getRequest()->isPost() ) {
            if($form->isValid($this->getRequest()->getParams())) {
            
                echo "hast du gut gemacht junge";
            }
        }
        
        
        $this->view->form = $form;
       
    }
    


}

