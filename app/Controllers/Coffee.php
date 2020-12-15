<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;

class Coffee extends BaseController
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
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['products'] = $this->ProductModel->randomProducts();

                $data['title'] = 'Kahvikauppa';
                echo view('template/header', $data);
                echo view('kahvikauppa', $data);
                echo view('template/footer');
        }



        public function contact_us()
        {
                $data['cart_count'] = $this->cartModel->count();
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['title'] = 'Contact_us';
                echo view('template/header', $data);
                echo view('contact_us');
                echo view('template/footer');
        }
        //-------
        //--------------------------------------------------------------------
        public function story()
        {
                $data['cart_count'] = $this->cartModel->count();
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['title'] = 'Story';
                echo view('template/header', $data);
                echo view('story');
                echo view('template/footer');
        }

        // Admin log in
        public function admin_my_page()
        {
                if (!isset($_SESSION['customer'])) {
                        return redirect('login_page');
                }
                $data['cart_count'] = $this->cartModel->count();
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['title'] = 'My Page';
                echo view('admin/admin_header', $data);
                echo view('admin/admin_my_page');
                echo view('template/footer');
        }


        public function my_page()
        {
                if (!isset($_SESSION['customer'])) {
                        return redirect('login_page');
                }
                $data['cart_count'] = $this->cartModel->count();
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['title'] = 'My Page';
                echo view('template/header', $data);
                echo view('my_page');
                echo view('template/footer');
        }

        public function cart()
        {
                $data['cart_count'] = $this->cartModel->count();
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['title'] = 'Shopping Cart';
                echo view('template/header', $data);
                echo view('cart', $data);
                echo view('template/footer');
        }

        public function faq()
        {
                $data['cart_count'] = $this->cartModel->count();
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['title'] = 'FAQ';
                echo view('template/header', $data);
                echo view('faq');
                echo view('template/footer');
        }

        public function products($category_id)
        {
                $data['cart_count'] = $this->cartModel->count();
                if ($category_id == 'allProducts') {

                        $data['products'] = $this->ProductModel->getAllProducts();
                        $data['categories'] = $this->CategoryModel->getCategory();
                        $data['title'] = 'Products';
                        echo view('template/header', $data);
                        echo view('products', $data);
                        echo view('template/footer');
                } else {
                        $data['products'] = $this->ProductModel->getWithCategory($category_id);
                        $data['categories'] = $this->CategoryModel->getCategory();
                        $data['title'] = 'Products';
                        echo view('template/header', $data);
                        echo view('products', $data);
                        echo view('template/footer');
                }
        }

        // Opens single products pages
        public function product($product_id)
        {
                $data['cart_count'] = $this->cartModel->count();
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['productrand'] = $this->ProductModel->randomProducts();
                $data['products'] = $this->ProductModel->getProduct($product_id);
                echo view('template/header', $data);
                echo view('product', $data);
                echo view('template/footer');
        }
        // Etsii Tuotteita Nimen perusteella
        public function search() {
                $productname = $this->request->getPost('search');
                $data['categories'] = $this->CategoryModel->getCategory();
                $data['products'] = $this->ProductModel->getProductByName($productname);
                $data['cart_count'] = $this->cartModel->count();
                echo view('template/header',$data);
                echo view('search');
                echo view('template/footer');
            }
}