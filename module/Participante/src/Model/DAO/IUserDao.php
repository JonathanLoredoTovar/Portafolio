<?php


namespace Participante\Model\DAO;

use Participante\Model\Entity\User;

interface IUserDao
{

    public function obtenerTodos();
    public function obtenerPorId($id);
    public function guardar(User $user);
    public function eliminar(User $user);
}