<?php
// app/Controllers/Admin/CategoriaController.php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        $data['categorias'] = $categoriaModel->findAll();

        return view('admin/categorias/index', $data);
    }

    public function create()
    {
        return view('admin/categorias/create');
    }

    public function store()
    {
        $categoriaModel = new CategoriaModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
        ];

        $categoriaModel->save($data);

        return redirect()->to('/admin/categorias');
    }
    public function edit($id)
{
    $categoriaModel = new CategoriaModel();
    $data['categoria'] = $categoriaModel->find($id);

    return view('admin/categorias/edit', $data);
}

public function update($id)
{
    $categoriaModel = new CategoriaModel();

    $data = [
        'nombre' => $this->request->getPost('nombre')
    ];

    if ($categoriaModel->update($id, $data)) {
        return redirect()->to('/admin/categorias');
    } else {
        return redirect()->back()->withInput()->with('errors', $categoriaModel->errors());
    }
}



public function delete($id)
{
    $categoriaModel = new CategoriaModel();
    $categoriaModel->delete($id);

    return redirect()->to('/admin/categorias');
}

}

