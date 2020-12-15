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
        $this->LoginModel = new LoginModel();
    }


    public function login_page() {
        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        echo view('template/header', $data);
        echo view('login', $data);
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
            $_SESSION['CurrentUser'] = $this->request->getVar('email');
            $_SESSION['CurrentPass'] = $this->request->getVar('password');
            $customer = $model->check(
                $this->request->getVar('email'),
                $this->request->getVar('password')
            );

            if ($_SESSION['CurrentUser'] === 'office@vienoscoffee.com' && 
                $_SESSION['CurrentPass'] === '12345678') {
                
               $_SESSION['customer'] = $customer;

               echo view('admin/admin_header', $data);
               echo view('admin/admin_my_page', $data);
               echo view('template/footer');
                
            }else
            if ($customer) {
                $_SESSION['customer'] = $customer;
                echo view('template/header', $data);
                echo view('my_page', $data);
                echo view('template/footer');
                }
            else {
                echo view('template/header', $data);
                echo view('login', $data);
                echo view('template/footer');
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


    public function updateinfo() {

        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();

        $data['name'] = $this->request->getVar('name');
        // $data['email'] = $this->request->getVar('email');
        $data['address'] = $this->request->getVar('address');
        $data['postalnumber'] = $this->request->getVar('postalnumber');
        $data['city'] = $this->request->getVar('city');
        $data['phonenumber'] = $this->request->getVar('phonenumber');

        $info = $this->LoginModel->hae();

        if ($data['name'] != null){
        $info['name'] = $data['name'];}
        // if ($data['email'] != null){
        // $info['email'] = $data['email'];}
        if ($data['address'] != null){
        $info['address'] = $data['address'];}
        if ($data['address'] != null){
        $info['postalnumber'] = $data['postalnumber'];}
        if ($data['city'] != null){
        $info['city'] = $data['city'];}
        if ($data['phonenumber'] != null){
        $info['phonenumber'] = $data['phonenumber'];}
   

        $this->LoginModel->replace($info);

        echo view('template/header', $data);
        echo view('my_page', $data);
        echo view('template/footer');
    }

    public function updatelogin() {

        $data['cart_count'] = $this->cartModel->count();
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['oldpass'] = $this->request->getVar('password_old');
        // oldpassword check
        if ($data['oldpass'] != $_SESSION['CurrentPass']){
            echo view('template/header', $data);
            echo view('my_page', $data);
            echo view('template/footer');
        }else {
            // Validation for login edit
            if (!$this->validate([
                'email' => 'required',
                'password_new' => 'required|min_length[8]|max_length[30]',
                'password_confirm' => 'required|min_length[8]|max_length[30]|matches[password_new]',
    
                ])){
                    echo view('template/header', $data);
                    echo view('my_page', $data);
                    echo view('template/footer');
                }
                else {
                // login information edit
                $data['email'] = $this->request->getVar('email');
                $data['password_new'] = password_hash($this->request->getVar('password_new'),PASSWORD_DEFAULT);
    
                $info = $this->LoginModel->hae();
    
                $info['email'] = $data['email'];
                $info['password'] = $data['password_new'];
    
                $this->LoginModel->replace($info);
    
                $_SESSION['customer'] = null;
                echo view('template/header', $data);
                echo view('login', $data);
                echo view('template/footer');
                }
        }
        

    }
    

    
    
}