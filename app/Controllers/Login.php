<?php
namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\CategoryModel;


const REGISTER_TITLE = 'Rekisteröidy kahvikauppaan';
const LOGIN_TITLE = 'Kirjaudu kahvikauppaan';

class Login extends BaseController {

    private $CategoryModel = null;

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        $this->CategoryModel = new CategoryModel();
    }


    public function login_page() {
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = LOGIN_TITLE;
        echo view('template/header', $data);
        echo view('login', $data);
        echo view('template/footer', $data);
    }
    
    public function register() {
        $data['categories'] =$this->CategoryModel->getCategory();
        $data['title'] = REGISTER_TITLE;
        echo view('template/header', $data);
        echo view('register', $data);
        echo view('template/footer', $data);
    }

    public function registration() {
        $model = new LoginModel();

        if (!$this->validate([
            'email' => 'required',
            'password' => 'required|min_length[8]|max_length[30]',
            'confirmpassword' => 'required|min_length[8]|max_length[30]|matches[password]',
        ])){
            echo view('template/header' , ['title' => REGISTER_TITLE]);
            echo view('login/register');
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