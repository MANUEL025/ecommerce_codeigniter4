<?php
// app/Controllers/Admin/NotificacionController.php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NotificacionModel;

class NotificacionController extends BaseController
{
    public function index()
    {
        $notificacionModel = new NotificacionModel();
        $data['notificaciones'] = $notificacionModel->findAll();

        return view('admin/notificaciones/index', $data);
    }

    public function markAsRead($id)
    {
        $notificacionModel = new NotificacionModel();
        $notificacionModel->update($id, ['leida' => 1]);

        return redirect()->to('/admin/notificaciones');
    }
}
