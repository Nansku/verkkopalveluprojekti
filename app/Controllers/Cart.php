<?php namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;

class Cart extends BaseController{

    private $categoryModel=null;
    private $productModel=null;
    private $cartModel=null;

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

    //kori sessarin luoja
    public function index(){

        $data['categories'] = $this->categoryModel->getCategory();
        $data['product'] = $this->cartModel->cart();
        $data['cart_count'] = $this->cartModel->count();

        echo view('template/header',$data );
		echo view('cart',$data);
		echo view('template/footer');
    }
    


// Koriin lisäys
    public function add($productID) {
        $this->cartModel->modelAdd($productID);
        //array_push($_SESSION['cart'],$productID);
        return redirect()->to(site_url('Coffee/product/' . $productID));
      
      }

// Kaikkien tuotteiden korista poistaminen
    public function clear(){
        $_SESSION['cart'] = null;
        $_SESSION['cart'] = array();
    }  

    public function remove($productID) {
        /*for ($i = count($_SESSION['cart'])-1; $i >= 0; $i--) {
            $product = $_SESSION['cart'][$i];

            if ($product['productID'] === $productID) {
                array_splice($_SESSION['cart'], $i, 1);
            }
        }*/

        $this->cartModel->remove($productID);
        return redirect()->to(site_url('cart/index'));	
    }
}