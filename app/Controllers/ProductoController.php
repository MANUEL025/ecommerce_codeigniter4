<?php
// app/Controllers/ProductoController.php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $perPage = 10;
        $page = $this->request->getVar('page') ? $this->request->getVar('page') : 1;

        $data['productos'] = $productoModel->paginate($perPage);
        $data['pager'] = $productoModel->pager;

        return view('productos/index', $data);
    }

    public function view($id)
    {
        $productoModel = new ProductoModel();
        $data['producto'] = $productoModel->find($id);

        return view('productos/view', $data);
    }
}
