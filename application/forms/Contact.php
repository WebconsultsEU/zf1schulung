<?php


class Application_Form_Contact extends Zend_Form {
    
    /**
     * Formularfelder werden Definiert
     */
    public function init()
    {
        
        /**
         * wir fügen ein text field für den namen hinzu
         */
        $this->addElement(
            new Zend_Form_Element_Text(
                    'name',
                    array(
                        'required' => true,
                        'label' => 'Name:',
                        'filters' => array(
                         //filter StringTrim und StringToLower werden hinzugefügt
                            'StringTrim',
                            'StringToLower'
                         ),
                        'validators' => array(
                         //Validator Allnum wird hinzugefügt
                            'Alnum'
                            )
                        )
            )
        );
     
        
        $this->addElement(
            new Zend_Form_Element_Text('email', array(
                    'required'   => true,
                    'label'      => 'Email:',
                    'filters'    => array('StringTrim'),
                    'validators' => array(
                        'NotEmpty',
                        array('StringLength', false, array(6))
                    )
                )));

      
        $this->addElement(
                new Zend_Form_Element_Textarea('message',  array(
                    'validators' => array(
                    'NotEmpty',
                        array('StringLength', false, array(6))
                    )
        )));

       
        
        
       //submit button hinzugefügt
       $this->addElement( 
                new Zend_Form_Element_Submit('submit',
                        array(


        )));
    }
}