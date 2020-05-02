<?php
namespace Participante;

use Participante\Controller\ControllerFactory;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ParticipanteController::class => Controller\ControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'participante' => [
                'type'    => Segment::class,
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/participante[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',

                        'defaults' => [
                        'controller'    => Controller\ParticipanteController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Participante' => __DIR__ . '/../view',
        ],
    ],
]
];
