<?php


namespace Participante;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

use Participante\Model\DAO\IUserDao;
use Participante\Model\DAO\UserDao;
use Participante\Model\Entity\User;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig() {
        return [
            'factories' => [
                'UserTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new User());
                    return new TableGateway('user', $dbAdapter, null, $resultSetPrototype);
                },
                IUserDao::class => function($sm) {
                    $tableGateway = $sm->get('UserTableGateway');
                    $dao = new UserDao($tableGateway);
                    return $dao;
                },
            ],
        ];
    }
}
