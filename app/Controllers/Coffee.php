<?php namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class Coffee extends BaseController
{

        private $CategoryModel = null;
        private $ProductModel = null;

        function __construct()
        {
         $this->CategoryModel = new CategoryModel();
         $this->ProductModel = new ProductModel();
        }


	public function index()
	{
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = 'Kahvikauppa';
        echo view('template/header', $data);
        echo view('kahvikauppa');
        echo view('template/footer');
	}


    public function contact_us()
	{
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = 'Contact_us';
        echo view('template/header', $data);
        echo view('contact_us');
        echo view('template/footer');
	}
	//-------
	//--------------------------------------------------------------------
        public function story()
	{
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = 'Story';
        echo view('template/header', $data);
        echo view('story');
        echo view('template/footer');
        }
        
        public function my_page()
	{    
        if (!isset($_SESSION['customer'])) {
                return redirect('login_page');
        }
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = 'My Page';
        echo view('template/header',$data);
        echo view('my_page');
        echo view('template/footer');
        }
        
        public function cart()
	{
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = 'Shopping Cart';
        echo view('template/header',$data);
        echo view('cart');
        echo view('template/footer');
        }
        
        public function faq()
	{
        $data['categories'] =$this->CategoryModel->getCategory();        
        $data['title'] = 'FAQ';
        echo view('template/header',$data);
        echo view('faq');
        echo view('template/footer');
        }
        
        public function products($categorynum) {
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['products'] =$this->ProductModel->getWithCategory($categorynum);
        $data['title'] = 'Products';
        echo view('template/header', $data);
        echo view('products',$data);
        echo view('template/footer');
        }
}


