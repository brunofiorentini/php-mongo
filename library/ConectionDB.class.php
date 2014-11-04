<?php

/**
 * Description of PersonModel
 *
 * @author gmoliveira
 */
class ConectionDB {

    public $collection;

    function __construct() {

        $mongo = new MongoClient();
        $db = $mongo->people;
        $this->collection = $db->person;
        
    }

}

?>
