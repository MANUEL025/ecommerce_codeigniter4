<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'descripcion' => [
                'type' => 'TEXT'
            ],
            'precio' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ],
            'imagen' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'categoria_id' => [
                'type' => 'INT'
            ],
            'stock' => [
                'type' => 'INT'
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
        $this->forge->createTable('productos');
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}
