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
        echo view('cart', $data);
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
                if($categorynum == 'allProducts') {
                        $data['products'] =$this->ProductModel->getAllProducts(); 
                        $data['categories'] =$this->CategoryModel->getCategory();
                        $data['title'] = 'Products';
                        echo view('template/header', $data);
                        echo view('products',$data);
                        echo view('template/footer');
                } else {
                        $data['products'] =$this->ProductModel->getWithCategory($categorynum);
                        $data['categories'] =$this->CategoryModel->getCategory();
                        $data['title'] = 'Products';
                        echo view('template/header', $data);
                        echo view('products',$data);
                        echo view('template/footer');    
                }

        }

        // Opens single products pages
        public function product($productID){
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['products'] = $this->ProductModel->getProduct($productID);
                echo view('template/header', $data);
                echo view('product',$data);
                echo view('template/footer');
        }
}


