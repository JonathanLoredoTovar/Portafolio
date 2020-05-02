<?php


namespace Participante\Model\DAO;

use Zend\Db\TableGateway\TableGateway;
use Participante\Model\Entity\User;


class UserDao implements IUserDao
{

    protected $tableGateway;
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function obtenerTodos()
    {
        // TODO: Implement obtenerTodos() method.
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function obtenerPorId($id)
    {
        // TODO: Implement obtenerPorId() method.
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (!$row) {
            throw new \RuntimeException("No se pudo encontrar el Producto: $id");
        }
        return $row;
    }

    public function guardar(User $user)
    {
        // TODO: Implement guardar() method.
        $data = [
            'nombre' => $user->getNombre(),
            'apellido' => $user->getApellido(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            ];
        $id = (int) $user->getId();
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->obtenerPorId($id)) {
                $this->tableGateway->update($data, ['id' => $id]);
            } else {
                throw new \RuntimeException('Id del Usuario no existe');
            }
        }
    }


    public function eliminar(User $user)
    {
        // TODO: Implement eliminar() method.
        $this->tableGateway->delete(['id' => $user->getId()]);
    }
}