<?php

class Application_Model_AboutMapper {
    
    private $_dbTable = null;
    
    public function __construct() {
        $this->_dbTable = new Application_Model_DbTable_About();
        
    }
    
    /**
     * Gets Model By Name
     * @param type $name
     * @return Application_Model_About
     */
    public function getByName($name) {
        
        $select = $this->_dbTable->select()->where('name = ?', $name);

        if(! $row = $this->_dbTable->fetchRow($select)){
                return null;
        }
       
       $about = new Application_Model_About();
       $about = $this->mapRow($about, $row);
       return $about;
    }
    
       /**
     * Maps an Row on a Model Object
     * @param Dynmodel_Model $model
     * @param <type> $row
     */
    protected function mapRow(Application_Model_About $model, $row)
    {
        $model = new Application_Model_About();
        
        if (!is_array($row)) {
            $rowArr = $row->toArray();
        } else {
            $rowArr = $row;
        }        
        $model->setId($rowArr['id']);
        $model->setName($rowArr['name']);
        $model->setText($rowArr['text']);
        
        return $model;

    }
        
}