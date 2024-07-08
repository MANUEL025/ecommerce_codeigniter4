<?php
// app/Models/NotificacionModel.php
namespace App\Models;

use CodeIgniter\Model;

class NotificacionModel extends Model
{
    protected $table = 'notificaciones';
    protected $primaryKey = 'id';
    protected $allowedFields = ['mensaje', 'leida', 'created_at'];
}
