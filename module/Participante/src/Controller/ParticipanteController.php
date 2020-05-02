<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Participante\Controller;

use Participante\Model\DAO\IUserDao;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ParticipanteController extends AbstractActionController
{
    private $userDao;

    public function __construct(IUserDao $userDao)
    {
        $this ->userDao = $userDao;
    }



    public function indexAction()
    {
        return [
            'titulo'=>'Lista de Usuarios',
            'usuarios'=>$this->userDao->obtenerTodos()

        ];
    }

    public function crearAction()
    {

    }
    public function editarAction()
    {

    }
    public function guardarAction()
    {

    }

    public function eliminarAction()
    {

    }
}
