<?php
// app/Models/PedidoModel.php
namespace App\Models;

use CodeIgniter\Model;

class PedidoModel extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'total', 'status', 'fecha'];

    public function getPedidosWithUsuario()
    {
        return $this->select('pedidos.*, usuarios.nombre as usuario_nombre')
                    ->join('usuarios', 'usuarios.id = pedidos.usuario_id')
                    ->findAll();
    }
}
