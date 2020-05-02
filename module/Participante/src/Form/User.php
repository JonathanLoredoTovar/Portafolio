<?php


namespace Participante\Form;
use Zend\Form\Form;
use Zend\Form\Element;

class User extends form
{
    public function __construct($name = null)
    {
        parent::__construct($name);
        $this->add([
            'name' => 'id',
            'type' => Element\Hidden::class,
        ]);
        $this->add([
            'type' => Element\Text::class,
            'name' => 'nombre',
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Nombre',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'type' => Element\Text::class,
            'name' => 'apellido',
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Apellido',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'type' => Element\Text::class,
            'name' => 'email',
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Email',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'type' => Element\Text::class,
            'name' => 'password',
            'attributes' => [
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Password',
                'label_attributes' => [
                    'class' => 'col-sm-2 control-label',
                ],
            ],
        ]);

        $this->add([
            'name' => 'send',
            'type' => Element\Submit::class,
            'attributes' => [
                'value' => 'Crear',
                'class' => 'btn btn-primary',
            ],
        ]);
    }

}