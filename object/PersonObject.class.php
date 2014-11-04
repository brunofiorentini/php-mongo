<?php

/**
 * Description of PersonObject
 *
 * @author gmoliveira
 */
class PersonObject {

    private $id, $firstname, $lastname, $age;

    public function getId() {
        return $this->id;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getAge() {
        return $this->age;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setPerson() {
        
        $first = filter_input(INPUT_POST, 'firstname');
        $last = filter_input(INPUT_POST, 'lastname');
        $age = filter_input(INPUT_POST, 'age');

        if ($first == false || $last == false || $age == false)
            return 0;
        else
            return 1;
    }

}
