<?php
namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;


const REGISTER_TITLE = 'Register as user';
const LOGIN_TITLE = 'Login';

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
        $data['title'] = LOGIN_TITLE;
        echo view('template/header', $data);
        echo view('login', $data);
        echo view('template/footer', $data);
    }
    
    public function register() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = REGISTER_TITLE;
        echo view('template/header', $data);
        echo view('register', $data);
        echo view('template/footer', $data);
    }

    public function registration() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        $model = new LoginModel();

        if (!$this->validate([
            'email' => 'required',
            'password' => 'required|min_length[8]|max_length[30]',
            'confirmpassword' => 'required|min_length[8]|max_length[30]|matches[password]',
        ])){
            echo view('template/header' , ['title' => REGISTER_TITLE], $data);
            echo view('login/register', $data);
            echo view('template/footer', $data);
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
            return redirect('login');
        }
    }

    public function check() {
        $model = new LoginModel();

        if (!$this->validate([
            'email' => 'required|min_length[8]|max_length[100]',
            'password' => 'required|min_length[8]|max_length[255]'
        ])){
            echo view('template/header' , ['title' => LOGIN_TITLE]);
            echo view('login');
            echo view('template/footer');
        }
        else {
            $customer = $model->check(
                $this->request->getVar('email'),
                $this->request->getVar('password')
            );
            if ($customer) {
                $_SESSION['customer'] = $customer;
                return redirect('my_page');
            }
            else {
                return redirect('login');
            }
        }
    } 
    
}