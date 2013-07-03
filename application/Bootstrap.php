<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initConfig() 
    {                  
          $config = new Zend_Config($this->getOptions());          
          Zend_Registry::set('config', $config);
          return $config;
    }
      
            
/**
 * Init the error handler
 * @return Zend_Controller_Plugin_ErrorHandler 
 */      
      protected function _initErrorHandling()
      {
        $frontController = Zend_Controller_Front::getInstance();
        $plugin = new Zend_Controller_Plugin_ErrorHandler(
            array(
                'module' => 'default',
                'controller' => 'error',
                'action' => 'error'
            )
        );
        $frontController->registerPlugin($plugin);

        return $plugin;
      }
      
      protected function _initRouting()
      {     
                
          $ctrl = Zend_Controller_Front::getInstance();
          
          $aboutRoute = new Zend_Controller_Router_Route(
              'about/:name/*',
              array(                    
                  'name'     => '',
                  'controller' => 'About',
                  'action'     => 'index'
             )
          );
                               
          $ctrl->getRouter()->addRoute('about', $aboutRoute);
      }
      
      
       protected function _initDb(){
     
      $configDb = Zend_Registry::get('config')->resources->db;
      //$configDb = $config->db;
      try{
        //db connection factory
        $db = Zend_Db::factory($configDb);
        $db->setFetchMode(Zend_Db::FETCH_OBJ);
        
        //Firebug profiler definieren
        $profiler = new Zend_Db_Profiler_Firebug('All DB Queries');
        $profiler->setEnabled(true); 
        $db->setProfiler($profiler); 
        
        Zend_Registry::set('db', $db);
        //set default adapter
        Zend_Db_Table::setDefaultAdapter($db);
      }catch (Zend_Db_Adapter_Exception $e) {
            echo "DB Connection Error"; exit;
      } catch (Zend_Exception $e) {
            echo "other DB Connection Error"; exit;
      }
   }

}

