<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model {
    protected $table = 'customer';
    protected $allowedFields = ['name', 'password', 'address', 'postalnumber', 'city', 'email', 'phonenumber'];

    public function getUsers() {
        return $this->findAll();
    }
    public function check($email, $password) {
        $this->where('email',$email);
        $query = $this->get();
        $row = $query->getRow();
        if ($row) {
            if (password_verify($password,$row->password)) {
                return $row;
            }
        }
        return null;
    }
    public function hae() {
        $emailID = $_SESSION['CurrentUser'];
        $sql = "SELECT * FROM CUSTOMER WHERE EMAIL = :no:";
        $query = $this->query($sql, ['no' => $emailID]);

        foreach ($query->getResultArray() as $row){
            return $row;
        }
    }
}