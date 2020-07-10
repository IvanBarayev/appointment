<?php

namespace App\Controllers\Clients;

use App\Controllers\BaseController;

class Clients extends BaseController
{
    public function list()
    {
        $dat['title'] = "Müşteri Yönetimi";
        $dat['menu']  = array(
            'Ekle'  => "/ekle",
            'Liste' => "/list",
        );
        return view('clients/clients', $dat);
    }
}
