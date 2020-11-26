<?php namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CategoryModel;
use App\Models\OrderModel;

class Order extends BaseController {
    private $cartModel = null;
    private $categoryModel = null;
    private $orderModel = null;

    // Creates the session
    public function __construct(){
        $session = \Config\Services::session();
        $session->start();
        if (!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        $this->categoryModel = new CategoryModel();
        $this->orderModel = new OrderModel();
        $this->cartModel = new CartModel();
    }

    // index
    public function index(){

        $data['categories'] = $this->categoryModel->getCategory();
        $data['product'] = $this->cartModel->cart();
        $data['cart_count'] = $this->cartModel->count();

        echo view('template/header',$data );
		echo view('order',$data);
		echo view('template/footer');
    }

}