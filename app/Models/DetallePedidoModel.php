<?php
// app/Models/DetallePedidoModel.php
namespace App\Models;

use CodeIgniter\Model;

class DetallePedidoModel extends Model
{
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pedido_id', 'producto_id', 'cantidad', 'precio'];

    public function getDetallesByPedido($pedido_id)
    {
        return $this->where('pedido_id', $pedido_id)
                    ->join('productos', 'productos.id = detalle_pedidos.producto_id')
                    ->select('detalle_pedidos.*, productos.nombre as producto_nombre')
                    ->findAll();
    }
}
