<?php namespace App\Controllers;

class Coffee extends BaseController
{
	public function index()
	{
        echo view('template/header');
        echo view('kahvikauppa');
        echo view('template/footer');
	}

	//--------------------------------------------------------------------

}


