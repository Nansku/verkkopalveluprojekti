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
    public function add($product_id) {
        $this->cartModel->modelAdd($product_id);
        //array_push($_SESSION['cart'],$product_id);
        return redirect()->to(site_url('Coffee/product/' . $product_id));
      
      }

    // Clears the whole cart
    public function clear() {
        $this->cartModel->clear();
        return redirect()->to(site_url('cart/index'));		
    }  

    // Removes certain products one at a time 
    public function remove($product_id) {
        $this->cartModel->remove($product_id);
        return redirect()->to(site_url('cart/index'));	
    }

    public function order() {
        $data['categories']  = $this->categoryModel->getCategory();
        $customer = [
            'customername' => $this->request->getPost('customername'),
            'address' => $this->request->getPost('address'),
            'postalnum' => $this->request->getPost('postalnum'),
            'city' => $this->request->getPost('city'),
            'email' => $this->request->getPost('email'),
            'phonenumber' => $this->request->getPost('phonenumber')
        ];

        // $orderID = $this->orderModel->getOrdernum();
        $this->cartModel->order($customer);

        $data['cart_count'] = $this->cartModel->count();
        echo view ('template/header', $data);
        echo view ('thank_you');
        echo view ('template/footer');
    }
}