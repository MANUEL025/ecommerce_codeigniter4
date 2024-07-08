<?php
// app/Controllers/PedidoController.php

namespace App\Controllers;

use App\Models\PedidoModel;
use App\Models\DetallePedidoModel;

class PedidoController extends BaseController
{
    public function index()
    {
        $pedidoModel = new PedidoModel();

        $perPage = 10;
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;

        $data['pedidos'] = $pedidoModel->paginate($perPage);
        $data['pager'] = $pedidoModel->pager;

        return view('pedidos/index', $data);
    }

    public function view($id)
    {
        $pedidoModel = new PedidoModel();
        $detallePedidoModel = new DetallePedidoModel();

        $data['pedido'] = $pedidoModel->find($id);
        $data['detalles'] = $detallePedidoModel->getDetallesByPedido($id);

        return view('pedidos/view', $data);
    }

    public function search()
    {
        $pedidoModel = new PedidoModel();
        $searchTerm = $this->request->getVar('search');

        $data['pedidos'] = $pedidoModel->like('usuario_nombre', $searchTerm)
                                       ->orLike('status', $searchTerm)
                                       ->paginate(10);
        $data['pager'] = $pedidoModel->pager;

        return view('pedidos/index', $data);
    }
}
