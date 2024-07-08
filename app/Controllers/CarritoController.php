<?php
// app/Controllers/CarritoController.php
namespace App\Controllers;

use App\Models\ProductoModel;

class CarritoController extends BaseController
{
    public function index()
    {
        $session = session();
        $carrito = $session->get('carrito');

        if (empty($carrito)) {
            $data['carrito'] = [];
            $data['total'] = 0; // Inicializar el total en 0 si el carrito está vacío
        } else {
            // Calcular el total del carrito
            $total = 0;
            foreach ($carrito as $item) {
                $total += $item['precio'] * $item['cantidad'];
            }
            $data['carrito'] = $carrito;
            $data['total'] = $total;
        }

        return view('carrito/index', $data);
    }

    public function add($id)
    {
        if (!session()->get('usuario_id')) {
            return redirect()->to('/auth/login')->with('error', 'Debe iniciar sesión para agregar productos al carrito.');
        }
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        $session = session();
        $carrito = $session->get('carrito') ?? [];

        // Si el producto ya está en el carrito, incrementar la cantidad
        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            // Agregar nuevo producto al carrito
            $carrito[$id] = [
                'id' => $producto['id'],
                'nombre' => $producto['nombre'],
                'precio' => $producto['precio'],
                'cantidad' => 1
            ];
        }

        $session->set('carrito', $carrito);

        return redirect()->to('/carrito');
    }

   public function update($id)
{
    if (!session()->get('usuario_id')) {
        return redirect()->to('/auth/login')->with('error', 'Debe iniciar sesión para modificar productos en el carrito.');
    }

    $cantidad = $this->request->getPost('cantidad');

    if (!is_numeric($cantidad) || $cantidad <= 0) {
        return redirect()->back()->with('error', 'La cantidad debe ser un número positivo.');
    }

    $session = session();
    $carrito = $session->get('carrito');

    // Actualizar la cantidad del producto
    if (isset($carrito[$id])) {
        $carrito[$id]['cantidad'] = $cantidad;
    }

    // Recalcular el subtotal y el total del carrito
    $subtotal = $carrito[$id]['precio'] * $cantidad;
    $carrito[$id]['subtotal'] = $subtotal;

    $total = 0;
    foreach ($carrito as $item) {
        $total += $item['subtotal'];
    }

    $session->set('carrito', $carrito);
    $session->set('total', $total);

    // Redirigir de vuelta a la página del carrito
    return redirect()->to('/carrito');
}

    public function remove($id)
    {
        if (!session()->get('usuario_id')) {
            return redirect()->to('/auth/login')->with('error', 'Debe iniciar sesión para eliminar productos del carrito.');
        }
        $session = session();
        $carrito = $session->get('carrito');

        // Si el producto está en el carrito, eliminarlo
        if (isset($carrito[$id])) {
            unset($carrito[$id]);
        }

        // Verificar si el carrito está vacío después de eliminar
        if (empty($carrito)) {
            $session->remove('carrito'); // Eliminar la variable de sesión del carrito
        } else {
            $session->set('carrito', $carrito);
        }

        return redirect()->to('/carrito');
    }
    
}
