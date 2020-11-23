<?php namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;

class Cart extends BaseController{

    private $categoryModel=null;
    private $productModel=null;
    private $cartModel=null;

    // Creates the session
    public function __construct(){
        $session = \Config\Services::session();
        $session->start();
        if (!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        $this->categoryModel = new CategoryModel();
        $this->productModel = new ProductModel();
        $this->cartModel = new CartModel();
    }

    // index
    public function index(){

        $data['categories'] = $this->categoryModel->getCategory();
        $data['product'] = $this->cartModel->cart();
        $data['cart_count'] = $this->cartModel->count();

        echo view('template/header',$data );
		echo view('cart',$data);
		echo view('template/footer');
    }
    
    // Add an item to the cart 
    public function add($productID) {
        $this->cartModel->modelAdd($productID);
        //array_push($_SESSION['cart'],$productID);
        return redirect()->to(site_url('Coffee/product/' . $productID));
      
      }

    // Clears the whole cart
    public function clear() {
        $this->cartModel->clear();
        return redirect()->to(site_url('cart/index'));		
    }  

    // Removes certain products one at a time 
    public function remove($productID) {
        $this->cartModel->remove($productID);
        return redirect()->to(site_url('cart/index'));	
    }
}