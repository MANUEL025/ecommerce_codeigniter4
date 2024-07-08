<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetallePedidosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'pedido_id' => [
                'type' => 'INT'
            ],
            'producto_id' => [
                'type' => 'INT'
            ],
            'cantidad' => [
                'type' => 'INT'
            ],
            'precio' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pedido_id', 'pedidos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('producto_id', 'productos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detalle_pedidos');
    }

    public function down()
    {
        $this->forge->dropTable('detalle_pedidos');
    }
}
