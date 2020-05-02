<?php


namespace Participante\Form;

use Zend\InputFilter\InputFilter;


class UserValidator extends InputFilter
{
    public function __construct() {
        $this->add([
            'name' => 'id',
            'filters' => [
                ['name' => 'Int'],
            ],
        ]);
        $this->add([
            'name' => 'nombre',
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                [
                    'name' => 'Alpha',
                    'options' => [
                        'allowWhiteSpace' => true,
                    ],
                ],
            ],
        ]);
        $this->add([
            'name' => 'apellido',
            'validators' => [
                [
                    'name' => 'Alpha',
                ],
            ],
        ]);
        $this->add([
            'name' => 'email',
            'validators' => [
                [
                    'name' => 'EmailAddress',
                ],
            ],
        ]);

        $this->add([
            'name' => 'password',
            'validators' => [
                [
                    'name' => 'Alnum',
                ],
            ],
        ]);
    }

}