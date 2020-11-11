<?php namespace App\Controllers;

class Coffee extends BaseController
{
	public function index()
	{
        $data['title'] = 'Kahvikauppa';
        echo view('template/header');
        echo view('kahvikauppa');
        echo view('template/footer');
	}


    public function contact_us()
	{
        $data['title'] = 'Contact_us';
        echo view('template/header');
        echo view('contact_us');
        echo view('template/footer');
	}
	//-------
	//--------------------------------------------------------------------

}


