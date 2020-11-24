<?php namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;

class Admin extends BaseController
{

        private $CategoryModel = null;
        private $ProductModel = null;
        private $CartModel = null;

        function __construct()
        {
         $this->CategoryModel = new CategoryModel();
         $this->ProductModel = new ProductModel();
         $this->cartModel = new CartModel();
        }


	public function index()
	{
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = 'Kahvikauppa';
        echo view('admin/admin_header', $data);
        echo view('kahvikauppa');
        echo view('template/footer');
    }
    
}