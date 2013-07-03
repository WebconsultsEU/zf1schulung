<?php

class IndexController extends Zend_Controller_Action
{

    public $someVar = "noch nichts"; 
    
    public function init()
    {
        echo "init is executed first<br />";
        /* Initialize action controller here */
        
    }
    
    public function preDispatch()
    {
        $this->someVar = "pre Dispatch war schon da";
        echo "than follows preDispatch<br />";
    }
   

    public function indexAction()
    {
      echo $this->someVar; 
      echo "the action follows<br />";
    }
    
    public function postDispatch()
    {
       echo "post Dispatch at the end<br />"; 
    }


}

