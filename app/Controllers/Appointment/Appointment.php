<?php
namespace App\Controllers\Appointment;
use App\Controllers\BaseController;

class Appointment extends BaseController
{
    public function list()
    {
        $dat['title'] = "Randevu Yönetimi";
        $dat['menu'] = array(
            'Randevu Ekle' => "/ekle",
            'Liste' => "/list"
        );

        return view('appointment/appointment', $dat);
    }
}
