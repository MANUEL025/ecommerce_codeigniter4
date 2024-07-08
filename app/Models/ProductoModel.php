<?php
// app/Models/ProductoModel.php
namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion', 'precio', 'productimage1', 'productimage2', 'productimage3', 'categoria_id', 'stock'];

    // Agregar reglas de validación
    protected $validationRules = [
        'nombre' => 'required|min_length[3]|max_length[255]',
        'descripcion' => 'required|min_length[10]',
        'precio' => 'required|decimal',
        'categoria_id' => 'required|integer',
        'stock' => 'required|integer'
    ];

    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'min_length' => 'El nombre debe tener al menos 3 caracteres.',
            'max_length' => 'El nombre no puede tener más de 255 caracteres.'
        ],
        'descripcion' => [
            'required' => 'La descripción es obligatoria.',
            'min_length' => 'La descripción debe tener al menos 10 caracteres.'
        ],
        'precio' => [
            'required' => 'El precio es obligatorio.',
            'decimal' => 'El precio debe ser un número decimal válido.'
        ],
        'categoria_id' => [
            'required' => 'La categoría es obligatoria.',
            'integer' => 'La categoría debe ser un número entero válido.'
        ],
        'stock' => [
            'required' => 'El stock es obligatorio.',
            'integer' => 'El stock debe ser un número entero válido.'
        ]
    ];
}
