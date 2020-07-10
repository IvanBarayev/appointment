<?php

namespace App\Controllers\Mng;

use App\Controllers\BaseController;

class Services extends BaseController
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
