<?php namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class Cart extends BaseController{

    private $categoryModel=null;
    private $productModel=null;

    public function __construct(){
        $session = \Config\Services::session();
        $session->start();
        if (!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        $this->categoryModel = new CategoryModel();
        $this->productModel = new ProductModel();
    }
    public function index(){
        $data['categories'] = $this->categoryModel->getCategories();
        if (count($_SESSION['cart']) > 0) {
        $products = $this->productModel->getProducts($_SESSION['cart']);
        }
        else{
            $products = array();
        }

        $data['products'] = $products;
        $data['cart_count'] = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
        echo view('template/header',$data );
		echo view('cart',$data);
		echo view('template/footer');
    }
    



    public function add($productID) {
        array_push($_SESSION['cart'],$productID);
      //  return redirect()->to(site_url('/kauppa/tuote/' . $tproductID));
      
      }

    public function clear(){
        $_SESSION['cart'] = null;
        return redirect()->to(site_url('/'));
    }  
}