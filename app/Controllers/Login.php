<?php
namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;


class Login extends BaseController {

    private $CategoryModel = null;
    private $ProductModel = null;
    private $CartModel = null;

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        $this->CategoryModel = new CategoryModel();
        $this->ProductModel = new ProductModel();
        $this->cartModel = new CartModel();
    }


    public function login_page() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }
    
    public function register() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        echo view('template/header', $data);
        echo view('register', $data);
        echo view('template/footer');
    }

    public function registration() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        $model = new LoginModel();

        if (!$this->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'postalnumber' => 'required',
            'city' => 'required',
            'password' => 'required|min_length[8]|max_length[30]',
            'confirmpassword' => 'required|min_length[8]|max_length[30]|matches[password]',
            
        ])){
            echo view('template/header', $data);
            echo view('register', $data);
            echo view('template/footer');
        }
        else {
            $model->save([
                'name' => $this->request->getVar('name'),
                'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                'address' => $this->request->getVar('address'),
                'postalnumber' => $this->request->getVar('postalnumber'),
                'city' => $this->request->getVar('city'),
                'email' => $this->request->getVar('email'),
                'phonenumber' => $this->request->getVar('phonenumber')

            ]);
            return redirect('login_page');
        }
    }

    public function check() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        $model = new LoginModel();

        if (!$this->validate([
            'email' => 'required',
            'password' => 'required'
        ])){
            echo view('template/header', $data);
            echo view('login', $data);
            echo view('template/footer');
        }
        else {
            $customer = $model->check(
                $this->request->getVar('email'),
                $this->request->getVar('password')
            );

            if ($customer = ['office@vienoscoffee.com','12345678']) {
                
                $_SESSION['customer'] = $customer;

                echo view('admin/admin_header', $data);
                echo view('admin/admin_my_page', $data);
                echo view('template/footer');
                
            }elseif ($customer) {
                $_SESSION['customer'] = $customer;
                echo view('template/header', $data);
                echo view('my_page', $data);
                echo view('template/footer');
                }
            else {
                echo view('template/header', $data);
                echo view('login', $data);
                echo view('template/footer');;
            }
        }
    }

    public function logout() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();

        $_SESSION['customer'] = null;
        echo view('template/header', $data);
        echo view('login', $data);
        echo view('template/footer');
    }
    
}