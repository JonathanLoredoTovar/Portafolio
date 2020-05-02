<?php


namespace Participante\Controller;


use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

use Participante\Model\DAO\IUserDao;

class ControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $controller = null;
        switch ($requestedName){
            case ParticipanteController::class:
                $userDao = $container->get(IUserDao::class);
                $controller = new ParticipanteController($userDao);
                break;
            default:
                return (null===$options) ? new $requestedName :new $requestedName($options);
        }
        return $controller;
    }
}