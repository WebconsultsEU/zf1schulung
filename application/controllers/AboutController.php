<?php

class AboutController extends Zend_Controller_Action
{
    /**
     * gets zend db connection
     * @return Zend_Db_Adapter
     */
    private function _getDb()
    {
        return Zend_Registry::get('db');
    }
    public function init()
    {
        
        /* Initialize action controller here */
        
    }
    
    
    public function sqlAction()
    {
        $db = $this->_getDb();
        $query = $db->query("SELECT * from About");
        $query->execute();
        $result = $query->fetchAll();
        var_dump($result);
        exit;
    }
    
    public function indexAction()
    {
       
       $filter = new Zend_Filter_Alpha();
       $name = $filter->filter(
               $this->getRequest()->getParam('name')
               );
       
       $mapper = new Application_Model_AboutMapper();
       $this->view->about = $mapper->getByName($name);
       
       
        /* save ... 
        * $this->getDbTable()->insert($data);
            $id = $this->getDbTable()->getAdapter()->lastInsertId();
            $model = $this->find($id); */ 
       
       
    }
    
    public function nameAction()
    {
        
        //read data from table
        $table=$this->getDbTable();
             
        $select = $table->select()->where('name = ?', $artistName);

        if(! $row = $table->fetchRow($select)){
                return false;
        }
        
    }
    
    


}

