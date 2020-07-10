<?php namespace App\Controllers;

class Home extends BaseController
{

	public function dashboard()
	{
	    $dat['title'] = "Dashboard";
	    $dat['menu'] = array(
	        'Ekle' => "/eklela"
        );
		return view('dashboard', $dat);
	}

}
