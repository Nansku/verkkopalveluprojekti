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
        public function story()
	{
        $data['title'] = 'Story';
        echo view('template/header');
        echo view('story');
        echo view('template/footer');
        }
        
        public function my_page()
	{
        $data['title'] = 'My Page';
        echo view('template/header');
        echo view('my_page');
        echo view('template/footer');
        }
        
        public function cart()
	{
        $data['title'] = 'Shopping Cart';
        echo view('template/header');
        echo view('cart');
        echo view('template/footer');
        }
        
        public function faq()
	{
        $data['title'] = 'FAQ';
        echo view('template/header');
        echo view('faq');
        echo view('template/footer');
	}
}


