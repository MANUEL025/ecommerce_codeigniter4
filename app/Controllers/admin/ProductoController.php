<?php
// app/Controllers/Admin/ProductoController.php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->findAll();

        return view('admin/dashboard/index', $data);
    }

    public function create()
    {
        return view('admin/productos/create');
    }

    public function store()
    {
        $productoModel = new ProductoModel();

        $data = $this->request->getPost();
        
        // Manejo de la carga de imágenes
        $file1 = $this->request->getFile('productimage1');
        if ($file1->isValid() && !$file1->hasMoved()) {
            $newName1 = $file1->getRandomName();
            $file1->move('uploads/productos', $newName1);
            $data['productimage1'] = $newName1;
        }

        $file2 = $this->request->getFile('productimage2');
        if ($file2->isValid() && !$file2->hasMoved()) {
            $newName2 = $file2->getRandomName();
            $file2->move('uploads/productos', $newName2);
            $data['productimage2'] = $newName2;
        }

        $file3 = $this->request->getFile('productimage3');
        if ($file3->isValid() && !$file3->hasMoved()) {
            $newName3 = $file3->getRandomName();
            $file3->move('uploads/productos', $newName3);
            $data['productimage3'] = $newName3;
        }

        if ($productoModel->insert($data)) {
            return redirect()->to('/admin/productos')->with('success', 'Producto agregado exitosamente.');
        } else {
            return redirect()->back()->withInput()->with('errors', $productoModel->errors());
        }
    }

    public function edit($id)
    {
        $productoModel = new ProductoModel();
        $data['producto'] = $productoModel->find($id);

        return view('admin/productos/edit', $data);
    }

    public function update($id)
    {
        $productoModel = new ProductoModel();

        $data = $this->request->getPost();
        
        // Manejo de la carga de imágenes
        $file1 = $this->request->getFile('productimage1');
        if ($file1->isValid() && !$file1->hasMoved()) {
            $newName1 = $file1->getRandomName();
            $file1->move('uploads/productos', $newName1);
            $data['productimage1'] = $newName1;
        }

        $file2 = $this->request->getFile('productimage2');
        if ($file2->isValid() && !$file2->hasMoved()) {
            $newName2 = $file2->getRandomName();
            $file2->move('uploads/productos', $newName2);
            $data['productimage2'] = $newName2;
        }

        $file3 = $this->request->getFile('productimage3');
        if ($file3->isValid() && !$file3->hasMoved()) {
            $newName3 = $file3->getRandomName();
            $file3->move('uploads/productos', $newName3);
            $data['productimage3'] = $newName3;
        }

        if ($productoModel->update($id, $data)) {
            return redirect()->to('/admin/productos')->with('success', 'Producto actualizado exitosamente.');
        } else {
            return redirect()->back()->withInput()->with('errors', $productoModel->errors());
        }
    }

    public function delete($id)
    {
        $productoModel = new ProductoModel();
        if ($productoModel->delete($id)) {
            return redirect()->to('/admin/productos')->with('success', 'Producto eliminado exitosamente.');
        } else {
            return redirect()->back()->with('error', 'No se pudo eliminar el producto.');
        }
    }
}
