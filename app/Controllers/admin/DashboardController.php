<?php
// app/Controllers/Admin/DashboardController.php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->findAll();
        
        return view('admin/dashboard/index', $data);
    }
}
