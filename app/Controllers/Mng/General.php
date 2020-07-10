<?php


namespace App\Controllers\Mng;

use App\Controllers\BaseController;

class General extends BaseController
{
    public function list()
    {

    }

    public function getinfo()
    {

    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function list()
    {
        $dat['title'] = "Genel Ayarlar";
        $dat['menu']  = array(
            '<button type="button" class="btn btn-primary btn-sm daterange" data-toggle="tooltip" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>'  => "/ekle",
            'Liste' => "/list",
        );
        return view('mng/general', $dat);
    }
}
