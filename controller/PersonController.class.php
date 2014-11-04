<?php

/**
 * Description of PersonController
 *
 * @author gmoliveira
 */
class PersonController {

    const INSERT_PERSON_SUCCESS = 'Pessoa inserida com sucesso.';
    const INSERT_PERSON_FAIL = 'A Pessoa não foi cadastrada. Deu erro, foda-se você.';

    public function create() {

        $personObject = new PersonObject();

        if ($personObject->setPerson()) {
            
            echo 'Funcionou'; exit;

            $personModel = new PersonModel();

            try {

                $response = $personModel->insert($personObject);

                if ($response['ok'] == 1) {

                    echo self::INSERT_PERSON_SUCCESS . '<br><br>';

                    $this->read();
                } else {

                    echo self::INSERT_PERSON_FAIL . '<br><br>';
                }
            } catch (Exception $exc) {

                echo $exc->getMessage();
            }
        } else {

            echo self::INSERT_PERSON_FAIL . '<br><br>';
            View::output('newPersonView');
        }
    }

    public function read() {

        $personModel = new PersonModel();

        try {

            $array['data'] = $personModel->getList();

            View::setParams($array);

            View::output('listPersonView');
        } catch (Exception $exc) {

            echo $exc->getMessage();
        }
    }

    public function update() {
        return 1;
    }

    public function delete() {
        return 1;
    }

}
