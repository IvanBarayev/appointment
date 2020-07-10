<?php

namespace App\Controllers\Service;

use App\Controllers\BaseController;

class Service extends BaseController
{
    public function list()
    {
        $dat['title'] = "Hizmet Yönetimi";
        $dat['menu']  = array(
            'Ekle'  => "/ekle",
            'Liste' => "/list",
        );
        return view('service/service', $dat);
    }
}
