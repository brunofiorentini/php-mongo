<?php

/**
 * Description of PersonModel
 *
 * @author gmoliveira
 */
class PersonModel extends BaseModel {

    public function __construct() {
        parent::__construct();
    }

    public function insert(PersonObject $personObject) {

        $params = array(
            'firstname' => $personObject->getFirstname(),
            'lastname' => $personObject->getLastname(),
            'age' => $personObject->getAge()
        );

        try {
            return $this->collection->insert($params);
        } catch (MongoException $e) {
            echo $e->getTraceAsString();
        }
    }

    public function getList() {
        
        try {
            
            return $this->collection->find();
            
        } catch (MongoException $e) {
            
            echo $e->getTraceAsString();
            
        }
    }

}

?>
